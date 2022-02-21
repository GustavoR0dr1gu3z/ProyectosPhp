CREATE DATABASE HospitalCuatro;
USE HospitalCuatro;

CREATE TABLE Paciente(
    CURP VARCHAR(30),
    Nombre VARCHAR(20),
    Apellidos VARCHAR(40),
    Sexo VARCHAR(10),
    Edad INTEGER,
    Peso FLOAT,
    Direccion VARCHAR(60),
    Email VARCHAR(50),
    Telefono INTEGER,
    Fecha date,
    PRIMARY KEY(CURP));

    /*
    CURP
    Nombre
    Apellidos
    Sexo
    Edad
    Peso
    Direccion
    Email
    Telefono
    Fecha
    */

CREATE TABLE Medico(
    CEDULA INTEGER,  
    Nombre VARCHAR(20),
    Apellidos VARCHAR(40),
    CEDULA_ESP INTEGER,
    Especialidad VARCHAR(20),
    Direccionn VARCHAR(60),
    Telefono INTEGER,
    Email VARCHAR(50),
    PRIMARY KEY(CEDULA));

    /*
    
    Cedula_M
    Nombre_E
    Apellidos_E
    Cedula_E
    Especialidad
    Direccion_E
    Telefono_E
    Email_E
    
    */

CREATE TABLE Cliente(
    RFC VARCHAR(15),
    Razon_Social VARCHAR(50),
    Tipo_Persona VARCHAR(50),
    Direccion_Fiscal VARCHAR(60), 
    Calle VARCHAR(60), 
    Num_Exterior INTEGER,
    Num_INTEGERerior INTEGER,
    Comunidad VARCHAR(60), 
    Estado VARCHAR(60),
    Codigo_Postal INTEGER,
    Pais VARCHAR(30),
    PRIMARY KEY(RFC));

    /*
    RFC
    Razon
    Tipo
    DireccionF
    Calle
    Ext
    INTEGER
    Comunidad
    Estado
    CP
    Pais
    */


CREATE TABLE Servicio(
    Cirujia VARCHAR(20),
    Curacion VARCHAR(20),
    Tratamiento VARCHAR(20),
    Procedimiento VARCHAR(20),
    Costo FLOAT,
    Id_Servicio INTEGER PRIMARY KEY Auto_Increment);
    
    /*
    Cirujia
    Curacion
    Tratamiento
    Procedimiento
    Costo
    ID_ AUTOINCTEMENRJNEOGJNSDFV    
    */

CREATE TABLE Habitacion(   
    Dias_Uso INTEGER,    
    Costo_Habitacion FLOAT, 
    Id_Habitacion INTEGER PRIMARY KEY Auto_Increment);

    /*
    Habitacione
    Costoo
    Id_AUTOASDPOKASD0WDFFJSIEFJVD
    */

   

CREATE TABLE Pago(   
    Fecha_Pago DATE,
    CURP VARCHAR(16), 
    CEDULA INTEGER,      
    RFC VARCHAR(12),    
    Id_Habitacion INTEGER, 
    FOREIGN KEY(CURP) REFERENCES Paciente(CURP),
    FOREIGN KEY(CEDULA) REFERENCES Medico(CEDULA),
    FOREIGN KEY(RFC) REFERENCES Cliente(RFC),
    FOREIGN KEY(Id_Habitacion) REFERENCES Habitacion(Id_Habitacion),
    Folio_Pago INTEGER PRIMARY KEY Auto_Increment);