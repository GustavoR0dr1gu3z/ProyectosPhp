CREATE DATABASE Biblioteca;
USE Biblioteca;

CREATE TABLE Libros(
    codigo decimal(6,0),
    titulo VARCHAR(40),
    autor VARCHAR(30),
    editorial VARCHAR(20),
    precio DECIMAL(6,2),
    PRIMARY KEY(codigo),
);

/*INSERTAR 10 REGISTROS DE LA TABLA */
INSERT INTO Libros VALUES(111111,"Cien años de soledad","Gabriel García Marquez","yo","300.50");
INSERT INTO Libros VALUES(222222,"Don Quijote de la Mancha","Miguel de Cervantes","yo","350.50");
INSERT INTO Libros VALUES(333333,"Hamlet","William Shakespeare","yo","400.50");
INSERT INTO Libros VALUES(444444,"El Principito","Antoine de Saint Exupéry","yo","450.50");
INSERT INTO Libros VALUES(555555,"Orgullo y prejuicio","Jane Austen","yo","500.50");
INSERT INTO Libros VALUES(666666,"La Odisea","Homero Odisea","yo","550.50");
INSERT INTO Libros VALUES(777777,"Moby-Dick","Herman Melville","yo","600.50");
INSERT INTO Libros VALUES(888888,"Guerra y Paz","León Tolstoi","yo","650.50");
INSERT INTO Libros VALUES(999999,"Rebelión en la granja","George Orwell","yo","700.50");
INSERT INTO Libros VALUES(101010,"El gran Gatsby"," F. Scott Fitzgerald","yo","750.50");


