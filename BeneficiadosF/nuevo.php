<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">Nuevo Registro</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre del Beneficiario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="apollo" class="col-sm-2 control-label">Nombre del Apollo</label>
					<div class="col-sm-10">
						<input type="apollo" class="form-control" id="apollo" name="apollo" placeholder="apollo" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="monto" class="col-sm-2 control-label">Monto</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="monto" name="monto" placeholder="monto">
					</div>
				</div>

				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">Fecha de Aplicación</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha">
					</div>
				</div>
		
			
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
