<?php	
	include 'conexion.php';
	session_start();
	$varsesion = $_SESSION['usuario'];
	if($varsesion == null || $varsesion = '')
	{
		echo "Usted No tiene Autorización Para Acceder a Esta Página.";
		die();
	}
?>

<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
	</head>

	<body>
		<div class="panel panel-primary">
      		<div class="panel-heading"> <h2 style="text-align:center">Minimercado S.A.</h2></div>			
			<br>
			<div class="row">
				<a href="Usuarios.php" class="btn btn-primary btn-lg btn-block btn-md">USUARIOS</a>
			</div>
			<br>
			<div class="row">
				<a href="productos.php" class="btn btn-primary btn-lg btn-block btn-md">PRODUCTOS</a>
			</div>
			<br>
			<div class="row">
				<a href="Clientes.php" class="btn btn-primary btn-lg btn-block btn-md">CLIENTES</a>
			</div>
			<br>
			<div class="row">
				<a href="Proveedores.php" class="btn btn-primary btn-lg btn-block btn-md">PROVEEDORES</a>
			</div>
			<br>
			<div class="row">
				<a href="Empleados.php" class="btn btn-primary btn-lg btn-block btn-md">EMPLEADOS</a>
			</div>
			<br>			
			<div class="row">
				<a href="Factura_Venta.php" class="btn btn-primary btn-lg btn-block btn-md">FACTURA DE VENTA</a>
			</div>
			<br>
			<div class="row">
				<a href="Consultas.php" class="btn btn-primary btn-lg btn-block btn-md">CONSULTAS RESUMIDAS</a>
			</div>
			<br>
			<div class="row">
				<a href="Estadisticas.php" class="btn btn-primary btn-lg btn-block btn-md">ESTADISTICAS</a>
			</div>
		</div>
		<br>
		<center>
			<a href="Cerrar_Sesion.php" class="btn btn-default">Cerrar Sesión</a>
		</center>
	</body>
</html>
