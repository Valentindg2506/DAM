<?php
// --- SECCIÓN DE LÓGICA PHP (BACKEND) ---
// Mantengo la seguridad que ya implementamos anteriormente.
$resultados = null;
$busqueda = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['criterio'])) {
    $busqueda = trim($_POST['criterio']);
    
    // Credenciales
    $host = "localhost"; $user = "Satori"; $pass = "Satori123$"; $db = "Satori";

    // Conexión segura
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $conexion = new mysqli($host, $user, $pass, $db);
        $conexion->set_charset("utf8mb4");

        // Sentencia preparada para evitar Inyección SQL
        $stmt = $conexion->prepare("SELECT titulo, url, descripcion FROM paginas WHERE titulo LIKE ? OR url LIKE ? LIMIT 20");
        $param = "%" . $busqueda . "%";
        $stmt->bind_param("ss", $param, $param); // Buscamos en título y URL
        $stmt->execute();
        $resultados = $stmt->get_result();
        $stmt->close();
        $conexion->close();
    } catch (Exception $e) {
        $error = "Error en el sistema de búsqueda."; // No mostrar detalles técnicos al usuario
    }
}
?>
<!doctype html>
<html lang="es">
<head>
    <title>Satori Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        /* --- VARIABLES DE COLOR Y TEMA --- */
        :root {
            /* Un degradado moderno para el header */
            --gradient-start: #4f46e5; /* Indigo vibrante */
            --gradient-end: #9333ea;   /* Morado vibrante */
            --bg-body: #f3f4f6;        /* Gris muy claro para el fondo */
            --card-bg: #ffffff;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --primary-link: #4f46e5;
            --url-green: #059669;      /* Verde bonito para URLs */
        }

        /* --- ESTILOS GENERALES --- */
        body, html {
            padding: 0; margin: 0;
            font-family: 'Poppins', sans-serif; /* Aplicamos la nueva fuente */
            background-color: var(--bg-body);
            color: var(--text-dark);
            min-height: 100vh;
        }

        /* --- HEADER LLAMATIVO --- */
        header {
            /* Fondo con degradado */
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 60px 20px 80px; /* Más padding abajo para que el input "flote" */
            color: white;
            position: relative;
            margin-bottom: 40px;
        }

        .brand-container {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        /* Estilo si la imagen no carga o para el placeholder */
        .logo-placeholder {
            width: 50px; height: 50px; background: rgba(255,255,255,0.2);
            border-radius: 50%; display: flex; justify-content: center; align-items: center;
            font-weight: bold; font-size: 24px;
        }
        header img { width: 60px; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2)); }
        
        h1 {
            font-size: 32px; margin: 0; font-weight: 600; letter-spacing: -0.5px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        /* --- INPUT DE BÚSQUEDA FLOTANTE --- */
        form {
            width: 100%;
            max-width: 700px;
            position: relative;
            z-index: 10; /* Asegura que esté por encima */
        }

        input[type="text"] {
            width: 100%;
            padding: 20px 30px;
            border-radius: 50px; /* Píldora completa */
            border: none;
            font-size: 18px;
            font-family: 'Poppins', sans-serif;
            outline: none;
            box-sizing: border-box;
            /* Sombra profunda para efecto flotante */
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.2), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        input[type="text"]:focus {
            /* Al hacer foco, se eleva un poco más y la sombra crece */
            transform: translateY(-3px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2), 0 10px 10px -5px rgba(0, 0, 0, 0.1);
        }
        input::placeholder { color: #aaa; }

        /* --- CONTENEDOR PRINCIPAL --- */
        main {
            max-width: 800px;
            margin: -30px auto 50px; /* Margen negativo para subirlo hacia el header */
            padding: 0 20px;
            position: relative;
            z-index: 5;
        }

        .info-estado {
            text-align: center; margin-bottom: 30px; color: var(--text-light); font-weight: 300;
        }
        .error-msg { color: #dc2626; background: #fecaca; padding: 10px; border-radius: 8px; text-align: center;}

        /* --- TARJETAS DE RESULTADOS --- */
        article {
            background: var(--card-bg);
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 16px; /* Bordes muy redondeados */
            border: 1px solid rgba(0,0,0,0.04);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        article:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.02);
        }
        
        article h2 {
            padding: 0; margin: 0 0 8px 0; font-size: 20px; font-weight: 600; line-height: 1.3;
        }
        
        article h2 a {
            text-decoration: none; color: var(--primary-link); transition: color 0.2s;
        }
        article h2 a:hover { color: var(--gradient-end); text-decoration: underline; }
        
        /* Estilo para la URL */
        .url-display {
            font-size: 13px;
            color: var(--url-green);
            display: block;
            margin-bottom: 12px;
            font-weight: 400;
            white-space: nowrap; overflow: hidden; text-overflow: ellipsis; /* Corta URLs largas */
        }
        
        /* Un pequeño "snippet" de texto falso para que se vea mejor el diseño */
        .snippet { color: var(--text-light); font-size: 14px; line-height: 1.6; }

    </style>
</head>
<body>
    <header>
        <div class="brand-container">
            <?php if(file_exists('satorilogo.png')): ?>
                <img src="satorilogo.png" alt="Logo Satori">
            <?php else: ?>
                <div class="logo-placeholder">S</div>
            <?php endif; ?>
            <h1>Satori</h1>
        </div>
        <form method="POST" action="">
            <input type="text" name="criterio" placeholder="¿Qué quieres descubrir hoy?" value="<?= htmlspecialchars($busqueda) ?>" autocomplete="off" required>
        </form>
    </header>

    <main>
            <?php if (isset($error)): ?>
                <div class="error-msg"><?= $error ?></div>
            <?php endif; ?>

            <?php if ($busqueda && !isset($error)): ?>
                <p class="info-estado">Resultados para: <strong><?= htmlspecialchars($busqueda) ?></strong></p>
            <?php endif; ?>

            <?php 
            if ($resultados && $resultados->num_rows > 0) {
                // INICIO DEL BUCLE
                while ($fila = $resultados->fetch_assoc()) { 
                    $tituloSafe = htmlspecialchars($fila['titulo']);
                    $urlSafe = htmlspecialchars($fila['url']);
                    // Operador ternario para verificar si hay descripción
                    $descSafe = !empty($fila['descripcion']) ? htmlspecialchars($fila['descripcion']) : "Sin descripción disponible.";
                ?>
                <article>
                    <h2>
                        <a href="<?= $urlSafe ?>"><?= $tituloSafe ?></a>
                    </h2>
                    <span class="url-display"><?= $urlSafe ?></span>
                    
                    <div class="snippet">
                        <?= $descSafe ?>
                    </div>
                </article>
                <?php 
                } // CIERRE DEL WHILE
                
            } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($resultados) && !isset($error)) {
                // CASO NO HAY RESULTADOS (Importante para UX)
                echo "<div style='text-align:center; padding: 40px; color: #6b7280;'>
                        <p>No se encontraron resultados.</p>
                    </div>";
            } // CIERRE DEL IF (Esto es lo que te faltaba)
            ?>
        </main>
    </body>
</html>