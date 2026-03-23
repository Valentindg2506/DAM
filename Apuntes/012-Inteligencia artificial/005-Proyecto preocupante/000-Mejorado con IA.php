<?php
session_start();

// -------------------------
// Configuración del modelo
// -------------------------
$OLLAMA_URL = "http://localhost:11434/api/generate";
$MODEL      = "qwen2.5-coder:3b";

// -------------------------
// Estado en sesión
// -------------------------
if (!isset($_SESSION['chat'])) {
    $_SESSION['chat'] = [];
}
if (!isset($_SESSION['last_code'])) {
    $_SESSION['last_code'] = "";
}

$chat          = $_SESSION['chat'];
$generatedCode = $_SESSION['last_code'];
$errorMessage  = "";

// -------------------------
// Reset de conversación
// -------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset_chat'])) {
    $_SESSION['chat'] = [];
    $_SESSION['last_code'] = "";
    $chat = [];
    $generatedCode = "";
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['descripcion'])) {
    $userMsg = trim($_POST['descripcion']);

    if ($userMsg === "") {
        $errorMessage = "La descripción no puede estar vacía.";
    } else {
        // Añadimos mensaje del usuario al historial
        $chat[] = [
            'role'    => 'user',
            'content' => $userMsg,
        ];

        // Construimos un prompt "tipo sistema + historial"
        // NOTA: Para evitar prompts gigantes, solo usamos los últimos N mensajes.
        $MAX_MESSAGES = 8; // últimos 8 mensajes del historial
        $recentChat = array_slice($chat, -$MAX_MESSAGES);

        $conversationText = "";
        foreach ($recentChat as $msg) {
            $prefix = $msg['role'] === 'user' ? "Usuario:" : "Asistente:";
            $conversationText .= $prefix . " " . $msg['content'] . "\n";
        }

        $systemPrompt =
            "Eres un generador de páginas web en HTML5 con CSS embebido en <style>.\n" .
            "- Siempre devuelve SOLO el código completo de la página (etiquetas <html>, <head>, <body>, etc.).\n" .
            "- No añadas explicaciones fuera del código HTML.\n" .
            "- Usa un diseño moderno, responsive y profesional.\n" .
            "- El idioma del contenido de la web debe ser el mismo que el del usuario.\n\n";

        $promptFull =
            $systemPrompt .
            "Historial reciente de la conversación (usuario y asistente):\n" .
            $conversationText .
            "\nTeniendo en cuenta la conversación, genera ahora la versión actualizada de la página HTML completa.\n";

        $data = [
            "model"  => $MODEL,
            "prompt" => $promptFull,
            "stream" => false,
        ];

        $payload = json_encode($data);

        if ($payload === false) {
            $errorMessage = "Error al codificar los datos de la petición.";
        } else {
            $ch = curl_init($OLLAMA_URL);

            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST           => true,
                CURLOPT_HTTPHEADER     => ["Content-Type: application/json"],
                CURLOPT_POSTFIELDS     => $payload,
                CURLOPT_TIMEOUT        => 60,
            ]);

            $response = curl_exec($ch);

            if ($response === false) {
                $errorMessage = "Error en la petición cURL: " . curl_error($ch);
            } else {
                $result = json_decode($response, true);

                if (json_last_error() !== JSON_ERROR_NONE) {
                    $errorMessage = "Error al decodificar la respuesta JSON: " . json_last_error_msg();
                } elseif (!isset($result["response"])) {
                    $errorMessage = "La respuesta del modelo no contiene el campo 'response'.";
                } else {
                    $generatedCode = $result["response"];
                    $_SESSION['last_code'] = $generatedCode;

                    // Mensaje corto del asistente para el chat (no metemos todo el HTML en el historial)
                    $chat[] = [
                        'role'    => 'assistant',
                        'content' => 'He generado una nueva versión del HTML/CSS según tu última petición. Puedes ver el código y la vista previa a la derecha.',
                    ];
                }
            }

            curl_close($ch);
        }
    }

    // Actualizamos el historial en sesión
    $_SESSION['chat'] = $chat;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>IA Web Builder · Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            --bg: #020617;
            --bg-elevated: rgba(15, 23, 42, 0.85);
            --bg-chat: rgba(15, 23, 42, 0.92);
            --border-subtle: rgba(148, 163, 184, 0.18);
            --accent: #2563eb;
            --accent-soft: rgba(37, 99, 235, 0.18);
            --accent-strong: #1d4ed8;
            --text-main: #e5e7eb;
            --text-soft: #9ca3af;
            --text-strong: #f9fafb;
            --error: #f97373;
            --radius-lg: 18px;
            --radius-md: 10px;
            --radius-pill: 999px;
            --shadow-soft: 0 22px 60px rgba(15, 23, 42, 0.9);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background:
                radial-gradient(circle at top, rgba(37, 99, 235, 0.25), transparent 55%),
                radial-gradient(circle at bottom, rgba(30, 64, 175, 0.3), transparent 60%),
                #020617;
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            justify-content: center;
        }

        .shell {
            width: 100%;
            max-width: 1100px;
            padding: 18px 14px 26px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        @media (min-width: 900px) {
            .shell {
                padding: 24px 20px 30px;
            }
        }

        header {
            display: flex;
            justify-content: center;
        }

        .topbar {
            width: 100%;
            max-width: 900px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            padding: 10px 14px;
            border-radius: var(--radius-pill);
            border: 1px solid rgba(148, 163, 184, 0.35);
            background: radial-gradient(circle at top left,
                    rgba(37, 99, 235, 0.35),
                    transparent 55%),
                rgba(15, 23, 42, 0.9);
            box-shadow:
                0 0 0 1px rgba(15, 23, 42, 0.8),
                0 18px 40px rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(20px);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .orb {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background:
                conic-gradient(from 210deg, #2563eb, #22d3ee, #a855f7, #2563eb);
            padding: 2px;
        }

        .orb-inner {
            width: 100%;
            height: 100%;
            border-radius: inherit;
            background: #020617;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: 600;
            color: var(--text-strong);
        }

        .brand-text {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .brand-title {
            font-size: 15px;
            font-weight: 600;
            color: var(--text-strong);
        }

        .brand-sub {
            font-size: 12px;
            color: var(--text-soft);
        }

        .top-meta {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 11px;
            color: var(--text-soft);
        }

        .chip {
            padding: 4px 10px;
            border-radius: var(--radius-pill);
            border: 1px solid rgba(148, 163, 184, 0.5);
            background: rgba(15, 23, 42, 0.85);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .chip-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #22c55e;
        }

        .chip-accent {
            border-color: rgba(37, 99, 235, 0.7);
            background: var(--accent-soft);
            color: #bfdbfe;
        }

        .chip-label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        /* Contenedor tipo chat */
        .chat-frame {
            margin: 0 auto;
            width: 100%;
            max-width: 900px;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .chat-panel {
            flex: 1;
            border-radius: 24px;
            border: 1px solid var(--border-subtle);
            background: radial-gradient(circle at top,
                    rgba(37, 99, 235, 0.16),
                    transparent 55%),
                var(--bg-chat);
            box-shadow: var(--shadow-soft);
            display: grid;
            grid-template-columns: minmax(0, 1.05fr) minmax(0, 1.3fr);
            overflow: hidden;
        }

        @media (max-width: 900px) {
            .chat-panel {
                grid-template-columns: 1fr;
                border-radius: 18px;
            }
        }

        .left-pane {
            padding: 18px 18px 16px;
            border-right: 1px solid rgba(31, 41, 55, 0.8);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        @media (max-width: 900px) {
            .left-pane {
                border-right: none;
                border-bottom: 1px solid rgba(31, 41, 55, 0.8);
            }
        }

        .system-msg {
            display: flex;
            gap: 10px;
            align-items: flex-start;
            font-size: 13px;
        }

        .system-avatar {
            width: 26px;
            height: 26px;
            border-radius: 999px;
            background: linear-gradient(135deg, #2563eb, #22d3ee);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #eff6ff;
            flex-shrink: 0;
        }

        .msg-bubble {
            background: rgba(15, 23, 42, 0.95);
            border-radius: 16px;
            padding: 10px 12px;
            border: 1px solid rgba(148, 163, 184, 0.35);
        }

        .msg-bubble strong {
            color: var(--text-strong);
        }

        .msg-bubble p {
            margin: 4px 0 0;
            color: var(--text-soft);
        }

        .chat-history-wrapper {
            flex: 1;
            min-height: 80px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .chat-history-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 11px;
            color: var(--text-soft);
        }

        .chat-history {
            margin-top: 4px;
            flex: 1;
            max-height: 260px;
            overflow-y: auto;
            padding-right: 4px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .chat-item {
            display: flex;
            gap: 8px;
            font-size: 13px;
        }

        .chat-item.user {
            justify-content: flex-end;
        }

        .chat-item.assistant {
            justify-content: flex-start;
        }

        .chat-item-bubble {
            max-width: 85%;
            padding: 8px 10px;
            border-radius: 14px;
        }

        .chat-item.user .chat-item-bubble {
            background: linear-gradient(135deg, var(--accent), var(--accent-strong));
            color: #eff6ff;
            border-bottom-right-radius: 4px;
        }

        .chat-item.assistant .chat-item-bubble {
            background: rgba(15, 23, 42, 0.96);
            border: 1px solid rgba(148, 163, 184, 0.35);
            border-bottom-left-radius: 4px;
        }

        .chat-item-label {
            font-size: 11px;
            color: var(--text-soft);
            margin-bottom: 2px;
        }

        .prompt-label {
            font-size: 12px;
            color: var(--text-soft);
            margin-top: 4px;
            margin-bottom: 6px;
        }

        .input-shell {
            border-radius: 18px;
            border: 1px solid rgba(31, 41, 55, 0.95);
            background: rgba(15, 23, 42, 0.95);
            padding: 10px 10px 8px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .input-shell textarea {
            width: 100%;
            min-height: 80px;
            max-height: 180px;
            resize: vertical;
            border: none;
            outline: none;
            background: transparent;
            color: var(--text-main);
            font-size: 13px;
            font-family: inherit;
        }

        .input-shell textarea::placeholder {
            color: #6b7280;
        }

        .input-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 8px;
            font-size: 11px;
            color: var(--text-soft);
        }

        .input-actions {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .btn {
            border-radius: var(--radius-pill);
            font-size: 12px;
            padding: 7px 14px;
            border: 1px solid transparent;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: none;
            color: var(--text-main);
            transition: background 0.12s ease, border-color 0.12s ease, transform 0.05s ease;
        }

        .btn:active {
            transform: translateY(1px);
        }

        .btn-ghost {
            border-color: rgba(55, 65, 81, 0.9);
            background: rgba(15, 23, 42, 0.85);
        }

        .btn-ghost:hover {
            border-color: rgba(75, 85, 99, 1);
            background: rgba(15, 23, 42, 1);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent), var(--accent-strong));
            border: none;
            color: #eff6ff;
            box-shadow: 0 12px 30px rgba(37, 99, 235, 0.55);
        }

        .btn-primary:hover {
            filter: brightness(1.04);
        }

        .btn-soft {
            border-color: rgba(37, 99, 235, 0.6);
            background: rgba(37, 99, 235, 0.1);
            color: #bfdbfe;
        }

        .status {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
        }

        .status-ok .status-dot {
            background: #22c55e;
        }

        .status-idle .status-dot {
            background: #6b7280;
        }

        .status-error .status-dot {
            background: var(--error);
        }

        .status span:last-child {
            white-space: nowrap;
        }

        .error-box {
            margin-top: 4px;
            padding: 7px 10px;
            border-radius: 10px;
            background: rgba(248, 113, 113, 0.08);
            border: 1px solid rgba(248, 113, 113, 0.5);
            color: #fecaca;
            font-size: 11px;
        }

        .right-pane {
            padding: 18px 18px 16px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            background: radial-gradient(circle at top left,
                    rgba(37, 99, 235, 0.14),
                    transparent 55%),
                rgba(6, 15, 30, 0.9);
        }

        .right-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            gap: 8px;
        }

        .right-title {
            font-size: 13px;
            font-weight: 500;
            color: var(--text-strong);
        }

        .right-sub {
            font-size: 11px;
            color: var(--text-soft);
        }

        .code-block {
            border-radius: 14px;
            border: 1px solid rgba(30, 64, 175, 0.8);
            background: radial-gradient(circle at top left,
                    rgba(15, 23, 42, 1),
                    rgba(15, 23, 42, 0.96));
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .code-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 11px;
            color: var(--text-soft);
        }

        .code-header-left {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .code-dots {
            display: flex;
            gap: 4px;
        }

        .code-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
        }

        .code-dot.red { background: #f97373; }
        .code-dot.amber { background: #facc15; }
        .code-dot.green { background: #22c55e; }

        .code-body textarea {
            width: 100%;
            min-height: 170px;
            resize: vertical;
            border-radius: 10px;
            border: none;
            padding: 8px 9px;
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 12px;
            line-height: 1.4;
            background: #020617;
            color: #e5e7eb;
            outline: none;
            white-space: pre;
        }

        .code-body textarea::selection {
            background: rgba(37, 99, 235, 0.4);
        }

        .empty-hint {
            font-size: 12px;
            color: var(--text-soft);
            padding: 14px 6px 10px;
            text-align: center;
        }

        .preview-block {
            border-radius: 14px;
            border: 1px solid rgba(31, 41, 55, 0.9);
            background: #020617;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .preview-header {
            padding: 7px 10px;
            border-bottom: 1px solid rgba(31, 41, 55, 0.95);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 11px;
            color: var(--text-soft);
        }

        .preview-tag {
            padding: 2px 8px;
            border-radius: 999px;
            border: 1px solid rgba(31, 41, 55, 0.95);
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .preview-body iframe {
            width: 100%;
            height: 260px;
            border: none;
            background: white;
        }

        .preview-empty {
            padding: 26px 10px 22px;
            text-align: center;
            font-size: 12px;
            color: var(--text-soft);
        }

        footer {
            margin-top: 10px;
            display: flex;
            justify-content: center;
        }

        .foot-note {
            max-width: 900px;
            width: 100%;
            font-size: 11px;
            color: var(--text-soft);
            text-align: right;
            opacity: 0.85;
        }

        .foot-note span {
            color: #93c5fd;
        }
    </style>
</head>
<body>
<div class="shell">
    <header>
        <div class="topbar">
            <div class="brand">
                <div class="orb">
                    <div class="orb-inner">AI</div>
                </div>
                <div class="brand-text">
                    <div class="brand-title">IA Web Builder · Chat</div>
                    <div class="brand-sub">Conversación persistente para refinar tu landing paso a paso.</div>
                </div>
            </div>
            <div class="top-meta">
                <div class="chip">
                    <span class="chip-dot"></span>
                    <span>Servidor local · Ollama</span>
                </div>
                <div class="chip chip-accent">
                    <span class="chip-label">Modelo</span>
                    <span><?= htmlspecialchars($MODEL, ENT_QUOTES, 'UTF-8') ?></span>
                </div>
            </div>
        </div>
    </header>

    <main class="chat-frame">
        <section class="chat-panel">
            <!-- Izquierda: historial + prompt -->
            <div class="left-pane">
                <div class="system-msg">
                    <div class="system-avatar">AI</div>
                    <div class="msg-bubble">
                        <strong>Diseñemos tu web como si hablaras con una IA moderna.</strong>
                        <p>
                            Empieza describiendo la página y luego pídele cambios iterativos:
                            “hazla más minimalista”, “cambia a modo oscuro”, “añade sección de precios”...
                        </p>
                    </div>
                </div>

                <div class="chat-history-wrapper">
                    <div class="chat-history-header">
                        <span>Historial de conversación</span>
                        <form method="POST" action="" style="margin: 0;">
                            <input type="hidden" name="reset_chat" value="1">
                            <button type="submit" class="btn btn-soft">Nueva conversación</button>
                        </form>
                    </div>
                    <div class="chat-history">
                        <?php if (empty($chat)): ?>
                            <div class="empty-hint">
                                Aún no hay mensajes. Escríbeme cómo quieres tu web y empezamos a iterar sobre el diseño.
                            </div>
                        <?php else: ?>
                            <?php foreach ($chat as $msg): ?>
                                <?php
                                $role = $msg['role'] === 'user' ? 'user' : 'assistant';
                                $label = $msg['role'] === 'user' ? 'Tú' : 'IA';
                                ?>
                                <div class="chat-item <?= $role ?>">
                                    <?php if ($role === 'assistant'): ?>
                                        <div class="system-avatar" style="width: 22px; height: 22px; font-size: 12px;">AI</div>
                                    <?php endif; ?>
                                    <div class="chat-item-bubble">
                                        <div class="chat-item-label"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></div>
                                        <div><?= nl2br(htmlspecialchars($msg['content'], ENT_QUOTES, 'UTF-8')) ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <form method="POST" action="" style="margin-top: 6px;">
                    <div class="prompt-label">Mensaje para la IA</div>
                    <div class="input-shell">
                        <textarea
                            id="descripcion"
                            name="descripcion"
                            placeholder="Ejemplo: Quiero una landing moderna para una startup de IA, en tonos azules, con un hero grande, tres tarjetas de features y un footer oscuro. Después te pediré cambios."
                        ><?php
                            if (isset($_POST['descripcion']) && !$errorMessage) {
                                echo htmlspecialchars($_POST['descripcion'], ENT_QUOTES, 'UTF-8');
                            }
                        ?></textarea>

                        <div class="input-footer">
                            <div class="status
                                <?php
                                if ($errorMessage) {
                                    echo ' status-error';
                                } elseif ($generatedCode) {
                                    echo ' status-ok';
                                } else {
                                    echo ' status-idle';
                                }
                                ?>">
                                <span class="status-dot"></span>
                                <span>
                                    <?php if ($errorMessage): ?>
                                        Error en la última generación
                                    <?php elseif ($generatedCode): ?>
                                        Código generado correctamente
                                    <?php else: ?>
                                        Listo para generar
                                    <?php endif; ?>
                                </span>
                            </div>
                            <div class="input-actions">
                                <button type="reset" class="btn btn-ghost">
                                    Limpiar texto
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <span>Enviar</span> ⚙️
                                </button>
                            </div>
                        </div>
                    </div>

                    <?php if ($errorMessage): ?>
                        <div class="error-box">
                            <strong>Detalle:</strong>
                            <div><?= htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8') ?></div>
                        </div>
                    <?php endif; ?>
                </form>
            </div>

            <!-- Derecha: código + vista previa -->
            <div class="right-pane">
                <div class="right-header">
                    <div>
                        <div class="right-title">Última página generada</div>
                        <div class="right-sub">HTML/CSS completo de la respuesta más reciente de la IA.</div>
                    </div>
                </div>

                <div class="code-block">
                    <div class="code-header">
                        <div class="code-header-left">
                            <div class="code-dots">
                                <div class="code-dot red"></div>
                                <div class="code-dot amber"></div>
                                <div class="code-dot green"></div>
                            </div>
                            <span>index.html</span>
                        </div>
                        <div>Solo lectura · copia y pega donde quieras</div>
                    </div>
                    <div class="code-body">
                        <?php if ($generatedCode): ?>
                            <textarea readonly><?= htmlspecialchars($generatedCode, ENT_QUOTES, 'UTF-8') ?></textarea>
                        <?php else: ?>
                            <div class="empty-hint">
                                Aquí aparecerá el código HTML/CSS de la página cuando se genere la primera vez.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="preview-block">
                    <div class="preview-header">
                        <span>Vista previa</span>
                        <span class="preview-tag">Sandbox iframe</span>
                    </div>
                    <div class="preview-body">
                        <?php if ($generatedCode): ?>
                            <iframe
                                srcdoc="<?= htmlspecialchars($generatedCode, ENT_QUOTES, 'UTF-8') ?>"
                                sandbox="allow-scripts allow-same-origin"
                            ></iframe>
                        <?php else: ?>
                            <div class="preview-empty">
                                Cuando la IA genere el HTML, verás aquí la previsualización interactiva de la página.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="foot-note">
            IA Web Builder · Chat persistente · Backend en PHP + cURL · Motor: <span><?= htmlspecialchars($MODEL, ENT_QUOTES, 'UTF-8') ?></span>
        </div>
    </footer>
</div>
</body>
</html>
