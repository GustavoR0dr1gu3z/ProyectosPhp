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
		
		<h1 align="center">BUSQUEDA DE BENEFICIARIOS</h1>
		<form name="busqueda" method="POST" action="buscar.php">
 			ID del beneficiado a buscar: <input type="text" name="id" style="margin-top: 1.5rem" required="required" placeholder="Buscar  beneficiario" size="30"><br />
 			<button type="submit" style="margin-top: 1.5rem">Enviar</button>
 		</form>
	






 		
	</div>
	</center>
 </body>
</html>

