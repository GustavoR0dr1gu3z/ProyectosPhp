CREATE DATABASE ClaseDOS;
USE ClaseDOS;

CREATE TABLE Cliente(
    DNI int,
    Nombre varchar(30),
    Apellidos varchar(30),
    Direccion varchar(30),
    FDN varchar(3),
    PRIMARY KEY(DNI)
    );

CREATE TABLE Producto(
    Nombre varchar(30),
    Codigo varchar(4),
    Punitario int,
    PRIMARY KEY (Codigo)
);

CREATE TABLE Proveedor(
    NIF varchar(4),
    Nombre varchar(30),
    Direccion varchar(30),
    PRIMARY KEY(NIF)
);



INSERT INTO Cliente VALUES ("123","Luisa","Perez","Atenas3","LP1");
INSERT INTO Cliente VALUES ("124","Ivan","Guzman","Arcos23","LG2");
INSERT INTO Cliente VALUES ("125","Pedro","Avalos","Zarco1","PA3");

INSERT INTO Producto VALUES("Gansito","P123","12");
INSERT INTO Producto VALUES("Chetos","P124","10");
INSERT INTO Producto VALUES("DONAS","P125","16");

INSERT INTO Proveedor VALUES("V123","MARINELA","HUNDIDO");
INSERT INTO Proveedor VALUES("V124","SABRITAS","IZCALLI");
INSERT INTO Proveedor VALUES("V125","BIMBO","MONCLOVA");