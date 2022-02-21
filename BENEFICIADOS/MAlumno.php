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
 <div id="header">

	<label for="dark-mode" class="dark-mode-button">
			<input class= "adada" type="checkbox" id="dark-mode" onclick="document.documentElement.classList.toggle('dark-mode')">     
			Ver Modo Oscuro
		</label> 
	

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
		<?php
			include("Conexion.php");
			$consulta = "Select * from Usuario Order by id asc";
			$result = $conexion->query($consulta);
		?>

		<h1 align="center">LISTADO DE BENEFICIADOS</h1>
		<form name="bajaAlumno" method="POST" action="BuscaAlumnoModificar.php">
 			ID del beneficiado a modificar: <input type="text" name="id" style="margin-top: 1.5rem" required="required" placeholder="Modificar beneficiario" size="30"><br />
 			<button type="submit" style="margin-top: 1.5rem">Enviar</button>
 		</form>
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
    </table>
	</div>
	</center>
 </body>
</html>
