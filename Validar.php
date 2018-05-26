<!DOCTYPE html>
<html>
	<body>
		<?php
			session_start();	
			$usuario = $_POST['usuario'];
			$_SESSION['usuario'] = 'usuario';
			$clave = $_POST['clave'];	

			$conexion = mysqli_connect("localhost", "root", "mysql", "Minimercado");
			$consulta1 = "SELECT * FROM usuarios WHERE Nombre_Usuario = '$usuario' and Contrasenia = '$clave' and Tipo_Usuario = 'EMPLEADO' ";
			$consulta2 = "SELECT * FROM usuarios WHERE Nombre_Usuario = '$usuario' and Contrasenia = '$clave' and Tipo_Usuario = 'ADMINISTRADOR' ";

			$resultado1 = mysqli_query($conexion, $consulta1);
			$resultado2 = mysqli_query($conexion, $consulta2);

			$filas1 = mysqli_num_rows($resultado1);
			$filas2 = mysqli_num_rows($resultado2);

			if ($filas1 > 0)		
				header("location:Menu_Empleado.php");
				
			elseif($filas2 > 0)
				header("location:Menu_Administrador.php");
			else{
				echo "<center>ERROR DE AUTENTICACION...<br><br>";
				echo "*Verifíque los datos Ingresados";
				//header("location:index.php");			
			}
			mysqli_free_result($resultado);
			mysqli_close($conexion);
		?>
	</body>
	<center>
			<br><br><br>
			<a href="index.php" class="btn btn-default">Intentarlo Nuevamente</a>
	</center>
</html>


