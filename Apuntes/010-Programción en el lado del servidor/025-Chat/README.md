# Minichat — Aplicación de Chat en Tiempo Real con Flask

Aplicación de chat multiusuario desarrollada con Python y Flask. Los mensajes se actualizan automáticamente cada segundo mediante polling a una API REST, sin necesidad de WebSockets.

## Tecnologías

- Python 3
- Flask (framework web)
- Jinja2 (templates HTML)
- Fetch API (JavaScript)
- HTML5 / CSS3

## Funcionalidades

- **Mensajes en tiempo real** — polling automático cada 1 segundo via `fetch()`
- **Identificación de usuario** — cada mensaje incluye nombre de usuario
- **Timestamps** — marca de hora exacta (`HH:MM:SS`) en cada mensaje
- **API REST** — endpoint `/mensajes` que devuelve el historial en JSON
- **Validación** — no permite mensajes ni nombres de usuario vacíos
- **Patrón PRG** — POST-Redirect-GET para evitar reenvíos del formulario
- **Interfaz moderna** — diseño con tarjetas, sombras, scroll automático y estado vacío

## Estructura del proyecto

```
025-Chat/
├── 005-Superchat.py       # Servidor Flask — versión final
├── 004-Chat.py            # Versión anterior (sin usuario ni timestamp)
├── templates/
│   ├── index2.html        # Interfaz completa con polling JS
│   └── index.html         # Interfaz básica
├── 001-Miniflask.py       # Flask mínimo (Hello World)
├── 002-Contador.py        # Estado global con contador
└── 003-Guardo mensajes.py # Almacenamiento de mensajes en lista
```

## Cómo ejecutar

```bash
# Instalar dependencias
pip install flask

# Ejecutar el servidor
python "005-Superchat.py"

# Abrir en el navegador
# http://localhost:5000
```

## Endpoints

| Método | Ruta | Descripción |
|--------|------|-------------|
| GET / POST | `/` | Página principal + envío de mensajes |
| GET | `/mensajes` | Devuelve todos los mensajes en JSON |

## Ejemplo de respuesta JSON

```json
[
  {
    "usuario": "Valentín",
    "mensaje": "¡Hola a todos!",
    "hora": "14:32:07"
  }
]
```

## Progresión del proyecto

```
001 (Flask básico) → 002 (contador) → 003 (lista mensajes) → 004 (chat simple) → 005 (chat completo)
```
