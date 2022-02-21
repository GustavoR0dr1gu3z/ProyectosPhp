<?php

$usuario = "root";
$password = "ico";
$servidor = "localhost";
$basededatos = "Beneficiados";

$conexion = mysqli_connect($servidor, $usuario, $password) or die ("No se ha podido conectar al servidor de la base de datos");
$db = mysqli_select_db($conexion, $basededatos) or die ("No se ha podido conectar con la Base de Datos");


?>