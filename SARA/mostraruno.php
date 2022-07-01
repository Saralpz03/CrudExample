<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar Uno</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php

	include("includes/conexion.php");

	$acentos = $enlace->query("SET NAMES utf8");

	$query="SELECT * FROM videojuegos WHERE id='$_GET[id]'";

		if ($result = mysqli_query($enlace,$query)) {
			while ($fila = mysqli_fetch_array($result)) {
				echo "<div class='contenedor2'>";
			echo "
				
				<div class='portada2'><img src='img/"
				.$fila['portada']."'/>
				</div>
				
				";

			echo "
				<div class='nombre2'>"
				.$fila['nombre']."<br/>
				</div>
				";
			echo "
				<div class='creador2'>"
				.$fila['creador']."<br/>
				</div>
				";
				echo "
				<div class='comentarios2'>"
				.$fila['comentarios']."<br/>
				</div>
				";
			echo "
				<div class='anio2'>"
				.$fila['anio']."
				</div>
				";
			echo "</div>";
			
			}
		}

 ?>
 <a href="mostrar_videojuegos.php" class="volver">Volver</a>
</body>
</html>
