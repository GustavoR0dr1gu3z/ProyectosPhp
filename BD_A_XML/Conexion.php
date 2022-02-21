<?php

$Host = "localhost";
$User = "root";
$Password = "ico";
$Database = "Biblioteca";

$Conexion = mysqli_connect ($Host, $User, $Password) or die ("Error en la conección al servidor");
$db = mysqli_select_db($Conexion, $Database) or die ("Error en la conección a la BD");

?>