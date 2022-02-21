<?php
	include("Conexion.php");

		
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['id'];
		if(!empty($valor)){
			$where = "WHERE id LIKE '%$valor'";
		}
	}
	$consulta = "SELECT * FROM Usuario $where";
	$result = $conexion->query($consulta);
			
?>

<html>
 <head>
  <title>Modifica</title>
   <link rel="stylesheet" href="Content/bootstrap.min.css">
    <link rel="stylesheet" href="Content/toastr.min.css">
    <link rel="stylesheet" href="Content/Site.css">
    <link rel="stylesheet" href="Content/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="CSS/menu.css">
 </head>
 <body background="IMG/IM002.jpg">

<label for="dark-mode" class="dark-mode-button">
			<input class= "adada" type="checkbox" id="dark-mode" onclick="document.documentElement.classList.toggle('dark-mode')">     
			Ver Modo Oscuro
		</label> 
 <div id="header">
			<ul class="nav">				
				<li><a href="index.php">Inicio</a></li>					
			
						<li><a href="AltaAlumno.php">Alta</a></li>
						<li><a href="BajaAlumno.php">Baja</a></li>
						<li><a href="MAlumno.php">Modificar</a></li>
						<li><a href="BuscarAlumno.php">Buscar</a></li>
				</li>				
				
			</ul>
		</div>


		<br /><br /><br /><br />
		<center>
	<div class="box box-primary" style="padding:40px 40px; overflow-y:scroll; background: #f0dd92; width: 70%;  border-radius: 15px;">
 		<h3 align="center">LISTADO DE BENEFICIARIOS</h3>
    	<table width="70%" border="1px" class="table table-hover">

    		<tr align="center">        	
			<td>ID</td>
			<td>BENEFICIARIO</td>
        		<td>APOYO</td>
        		<td>MONTO</td>        		
        		<td>FECHA_APLICACION</td>
    		</tr>
    <?php 
        while($datos=$result->fetch_array()){
        ?>
            <tr>
		<td><?php echo $datos["id"]?></td>
                <td><?php echo $datos["Nombre_Beneficiario"]?></td>
                <td><?php echo $datos["Nombre_Apoyo"]?></td>
                <td><?php echo $datos["Monto"]?></td>
                <td><?php echo $datos["Fecha_Aplicacion"]?></td>
            </tr>
            <?php   
        }

     ?>
	<a href="BuscarAlumno.php">REGRESAR</a>
    </table>
	</div>
	</center>
 </body>
</html>
