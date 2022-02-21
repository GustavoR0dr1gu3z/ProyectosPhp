<?php
	include("Conexion.php");
	$id = $_POST['id'];
	$consulta = "Delete from Usuario where id = '$id'";

	//$consulta = "Insert into DatosPersonales Values(NULL,'"+$Nombre+"','"+$APaterno+"','"+$AMaterno+"','"+$CURP+"','"+$NTutor+"','"+$Domicilio+"')";
	//echo($consulta);
	if (mysqli_query($conexion, $consulta)) {
		echo'<script type="text/javascript">
        alert("¡Alumno eliminado con éxito!");
        window.location.href="BajaAlumno.php";
        </script>';

	} else {
		echo'<script type="text/javascript">
        alert("¡Ay! No se ha podido eliminar el alumno, favor de ingresar nuevamente los datos correspondientes");
        window.location.href="BajaAlumno.php";
        </script>';

	}
	mysqli_close($conexion);

	echo '<script type="text/javascript">'
		,'setTimeout(function(){location.href="BajaAlumno.php"} , 5000);'
   		, '</script>';
?>
