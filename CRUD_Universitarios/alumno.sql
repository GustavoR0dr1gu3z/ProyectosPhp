CREATE DATABASE Alumno;
USE Alumno;
CREATE TABLE IF NOT EXISTS universitarios(
    id int NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    telefono VARCHAR(50) NOT NULL,
    estado_civil VARCHAR(10) NOT NULL,
    hermanos VARCHAR(5) NOT NULL,
    intereses VARCHAR(50) NOT NULL,
    PRIMARY KEY (id));
