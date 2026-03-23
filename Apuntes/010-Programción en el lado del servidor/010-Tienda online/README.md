# Tienda Online — PHP + MySQL

Aplicación web de comercio electrónico completa desarrollada con PHP y MySQL. Permite a los usuarios explorar un catálogo de productos, añadir artículos al carrito y finalizar pedidos con registro en base de datos.

## Tecnologías

- PHP (MySQLi procedural)
- MySQL
- HTML5 / CSS3
- JavaScript

## Funcionalidades

- **Catálogo de productos** — listado dinámico desde base de datos con imagen, nombre, descripción y precio
- **Página de producto** — detalle individual con selección de cantidad (1–10 unidades)
- **Carrito de compra** — resumen del pedido antes de confirmar
- **Finalización del pedido** — recogida de datos del cliente e inserción en base de datos (cliente → pedido → líneas de pedido)
- **Cabecera/pie reutilizables** — arquitectura modular con includes PHP

## Estructura del proyecto

```
V0.7-Ajustes esteticos/
├── front/
│   ├── index.php          # Página principal / hero
│   ├── catalogo.php       # Listado de productos
│   ├── producto.php       # Detalle del producto
│   ├── carrito.php        # Vista del carrito
│   ├── finalizacion.php   # Proceso de pago y confirmación
│   ├── inc/
│   │   ├── cabecera.php
│   │   └── piedepagina.php
│   ├── css/
│   │   └── estilo.css
│   └── img/
└── V0.3-BBDD/
    └── schema.sql         # Esquema de la base de datos
```

## Base de datos

```sql
-- Base de datos: tiendaonlinedamdaw
CREATE TABLE producto (id, nombre_producto, descripcion, precio, stock, imagen);
CREATE TABLE cliente  (id, nombre_cliente, apellidos, email, direccion, telefono);
CREATE TABLE pedido   (id, fecha, cliente_id);
CREATE TABLE lineaspedido (id, pedido_id, cantidad, producto_id);
```

## Cómo ejecutar

1. Importar el esquema SQL en MySQL
2. Configurar credenciales en los archivos PHP (`conexion_bd.php`)
3. Servir la carpeta `front/` con Apache/Nginx o XAMPP
4. Abrir `http://localhost/front/` en el navegador

## Versiones del proyecto

| Versión | Descripción |
|---------|-------------|
| V0.1 | Estructura HTML básica y navegación |
| V0.2 | Estilos CSS e includes reutilizables |
| V0.3 | Esquema de base de datos |
| V0.4 | Paso de parámetros entre páginas |
| V0.5 | Carrito de compra funcional |
| V0.6 | Finalización y guardado del pedido |
| **V0.7** | **Ajustes estéticos — versión final** |
