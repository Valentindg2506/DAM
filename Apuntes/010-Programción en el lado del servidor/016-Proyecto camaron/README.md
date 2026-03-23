# Camaron Prop — Portal Inmobiliario con Panel de Administración

Plataforma web de listado de propiedades inmobiliarias con filtros de búsqueda y panel de administración para la gestión de viviendas. Desarrollada con PHP y MySQL.

## Tecnologías

- PHP (MySQLi orientado a objetos)
- MySQL
- HTML5 / CSS3

## Funcionalidades

### Portal público (`index.php`)
- **Búsqueda por localidad** — filtro por municipio (Valencia, Alboraya, Torrent, Gandía, Sagunto, Paterna, Burjassot, Xàtiva, Cullera)
- **Filtro de precio** — rango mínimo y máximo
- **Tarjetas de propiedades** — muestra: localidad, precio, m², año de construcción, dirección, planta, tipo, descripción, estado, baños, habitaciones

### Panel de administración (`admin.php`)
- **Navegación lateral** — secciones: Viviendas, Imágenes, Usuarios, Propietarios, Alquileres
- **Tabla de registros** — visualización de todas las viviendas
- **Formulario de inserción** — alta de nuevas propiedades con todos sus campos

## Estructura del proyecto

```
016-Proyecto camaron/
├── 001-Inicio/               # Estructura básica
├── 002-Proceso formulario/   # Procesamiento de formularios
├── 003-Segundo filtro/       # Filtro combinado (localidad + precio)
└── 004-AdminPanel/           # Versión final con panel de admin
    ├── index.php             # Portal público con filtros
    ├── admin.php             # Panel de administración
    └── db.sql                # Esquema de base de datos
```

## Base de datos

```sql
CREATE TABLE viviendas (
    id               INT AUTO_INCREMENT PRIMARY KEY,
    localidad        VARCHAR(100),
    precio           DECIMAL(10,2),
    metroscuadrados  INT,
    aniodeconstruccion INT,
    direccion        VARCHAR(200),
    altura           INT,
    tipodevivienda   VARCHAR(50),
    descripcion      TEXT,
    estado           VARCHAR(50),
    banios           INT,
    habitaciones     INT,
    teniente         VARCHAR(100)
);
```

## Cómo ejecutar

1. Importar `004-AdminPanel/db.sql` en MySQL
2. Crear el usuario `camaron` con contraseña `Camaron123$` (o actualizar credenciales en los PHP)
3. Servir la carpeta con Apache/XAMPP
4. Acceder al portal en `http://localhost/index.php`
5. Acceder al panel en `http://localhost/admin.php`

## Versiones del proyecto

| Versión | Descripción |
|---------|-------------|
| V1 (001-Inicio) | Estructura básica y conexión a BD |
| V2 (002-Proceso formulario) | Procesamiento de formularios POST |
| V3 (003-Segundo filtro) | Filtro combinado por localidad y precio |
| **V4 (004-AdminPanel)** | **Panel de admin completo — versión final** |
