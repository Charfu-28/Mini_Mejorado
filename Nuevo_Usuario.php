<html lang="es">
	<head>		
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/ValidarUsuario.js" 	type="text/javascript" /> </script>		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">Nuevo Usuario</h3>
			</div>

			<form class="form-horizontal" method="POST" action="Guardar_Usuario.php" autocomplete="off">
				<div class="form-group">
					<label for="Codigo Usuario" class="col-sm-2 control-label">Codigo Usuario</label>
					<div class="col-sm-10">
						<input type="text" maxlength="10" class="form-control" id="Codigo" name="Codigo" placeholder="Codigo Usuario" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Nombres" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" maxlength="20" class="form-control" id="Nombres" name="Nombres" placeholder="Nombre" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Apellidos" class="col-sm-2 control-label">Apellido</label>
					<div class="col-sm-10">
						<input type="text" maxlength="20" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellido">
					</div>
				</div>

				<div class="form-group">
					<label for="Tipo_Usuario" class="col-sm-2 control-label">Tipo de Usuario</label>
					<div class="col-sm-10">
						<select class="form-control" id="Tipo_Usuario" name="Tipo_Usuario">
							<option value="ADMINISTRADOR">ADMINISTRADOR</option>
							<option value="EMPLEADO">EMPLEADO</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="Nombre_usuario" class="col-sm-2 control-label">Nombre Usuario</label>
					<div class="col-sm-10">
						<input type="text" maxlength="15"class="form-control" id="Nombre_usuario" name="Nombre_Usuario" placeholder="Nombre Usuario" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Contraseña" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="text" maxlength="10"class="form-control" id="Contraseña" name="Contrasenia" placeholder="Contraseña" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="Usuarios.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-success">Guardar</button>						
					</div>
				</div>							
			</form>
		</div>
	</body>
</html>