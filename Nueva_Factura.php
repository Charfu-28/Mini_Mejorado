<html lang="es">
	<head>
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/ValidarFactura.js" 	type="text/javascript" /> </script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">Nueva Factura</h3>
			</div>

			<form class="form-horizontal" method="POST" action="Guardar_Factura.php" autocomplete="off">
				<div class="form-group">
					<label for="Codigo_Factura" class="col-sm-2 control-label">Codigo Factura</label>
					<div class="col-sm-10">
						<input type="int" maxlength="10" class="form-control" id="Codigo_Factura" name="Codigo_Factura" placeholder="Codigo Factura" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Codigo_Producto" class="col-sm-2 control-label">Codigo Producto</label>
					<div class="col-sm-10">
						<input type="int" maxlength="10" class="form-control" id="Codigo_Producto" name="Codigo_Producto" placeholder="Codigo Producto" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Codigo_Usuario" class="col-sm-2 control-label">Codigo Usuario</label>
					<div class="col-sm-10">
						<input type="int" maxlength="10" class="form-control" id="Codigo_Usuario" name="Codigo_Usuario" placeholder="Codigo Usuario" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Codigo_Proveedor" class="col-sm-2 control-label">Codigo Proveedor</label>
					<div class="col-sm-10">
						<input type="int" maxlength="10" class="form-control" id="Codigo_Proveedor" name="Codigo_Proveedor" placeholder="Codigo Proveedor" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Nombre_Producto" class="col-sm-2 control-label">Nombre Producto</label>
					<div class="col-sm-10">
						<input type="text" maxlength="10" class="form-control" id="Nombre_Producto" name="Nombre_Producto" placeholder="Nombre Producto" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Cantidad" class="col-sm-2 control-label">Cantidad</label>
					<div class="col-sm-10">
						<input type="int" maxlength="5" class="form-control" id="Cantidad" name="Cantidad" placeholder="Cantidad" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="Factura_Venta.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>