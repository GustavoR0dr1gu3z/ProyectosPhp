CREATE DATABASE Clinica;
USE Clinica;

/*0 Llaves Foraneas*/
/* 1 Llave Primaria*/
CREATE TABLE Cliente
(
    id_cliente VARCHAR(15) NOT NULL PRIMARY KEY,
    rfc VARCHAR(14) NOT NULL,
    nombre VARCHAR(60),
    apellido varchar (20),
    tipo_de_persona varchar(10) NOT NULL,
    id_direccion_fiscal varchar (20),
    Fecha_Nacimiento date,
    Telefono varchar (15),
    correo VARCHAR(40)
);


/*0 Llaves Foraneas*/
/* 1 Llave Primaria*/
CREATE TABLE Direccion_fiscal
(
    id_direccion_fiscal VARCHAR(20) NOT NULL PRIMARY KEY,
    calle VARCHAR (20),
    ext VARCHAR(8),
    inter VARCHAR(8),
    comunidad VARCHAR(20),
    estado VARCHAR(20),
    c_p VARCHAR(8),
    pais VARCHAR(20)
);

/*0 Llaves Foraneas*/
/* 1 Llave Primaria*/
CREATE TABLE Paciente
(
    id_Paciente VARCHAR(15) NOT NULL PRIMARY KEY,
    nombre VARCHAR(60),
    Apellido varchar (20),
    direccion_fiscal date,
    Telefono varchar (15),
    correo VARCHAR(40),
    Tipo_Sangre varchar (5),
    alergias VARCHAR(100)
);

/*2 Llaves Foraneas*/
/* 1 Llave Primaria*/
CREATE TABLE Cliente_Paciente
(
    id_Cliente_Paciente VARCHAR(15) NOT NULL PRIMARY KEY,
    id_cliente VARCHAR(15),
    id_Paciente VARCHAR(15),
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente),
    FOREIGN KEY (id_Paciente) REFERENCES Paciente(id_Paciente)

);

/*1 Llaves Foraneas*/
/* 1 Llave Primaria*/
CREATE TABLE servicio
(
    id_servicio VARCHAR(15) NOT NULL PRIMARY KEY,
    nombre VARCHAR(30),
    costo VARCHAR(5),
    id_Cliente_Paciente VARCHAR(15),
    FOREIGN KEY (id_Cliente_Paciente) REFERENCES Cliente_Paciente(id_Cliente_Paciente)
);

/*1 Llaves Foraneas*/
/* 1 Llave Primaria*/
CREATE TABLE Medico
(
    id_Medico VARCHAR(15) NOT NULL PRIMARY KEY,
    nombre VARCHAR(60),
    Apellido varchar (20),
    Telefono_Casa varchar (15),
    Telefono_Celular varchar (15),
    correo VARCHAR(40),
    Cedula varchar (20),
    Especialidad varchar (20),
    Cedula_especialidad varchar (20),
    rfc VARCHAR(14) NOT NULL,
    Fecha_Nacimiento date,
    id_servicio VARCHAR(15),
    FOREIGN KEY (id_servicio) REFERENCES servicio(id_servicio)
);

/*1 Llaves Foraneas*/
/* 1 Llave Primaria*/
CREATE TABLE Habitacion
(
    id_habitacion VARCHAR(15) NOT NULL PRIMARY KEY,
    id_servicio VARCHAR(15),
    Costo VARCHAR(10),
    Fecha_entrada DATE,
    Fecha_salida DATE,
    FOREIGN KEY (id_servicio) REFERENCES servicio(id_servicio)
);

/*1 Llaves Foraneas*/
/* 1 Llave Primaria*/
CREATE TABLE Descripcion_Servicio
(
    folio_orden VARCHAR(15) NOT NULL PRIMARY KEY,
    id_DescripcionSer VARCHAR(50),
    consecutivo VARCHAR(15),
    cantidad decimal(6,3),
    id_servicio VARCHAR(15),
    subtotal decimal(6,3),
    FOREIGN KEY (id_servicio) REFERENCES servicio(id_servicio)
);

/*4 Llaves Foraneas*/
/* 1 Llave Primaria*/
CREATE TABLE Orden_pago
(
    Folio_orden VARCHAR(15) NOT NULL PRIMARY KEY,
    Fecha date,
    id_Cliente_Paciente VARCHAR(15),/*LLAVE FORANEA*/
    id_Medico VARCHAR(15),/*LLAVE FORANEA*/
    id_habitacion VARCHAR(15),/*LLAVE FORANEA*/
    id_servicio VARCHAR(15),/*LLAVE FORANEA*/
    forma_pago VARCHAR(15),
    id_orden_pago_subtotal VARCHAR(15),
    Promocion varchar(50),
    iva decimal(6,3),
    total decimal(6,3),
    FOREIGN KEY (id_Cliente_Paciente) REFERENCES Cliente_Paciente(id_Cliente_Paciente),
    FOREIGN KEY (id_Medico) REFERENCES Medico(id_Medico),
    FOREIGN KEY (id_habitacion) REFERENCES Habitacion(id_habitacion),
    FOREIGN KEY (id_servicio) REFERENCES servicio(id_servicio)
);

/*Llenado de Tablas*/
INSERT INTO Libros
VALUES(123451, "Un viaje al centro de la Tierra", "Julio Verne", "Torres", 1000);