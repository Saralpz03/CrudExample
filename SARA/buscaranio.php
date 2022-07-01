<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscar</title>
	<link rel="stylesheet" type="text/css" href="css/sara.css">
</head>
<body>
		<p><a href="index.php">VOLVER AL INDEX</a></p>
		<form action="" class="formulario_buscar" method="POST" enctype="multipart/form-data">
		<label for="name">Año del juego</label><br/>
		<input type="text" name="textobuscar">
		<span class="botones"><input type="submit" value="Buscar" name="buscar"></span>
		</form>
	
	<?php 

		if (isset($_POST['buscar'])) {

			$anio=$_POST['textobuscar'];
		
			include('includes/conexion.php');
				$acentos=$enlace->query("SET NAMES utf8");
				$query = "SELECT * FROM videojuegos WHERE anio='$anio'";
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
		}
	 ?>


</body>
</html>


