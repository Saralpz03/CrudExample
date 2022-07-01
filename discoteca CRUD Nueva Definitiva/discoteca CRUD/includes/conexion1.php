<?php
	$host_name = "localhost";
	$user_name = "root";
	$database = "usuarios";	
	$password = "";
	$enlace = mysqli_connect($host_name, $user_name, $password, $database);
	if(mysqli_connect_errno())
	{
		echo 'Error al conectar con la base de datos'. mysqli_connect_error();
	}
	else
	{
		echo '';
	}


?>