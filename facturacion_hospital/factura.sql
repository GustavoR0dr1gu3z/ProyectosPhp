CREATE DATABASE factura_hospital;
use factura_hospital;

CREATE TABLE paciente(
    id_paciente int NOT NULL AUTO_INCREMENT,
    nombre varchar(40) NOT NULL,
    apellido_paterno varchar(40) NOT NULL,
    apellido_materno varchar(40) NOT NULL,
    fecha_nacimiento date,
    curp varchar(18) NOT NULL,
    telefono VARCHAR(10),
    direccion varchar(50),
    PRIMARY KEY (id_paciente)
);
CREATE TABLE cliente(
    id_cliente int NOT NULL AUTO_INCREMENT,
    rfc varchar(40) NOT NULL,
    razon_social varchar(40) NOT NULL,
    nombre varchar(40) NOT NULL,
    apellido_paterno varchar(40),
    apellido_materno varchar(40),
    tipo_persona varchar(40) NOT NULL,
    numero VARCHAR(10) ,
    calle varchar(40) ,
    colonia varchar(40) ,
    municipio varchar(40) ,
    estado varchar(40) ,
    C_P varchar(40),
    telefono varchar(40),
    correo varchar(40),
    PRIMARY KEY (id_cliente)
);
CREATE TABLE medico(
    id_medico int NOT NULL AUTO_INCREMENT,
    nombre varchar(40) NOT NULL,
    apellido_paterno varchar(40) NOT NULL,
    apellido_materno varchar(40) NOT NULL,
    fecha_nacimiento date,
    curp varchar(18) NOT NULL,
    direccion varchar(50),
    telefono varchar(50),
    cedula_profecional varchar(8),
    especialidad varchar(20),
    PRIMARY KEY (id_medico)
);
CREATE TABLE servicio(
    id_servicio int NOT NULL AUTO_INCREMENT,
    nombre varchar(40) NOT NULL,
    costo float NOT NULL,    
    PRIMARY KEY (id_servicio)
);
CREATE TABLE habitacion(
    id_habitacion int NOT NULL AUTO_INCREMENT,
    costo float NOT NULL,    
    dias int,    
    PRIMARY KEY (id_habitacion)
);
CREATE TABLE descripcion_servicio(
    id_descripcion int NOT NULL AUTO_INCREMENT,
    id_servicio int NOT NULL,    
    cantidad int NOT NULL,    
    id_habitacion int,
    PRIMARY KEY (id_descripcion),
    FOREIGN KEY (id_servicio) REFERENCES servicio(id_servicio),
    FOREIGN KEY (id_habitacion) REFERENCES habitacion(id_habitacion)       
    

);

CREATE TABLE orden_pago(
    id_orden_pago int NOT NULL AUTO_INCREMENT,
    id_paciente int NOT NULL,    
    id_medico int NOT NULL,
    id_descripcion int NOT NULL,
    fecha date,
    subtotal float NOT NULL,
    promocion float NOT NULL,
    total float NOT NULL,
    PRIMARY KEY (id_orden_pago),
    FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente) ,
    FOREIGN KEY (id_medico) REFERENCES medico(id_medico),
    FOREIGN KEY (id_descripcion) REFERENCES descripcion_servicio(id_descripcion)
);
CREATE TABLE factura(
    id_factura int NOT NULL AUTO_INCREMENT,
    id_orden_pago int NOT NULL,    
    id_cliente int NOT NULL,    
    iva float,
    importe float,
    PRIMARY KEY (id_factura),
    FOREIGN KEY (id_orden_pago) REFERENCES orden_pago(id_orden_pago),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);


