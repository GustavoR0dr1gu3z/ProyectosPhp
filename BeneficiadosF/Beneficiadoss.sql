CREATE DATABASE Beneficiadoss;
USE Beneficiadoss;
CREATE TABLE ApolloEscolar
(
    nombre VARCHAR(50) NOT NULL,
    apollo VARCHAR(50) NOT NULL,
    monto VARCHAR(50) NOT NULL,
    fechaAplicacion DATE NOT NULL,
    id int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id)
);
