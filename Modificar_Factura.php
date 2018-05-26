<?php
	require 'conexion.php';

	$Codigo_Factura = $_GET['Codigo_Factura'];
	$sql = "SELECT * FROM Factura_Venta WHERE Codigo_Factura = '$Codigo_Factura' ";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>
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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>

			<form class="form-horizontal" method="POST" action="Actualizar_Factura.php" autocomplete="off">

				<div class="form-group">
					<label for="Codigo_Factura" class="col-sm-2 control-label">Codigo Factura</label>
					<div class="col-sm-10">
						<input type="int" maxlength="10" class="form-control" id="Codigo_Factura" name="Codigo_Factura" placeholder="Codigo Factura" value="<?php echo $row["Codigo_Factura"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Codigo_Producto" class="col-sm-2 control-label">Codigo Producto</label>
					<div class="col-sm-10">
						<input type="int" maxlength="10" class="form-control" id="Codigo_Producto" name="Codigo_Producto" placeholder="Codigo Producto" value="<?php echo $row["Codigo_Producto"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Codigo_Usuario" class="col-sm-2 control-label">Codigo Usuario</label>
					<div class="col-sm-10">
						<input type="int" maxlength="10" class="form-control" id="Codigo_Usuario" name="Codigo_Usuario" placeholder="Codigo Usuario" value="<?php echo $row["Codigo_Usuario"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Codigo_Proveedor" class="col-sm-2 control-label">Codigo Proveedor</label>
					<div class="col-sm-10">
						<input type="int" maxlength="10" class="form-control" id="Codigo_Proveedor" name="Codigo_Proveedor" placeholder=" Codigo Proveedor" value="<?php echo $row["Codigo_Proveedor"]; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Nombre_Producto" class="col-sm-2 control-label">Nombre Producto</label>
					<div class="col-sm-10">
						<input type="text" maxlength="15" class="form-control" id="Nombre_Producto" name="Nombre_Producto" placeholder="Nombre Producto" value="<?php echo $row["Nombre_Producto"]; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="Cantidad" class="col-sm-2 control-label">Cantidad</label>
					<div class="col-sm-10">
						<input type="int" maxlength="5" class="form-control" id="Cantidad" name="Cantidad" placeholder="Cantidad" value="<?php echo $row["Cantidad"]; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="Factura_Venta.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>

			</form>
		</div>
	</body>
</html>
