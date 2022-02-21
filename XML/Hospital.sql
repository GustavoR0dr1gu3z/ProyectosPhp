CREATE DATABASE HospitalDos;
USE HospitalDos;

CREATE TABLE Paciente(
    CURP VARCHAR(16),
    Nombre VARCHAR(20),
    Apellidos VARCHAR(40),
    Sexo VARCHAR(10),
    Edad int,
    Peso FLOAT,
    Direccion VARCHAR(60),
    Email VARCHAR(50),
    Telefono int,
    Fecha date,
    PRIMARY KEY(CURP));

CREATE TABLE Medico(
    CEDULA int,
    Nombre VARCHAR(20),
    Apellidos VARCHAR(40),
    CEDULA_ESP int,
    Especialidad VARCHAR(20),
    Direccion VARCHAR(60),
    Telefono int,
    Email VARCHAR(50),
    PRIMARY KEY(CEDULA));

CREATE TABLE Cliente(
    RFC VARCHAR(12),
    Razon_Social VARCHAR(30),
    Tipo_Persona VARCHAR(20),
    Direccion_Fiscal VARCHAR(20),
    Calle VARCHAR(20),
    Num_Exterior int,
    Num_Interior int,
    Comunidad VARCHAR(20),
    Estado VARCHAR(20),
    Codigo_Postal int,
    Pais VARCHAR(20),
    PRIMARY KEY(RFC));

CREATE TABLE Servicio(
    Cirujia VARCHAR(20),
    Curacion VARCHAR(20),
    Tratamiento VARCHAR(20),
    Procedimiento VARCHAR(20),
    Costo FLOAT,
    /*PRIMARY key(Id_Servicio));/*/
    Id_Servicio int PRIMARY KEY Auto_Increment);
    

CREATE TABLE Habitacion(   
    Dias_Uso int,    
    Costo_Habitacion FLOAT, 
    Id_Habitacion int PRIMARY KEY Auto_Increment);

CREATE TABLE Pago(   
    Fecha_Pago DATE,
    CURP VARCHAR(16), 
    CEDULA int,      
    RFC VARCHAR(12),    
    Id_Habitacion int 
    FOREIGN KEY(CURP) REFERENCES Paciente(CURP),
    FOREIGN KEY(CEDULA) REFERENCES Medico(CEDULA),
    FOREIGN KEY(RFC) REFERENCES Cliente(RFC),
    FOREIGN KEY(Id_Habitacion) REFERENCES Habitacion(Id_Habitacion),
    Folio_Pago int PRIMARY KEY Auto_Increment);