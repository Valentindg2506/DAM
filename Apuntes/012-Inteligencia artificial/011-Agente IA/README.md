# Agente IA — Generador Autónomo de Código con Memoria de Errores

Sistema de agente inteligente que genera código Python de forma autónoma usando modelos de lenguaje locales (Ollama), lo valida en múltiples capas y aprende de sus errores para mejorar en cada iteración.

## Tecnologías

- Python 3
- [Ollama](https://ollama.com) (modelos locales: `qwen2.5-coder:7b`, `deepseek-r1`, `llama3`)
- AST (Abstract Syntax Tree) — validación de sintaxis y seguridad
- `subprocess` — ejecución controlada del código generado
- `requests` — comunicación con la API de Ollama

## Funcionalidades

- **Generación de código** — envía prompts al LLM y recibe código Python listo para ejecutar
- **Validación por capas:**
  1. Sintaxis (AST parsing)
  2. Seguridad (blacklist + whitelist de imports)
  3. Ejecución real (subprocess con timeout)
  4. Validación semántica (comprueba la salida del programa)
- **Memoria de errores** — el agente acumula los errores previos y los inyecta en el siguiente prompt para evitar repetirlos
- **Análisis inteligente de errores** — convierte mensajes de error técnicos en instrucciones legibles para el LLM
- **Agente de análisis de archivos** — recorre el sistema de ficheros, elige un archivo aleatorio y pide al LLM que lo resuma

## Archivos del proyecto

| Archivo | Descripción |
|---------|-------------|
| `002-Pequeño agente.py` | Agente mínimo: genera código y lo guarda |
| `003-Validador.py` | Agente con validación de sintaxis, seguridad y ejecución |
| `004-Reto mas grande.py` | Genera una app CRUD completa con SQLite, whitelist de imports |
| `005-Crear memoria.py` | **Versión más avanzada** — loop de feedback con memoria de errores |
| `009-Agente pero un poco mas listo.py` | Agente que analiza y resume archivos del sistema |

## Cómo funciona la memoria de errores (005)

```
Intento 1 → genera código → falla (EOFError)
           → registra: "No uses input() sin controlar EOFError"

Intento 2 → reconstruye prompt con errores previos → genera nuevo código
           → falla (timeout)
           → registra: "El programa no debe quedarse esperando indefinidamente"

Intento 3 → prompt incluye ambos errores → genera código correcto ✅
```

## Cómo ejecutar

```bash
# Requisito: tener Ollama instalado y el modelo descargado
ollama pull qwen2.5-coder:7b

# Instalar dependencias
pip install requests

# Ejecutar el agente con memoria
python "005-Crear memoria.py"
```

## Progresión del proyecto

```
002 → 003 → 004 → 005
 │      │      │      └── Memoria de errores + feedback loop
 │      │      └── CRUD completo + whitelist imports
 │      └── Validación multicapa
 └── Generación básica
```
