<?php
     include('conexion.php');


//Medico
    $Cedula_M = $_POST['Cedula_M'];
    $Nombre_E = $_POST['Nombre_E'];
    $Apellidos_E = $_POST['Apellidos_E'];
    $Cedula_E = $_POST['Cedula_E'];
    $Especialidad = $_POST['Especialidad'];
    $Direccion_E = $_POST['Direccion_E'];
    $Telefono_E = $_POST['Telefono_E'];
    $Email_E = $_POST['Email_E'];
//Cliente
    $RFC = $_POST['RFC'];
    $Razon = $_POST['Razon'];
    $Tipo = $_POST['Tipo'];
    $DireccionF = $_POST['DireccionF'];
    $Calle = $_POST['Calle'];
    $Exte = $_POST['Exte'];
    $Inte = $_POST['Inte'];
    $Comunidad = $_POST['Comunidad'];
    $Estado = $_POST['Estado'];
    $CP = $_POST['CP'];
    $Pais = $_POST['Pais'];
//Paciente
    $CURP = $_POST['CURP'];
    $Nombre = $_POST['Nombre'];
    $Apellidos = $_POST['Apellidos'];
    $Sexo = $_POST['Sexo'];
    $Edad = $_POST['Edad'];
    $Peso = $_POST['Peso'];
    $Direccion = $_POST['Direccion'];
    $Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];
    $Fecha = $_POST['Fecha'];

//Servicio
    $Cirujia = $_POST['Cirujia'];
    $Curacion = $_POST['Curacion'];
    $Tratamiento = $_POST['Tratamiento'];
    $Procedimiento = $_POST['Procedimiento'];
    $Costo = $_POST['Costo'];
    /* Id_Servicio */


//Habitacion
    $Habitacione = $_POST['Habitacione'];
    $Costoo = $_POST['Costoo'];
    /* Id_Habitacion */

    $Insersion = "INSERT INTO Paciente(CURP,Nombre,Apellidos,Sexo,Edad,Peso,Direccion,Email,Telefono,Fecha) VALUES ('$CURP','$Nombre','$Apellidos','$Sexo','$Edad','$Peso','$Direccion','$Email','$Telefono','$Fecha');";
    $Insersion .= "INSERT INTO Medico(CEDULA,Nombre,Apellidos,CEDULA_ESP,Especialidad,Direccionn,Telefono,Email) VALUES ('$Cedula_M','$Nombre_E','$Apellidos_E','$Cedula_E','$Especialidad','$Direccion_E','$Telefono_E', '$Email_E');";
    $Insersion .= "INSERT INTO Cliente(RFC,Razon_Social,Tipo_Persona,Direccion_Fiscal,Calle,Num_Exterior,Num_INTEGERerior,Comunidad,Estado,Codigo_Postal,Pais) VALUES ('$RFC','$Razon','$Tipo','$DireccionF','$Calle','$Exte','$Inte','$Comunidad','$Estado','$CP','$Pais');"; 
    $Insersion .= "INSERT INTO Servicio(Cirujia,Curacion,Tratamiento,Procedimiento,Costo) VALUES ('$Cirujia','$Curacion','$Tratamiento','$Procedimiento','$Costo');";
    $Insersion .= "INSERT INTO Habitacion(Dias_Uso,Costo_Habitacion) VALUES('$Habitacione','$Costoo')";

    if(mysqli_multi_query($Conexion, $Insersion))
    {
        echo'<script type="text/javascript">
        alert("¡Cliente añadido con éxito!");
        window.location.href="pdf.php";
        </script>';
    }else{
        echo mysqli_error($Conexion);
       /* echo'<script type="text/javascript">
        alert("¡No se pudo añadir el cliente, favor de colocar los correctos!");
        window.location.href="index.html";
        </script>';*/
    }
    mysqli_close($Conexion);

    //echo '<script type="text/javascript">','setTimeout(function(){location.href="index.html"} , 5000);', '</script>';
?>