<?php
	require 'conexion.php';

	$Codigo_Factura = $_POST["Codigo_Factura"];
	$Codigo_Producto = $_POST["Codigo_Producto"];
	$Codigo_Usuario = $_POST["Codigo_Usuario"];
	$Codigo_Proveedor = $_POST["Codigo_Proveedor"];
	$Nombre_Producto = $_POST["Nombre_Producto"];
	$Cantidad = $_POST["Cantidad"];

	$sql = "UPDATE Factura_Venta SET Codigo_Factura = '$Codigo_Factura', Codigo_Producto = '$Codigo_Producto', Codigo_Usuario = '$Codigo_Usuario', Codigo_Proveedor = '$Codigo_Proveedor', Nombre_Producto = '$Nombre_Producto', Cantidad = '$Cantidad'  WHERE Codigo_Factura='$Codigo_Factura' ";
	$resultado = $conexion ->query($sql);
?>

<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
					<h3>FACTURACION MODIFICADA EXITOSAMENTE</h3>
					<?php } else { ?>
					<h3>ERROR AL MODIFICAR LA FACTURA</h3>
				<?php } ?>

				<a href="Factura_Venta.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>
