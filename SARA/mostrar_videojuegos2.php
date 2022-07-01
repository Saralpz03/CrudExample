<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar todos</title>
	<link rel="stylesheet" type="text/css" href="css/sara.css">
</head>
<body>
	<p><a href="index.php">VOLVER AL INDEX</a></p>
	<?php 
	include('includes/conexion.php');
$acentos=$enlace->query("SET NAMES utf8");
$query = "SELECT * FROM videojuegos";
	if ($result = mysqli_query($enlace,$query)) {
		while ($fila = mysqli_fetch_array($result)) {
			echo "
				<div class='contenedor'>
					<div class='videojuego'>
						<div class='portada'>
							<a href='mostraruno.php?id=".$fila['id']."'><img src='img/".$fila['portada']."'/></a>
						</div>
						<div class='nombre'>".$fila['nombre']."</div>
						<div class='creador'>".$fila['creador']."</div>
						<div class='anio'>".$fila['anio']."</div>
					</div>
					<div class='botones'>
						<div class='centrarbo'>
							<a href='insertar.php'>
							<div class='insertar'>
								INSERTAR
							</div>
							</a>
							<a href='borrar.php?id=".$fila['id']."'>
							<div class='borrar'>
								BORRAR
							</div>
							</a>
							<a href='actualizarFormulario.php?id=".$fila['id']."'>
							<div class='actualizar'>
								ACTUALIZAR
							</div>
							</a>
						</div>
					</div>
				</div>
			";
			
		}
	}

 ?>
</body>
</html>