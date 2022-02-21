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
		<?php
			include("Conexion.php");
			$id = $_POST['id'];
			$consulta = "Select * from Usuario where id = '$id'";
			$result = $conexion->query($consulta);
		?>

		<h1 align="center">BENEFICIARIO A MODIFICAR</h1>
		<br>
		<br>
		<br>
		<Form name="Datos_Modificar" action="Modifica_AlumnosF.php" method="POST">
    <?php 
        while($datos=$result->fetch_array()){
        ?>
		ID <input name="id" size="30" value="<?php echo $datos['id']?>"></br> <br>
		NOMBRE_BENEFICIARIO: <input type="text" name="Nombre" required="required" size="30" value="<?php echo $datos['Nombre_Beneficiario']?>"></br></br>

		NOMBRE_APOYO: <input type="text" name="Apoyo" required="required" size="30" value="<?php echo $datos['Nombre_Apoyo']?>"></br></br>
		MONTO: <input type="number" name="Monto" required="required" size="30" value="<?php echo $datos['Monto']?>"></br></br>
		FECHA: <input type="date" name="Fecha" required="required" size="30" value="<?php echo $datos['Fecha_Aplicacion']?>"></br></br>		
		<button type="submit" style="margin-top: 1.5rem">Modificar</button>
		<form action="index.php">
		<button type="submit" style="margin-top: 1.5rem">Cancelar</button>
		</form>
		
		

          
         <?php   
        }

     ?>
   		</Form>
    
	</div>
	</center>
 </body>
</html>
