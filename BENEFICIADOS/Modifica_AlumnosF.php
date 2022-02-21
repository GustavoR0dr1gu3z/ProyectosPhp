<?php
	include("Conexion.php");
	
	$id = $_POST['id'];
	$Nombre = $_POST['Nombre'];
	$Apoyo = $_POST['Apoyo'];
	$Monto = $_POST['Monto'];
	$Fecha = $_POST['Fecha'];

	$consulta = "UPDATE Usuario SET Nombre_Beneficiario = '$Nombre', Nombre_Apoyo ='$Apoyo', Monto = '$Monto', Fecha_Aplicacion = '$Fecha' WHERE id = '$id'";

	//$consulta = "Insert into DatosPersonales Values(NULL,'"+$Nombre+"','"+$APaterno+"','"+$AMaterno+"','"+$CURP+"','"+$NTutor+"','"+$Domicilio+"')";
	//echo($consulta);
	if (mysqli_query($conexion, $consulta)) {
		echo'<script type="text/javascript">
        alert("¡Alumno editado con éxito!");
        window.location.href="MAlumno.php";
        </script>';

	} else {
		echo'<script type="text/javascript">
        alert("¡No se pudo actualizar los datos del alumno, favor de colocar los correctos!");
        window.location.href="MAlumno.php";
        </script>';
	}
	mysqli_close($conexion);

	echo '<script type="text/javascript">','setTimeout(function(){location.href="MAlumno.php"} , 5000);', '</script>';
?>
