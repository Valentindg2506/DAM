CREATE DATABASE crm_inmobiliario CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE crm_inmobiliario;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dni_nie VARCHAR(20) UNIQUE NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    email VARCHAR(150),
    telefono VARCHAR(20),
    origen VARCHAR(50) DEFAULT 'Web',
    etapa_pipeline VARCHAR(30) DEFAULT 'Nuevo',
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_dni (dni_nie),
    INDEX idx_etapa (etapa_pipeline)
) ENGINE=InnoDB;

CREATE TABLE propiedades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    referencia VARCHAR(50) UNIQUE NOT NULL,
    direccion VARCHAR(200) NOT NULL,
    tipo ENUM('Venta', 'Alquiler') NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    superficie INT,
    habitaciones INT,
    banos INT,
    estado ENUM('Disponible', 'Reservada', 'Vendida') DEFAULT 'Disponible',
    propietario_id INT,
    fecha_alta TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (propietario_id) REFERENCES clientes(id) ON DELETE SET NULL,
    INDEX idx_ref (referencia),
    INDEX idx_estado (estado)
) ENGINE=InnoDB;

CREATE TABLE tareas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    titulo VARCHAR(150) NOT NULL,
    descripcion TEXT,
    fecha_hora DATETIME NOT NULL,
    completada BOOLEAN DEFAULT FALSE,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE,
    INDEX idx_cliente (cliente_id),
    INDEX idx_fecha (fecha_hora)
) ENGINE=InnoDB;

-- Datos de ejemplo
INSERT INTO clientes (dni_nie, nombre, apellidos, email, telefono, origen, etapa_pipeline) VALUES
('12345678A', 'Lucía', 'Martínez', 'lucia@example.com', '+34 600 111 222', 'Web', 'Calificado'),
('X1234567B', 'Pablo', 'García', 'pablo@example.com', '+34 600 333 444', 'Recomendación', 'Propuesta'),
('87654321Z', 'Marta', 'Soler', 'marta@example.com', '+34 600 555 666', 'Anuncio', 'Nuevo');

INSERT INTO propiedades (referencia, direccion, tipo, precio, superficie, habitaciones, banos, propietario_id) VALUES
('REF-001', 'Calle Mayor 45, Valencia', 'Venta', 250000.00, 120, 3, 2, 1),
('REF-002', 'Avda. Blasco Ibáñez 89, Valencia', 'Alquiler', 1200.00, 85, 2, 1, 2);

INSERT INTO tareas (cliente_id, titulo, descripcion, fecha_hora) VALUES
(1, 'Llamada seguimiento', 'Revisar interés en propiedades zona Ruzafa', '2025-10-25 10:00:00'),
(2, 'Visita propiedad REF-001', 'Acompañar a visita Calle Mayor 45', '2025-10-26 11:30:00');

