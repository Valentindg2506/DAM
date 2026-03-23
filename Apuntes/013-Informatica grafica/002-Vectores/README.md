# SVG & Visualización de Datos — Gráficos Vectoriales Interactivos

Colección de gráficos SVG estáticos e interactivos, culminando en un gráfico de barras animado con tooltips, datos JSON y tema oscuro profesional.

## Tecnologías

- SVG (Scalable Vector Graphics)
- JavaScript (vanilla)
- CSS3 (variables, animaciones)
- Fetch API / requestAnimationFrame

## Funcionalidades

- **Formas vectoriales** — círculos, rectángulos, estrellas con SVG puro
- **Personajes SVG** — Pac-Man construido con paths y arcos
- **Manipulación con JS** — cambio dinámico de colores y atributos SVG
- **SVG embebido en HTML** — integración directa en el DOM
- **Gráfico de barras animado** — animación fluida con `easeOutCubic` y `requestAnimationFrame`
- **Tooltips interactivos** — aparecen al pasar el cursor sobre las barras
- **Datos desde JSON** — el gráfico lee los datos de un bloque JSON embebido
- **Tema oscuro profesional** — CSS variables, gradientes y sombras

## Archivos del proyecto

| Archivo | Descripción |
|---------|-------------|
| `001-Circulo.svg` | Círculo SVG básico |
| `004-Rectangulo.svg` | Rectángulo con estilos |
| `005-Estrella.svg` | Estrella con polígono |
| `006-Comecocos.svg` | Pac-Man con arcos SVG |
| `009-Manipular.html` | Manipulación de SVG desde JS |
| `010-Cambiar de color.html` | Cambio de colores dinámico |
| `012-Embebido.html` | SVG embebido en HTML |
| `013-Con IA.html` | **Gráfico de barras animado — versión final** |

## Gráfico de barras (013-Con IA.html)

El archivo más avanzado implementa un gráfico de barras completo con:

```json
{
  "title": "Ventas",
  "unit": "€",
  "data": [
    { "label": "Ene", "value": 120 },
    { "label": "Feb", "value": 190 },
    ...
  ]
}
```

- Animación de entrada con `easeOutCubic`
- Tooltip con valor y etiqueta al hacer hover
- Ejes X e Y generados dinámicamente
- Accesibilidad con atributos `aria-label`
- Responsive con `viewBox`

## Cómo ejecutar

Abrir directamente en el navegador. No requiere servidor ni dependencias.

```bash
# Versión más completa
open "013-Con IA.html"
```
