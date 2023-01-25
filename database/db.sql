

CREATE DATABASE agenciaturismo;
USE agenciaturismo;
-- Tabla Usuario

CREATE TABLE usuarios(
    id int(255) auto_increment not null,
    nombre varchar(255) not null,
    apellido varchar(255) not null,
    email varchar(255) not null,
    password varchar(255),
    rol varchar(20),
    imagen varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)

)ENGINE=InnoDb;


-- Insertar un usuario

INSERT INTO usuarios VALUES (NULL, 'Admin', 'Admin','admin@admin','contraseña','admin',null);

-- Vamos a PHPmyAdmin Copiamos el codigo 

-- Tabla Categorias Host
CREATE TABLE categorias (
    id int(255) auto_increment not null,
    tipoHost varchar(255) not null,
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO categorias VALUES (NULL,'Hotel');
INSERT INTO categorias VALUES (NULL,'Apartamento');
INSERT INTO categorias VALUES (NULL,'Casa');
INSERT INTO categorias VALUES (NULL,'Quinta');

-- Vamos a PHPmyAdmin Copiamos el codigo 

CREATE TABLE host (
    id int(255) auto_increment not null,
    categoria_id int(255) not null,
    nombreHosp varchar(255),
    descripcion text,
    precio float (100,2) not null,
    municipio varchar(100),
    direccion varchar(100),
    cantidadPersonas int(100),
    indicacion text,
    imangen varchar(255),
    CONSTRAINT pk_host PRIMARY KEY(id),
    CONSTRAINT fk_host_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id)
    
)ENGINE InnoDb;

--- La insersion de productos deberia realizarse en un CRUD.
-- CREAR TABLA TIPOS DE PAGO (TARJETA CREDITO, PAGO CORRESPONSAL)

-- Tabla de Reservaciones

CREATE TABLE reservaciones (
    id int(255) auto_increment not null,
    usuario_id int(255) not null,
    fechaReserva date not null,
    tipoPago varchar(100),
    fechaEntrada date not null,
    fechaSalida date not null,
    cantidadPersonas int(100),
    CONSTRAINT pk_reservaciones PRIMARY KEY(id),
    CONSTRAINT fk_reservacion_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
    
)ENGINE InnoDb;


-- Orden Reserva 
CREATE TABLE orden_reserva (
id int(255) auto_increment not null,
reservacion_id int(255) not null,
host_id int(255) not null,
cantidadNoches int(255),
CONSTRAINT pk_orden PRIMARY KEY(id),
CONSTRAINT fk_orden_reservacion FOREIGN KEY (reservacion_id) REFERENCES reservaciones(id),
CONSTRAINT fk_orden_host FOREIGN KEY(host_id) REFERENCES host(id)

)ENGINE=InnoDb;