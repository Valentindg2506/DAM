# Supercontrolador — Panel de Administración Dinámico

Panel de administración de base de datos con arquitectura **table-agnostic**: un único conjunto de controladores PHP gestiona cualquier tabla sin necesidad de escribir código específico por entidad.

## Tecnologías

- PHP (MySQLi procedural)
- MySQL
- HTML5 / CSS3
- Patrón MVC simplificado

## Concepto clave

El "supercontrolador" usa consultas dinámicas (`SHOW TABLES`, `SELECT * LIMIT 1`) para generar automáticamente menús, tablas de datos y formularios de inserción para cualquier tabla de la base de datos. Sin tocar el código, el panel funciona con cualquier esquema.

## Funcionalidades

- **Menú lateral dinámico** — lista automáticamente todas las tablas de la BD con `SHOW TABLES`
- **Visualización de registros** — genera la tabla HTML con columnas reales de la BD
- **Formulario de inserción automático** — infiere los campos del esquema de la tabla
- **Procesador de inserts universal** — construye la sentencia `INSERT` dinámicamente desde el formulario
- **Frontend de tienda** — incluye la tienda online integrada como parte pública

## Estructura del proyecto

```
V0.6-Mejoras esteticas/
├── back/
│   ├── index.php                      # Router principal (GET ?tabla= &operacion=)
│   ├── inc/
│   │   └── conexion_bd.php            # Conexión centralizada a MySQL
│   ├── controladores/
│   │   ├── poblar_menu.php            # Genera menú con SHOW TABLES
│   │   ├── read.php                   # Muestra registros de cualquier tabla
│   │   ├── insertar.php               # Genera formulario dinámico
│   │   └── procesa_insertar.php       # Ejecuta INSERT dinámico
│   └── css/
│       └── estilo.css
└── front/                             # Tienda online (igual que Tienda Online V0.7)
```

## Cómo funciona el router

```
?tabla=producto               → muestra todos los registros de 'producto'
?tabla=producto&operacion=insertar         → muestra formulario de inserción
?tabla=producto&operacion=procesa_insertar → ejecuta el INSERT
```

## Cómo ejecutar

1. Importar el esquema SQL de la Tienda Online
2. Configurar credenciales en `back/inc/conexion_bd.php`
3. Servir el proyecto con Apache/XAMPP
4. Abrir `http://localhost/back/` para el panel de administración
5. Abrir `http://localhost/front/` para la tienda pública

## Versiones del proyecto

| Versión | Descripción |
|---------|-------------|
| V0.1 | Estructura básica del panel de control |
| V0.2 | Menú dinámico y lectura de tablas |
| V0.3 | Controlador de inserción con formulario dinámico |
| V0.4 | Mejoras de usabilidad |
| V0.5 | Procesamiento de inserts |
| **V0.6** | **Mejoras estéticas — versión final** |
