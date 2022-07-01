<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar videojuegos</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php 

include('includes/conexion.php');
$acentos=$enlace->query("SET NAMES utf8");
$query = "SELECT * FROM videojuegos";
	if ($result = mysqli_query($enlace,$query)) {
		while ($fila = mysqli_fetch_array($result)) {
			echo "<div class='contenedor'>";
			echo "<div class='centrarboton'><a href='mostraruno.php?id="
				.$fila['id']."'><div class='portada'><img src='img/"
				.$fila['portada']."'/>
				</div>
				</a>
				";

			echo "
				<div class='nombre'>"
				.$fila['nombre']."<br/>
				</div>
				";
			echo "
				<div class='creador'>"
				.$fila['creador']."<br/>
				</div>
				";
			echo "
				<div class='anio'>"
				.$fila['anio']."
				</div>
				";
			echo "<br>";
			echo "
				<div class='botones'>
				<a href='borrar.php?id="
				.$fila['id']."'>Borrar</a></div>
				";
			echo "<br>";
			echo "
				<div class='botones'>
				<a href='insertar.php'>Insertar</a></div>
				";
			echo "
				<div class='botones'>
				<a href='actualizarFormulario.php?id="
				.$fila['id']."'>Actualizar</a></div>
				";
			echo "</div>";
			echo "</div>";
			
		}
	}

 ?>
</body>
</html>



