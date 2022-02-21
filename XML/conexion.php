<?php
    $USER = "root";
    $SERVIDOR = "localhost";
    $PASSWORD = "ico";
    $BASEDATOS = "HospitalCuatro";

    $Conexion = mysqli_connect($SERVIDOR,$USER,$PASSWORD) or die ("No se ha podido conectar al servidor");
    $DB = mysqli_select_db($Conexion,$BASEDATOS) or die ("No se ha podido conectar a la base de datos");  


?>
