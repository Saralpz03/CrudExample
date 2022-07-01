<?php 

$host_name="localhost";
$user_name="root";
$password="";
$database="juegos";
$enlace=mysqli_connect($host_name,$user_name,$password,$database);
	if (mysqli_connect_error()) {
		echo "Error en la conexion de base de datos";
	}
	else{
		echo "";
	}

 ?>