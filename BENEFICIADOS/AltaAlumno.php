<html>
 <head>
  <title>Alta</title>
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
		
	<div class="box box-primary" style="padding:40px 40px; overflow-y:scroll; background: #f0dd92; width: 70%; left: 35%;  border-radius: 15px;">


		<h3 class="text-success">INGRESE LOS DATOS DEL BENEFICIADO</h3>
 		<form  enctype="multipart/form-data" name="altaAlumno" method="POST" action="InsertaAlumnoNuevo.php">

			<br> <br> <br> <br>
			Nombre_Beneficiario: <input type="text" name="Nombre_Beneficiario" placeholder ="Nombre del beneficiario"> <br>
			Nombre_Apoyo: <input type="text" name="Nombre_Apoyo" placeholder ="Nombre_del_apoyo"> <br>
			Monto: <input type="number" name="Monto" placeholder ="Monto_del_apoyo"> <br>
			Fecha_Aplicacion: <input type="date" name="Fecha_Aplicacion">

 			<input type="submit" name="Enviar" value="Enviar Datos" style="margin-left: 20rem"><br />
		 </form>
	</div>
	
 </body>
</html>
