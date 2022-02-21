<?php
	include("Conexion.php");
/*	$CURP = $_POST['CURP'];
	$Nombre = $_POST['Nombre'];
	$APaterno = $_POST['APaterno'];
	$AMaterno = $_POST['AMaterno'];	
	$NTutor = $_POST['NTutor'];
	$Domicilio = $_POST['Domicilio'];
*/

	$Nombre = $_POST['Nombre_Beneficiario'];
	$NombreApoyo = $_POST['Nombre_Apoyo'];
	$Monto = $_POST['Monto'];
	$Fecha = $_POST['Fecha_Aplicacion'];


	$consulta = "INSERT INTO Usuario(Nombre_Beneficiario, Nombre_Apoyo, Monto, Fecha_Aplicacion) VALUES ('$Nombre', '$NombreApoyo', '$Monto', '$Fecha')";
	
	//$consulta = "Insert into DatosPersonales Values(NULL,'"+$Nombre+"','"+$APaterno+"','"+$AMaterno+"','"+$CURP+"','"+$NTutor+"','"+$Domicilio+"')";
	//echo($consulta);
	if (mysqli_query($conexion, $consulta)) {
	//  echo "Insertado de forma correcta";
		echo'<script type="text/javascript">
        alert("¡Alumno guardado con éxito!");
        window.location.href="AltaAlumno.php";
        </script>';

	} else {
	//  echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
	echo'<script type="text/javascript">
	alert("¡Lo sentimos no se pudo registrar, intente nuevamente con datos válidos!");
	window.location.href="AltaAlumno.php";
	</script>';

	}
	mysqli_close($conexion);

	echo '<script type="text/javascript">'
		,'setTimeout(function(){location.href="AltaAlumno.php"} , 5000);'
   		, '</script>';
?>
