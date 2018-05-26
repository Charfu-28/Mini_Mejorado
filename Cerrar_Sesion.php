<?php 

	session_start();
	$varsesion = $_SESSION['usuario'];
	if($varsesion == null || $varsesion = '')
	{
		echo "Usted No tiene Autorización Para Acceder a Esta Página.";
		die();
	}
	session_destroy();
	header("Location: index.php");	

?>