<?php 

	include("includes/conexion.php");

	$acentos = $enlace->query("SET NAMES 'utf8'");

	$query="DELETE FROM videojuegos WHERE id='$_GET[id]'";

		if ($result = mysqli_query($enlace,$query)) {
		echo "<script type='text/javascript'>window.location='mostrar_videojuegos2.php';</script>";
	}
	else{
		echo "No";
	}

 ?>