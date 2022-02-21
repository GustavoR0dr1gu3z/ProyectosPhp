CREATE DATABASE Beneficiados;

USE Beneficiados;

CREATE TABLE Usuario(
    id int NOT NULL Auto_Increment,
    Nombre_Beneficiario varchar(40),
    Nombre_Apoyo varchar(40),
    Monto float,
    Fecha_Aplicacion date,
    PRIMARY KEY(id));