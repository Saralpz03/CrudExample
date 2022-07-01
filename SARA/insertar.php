<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insertar Juegos</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<p>INSERTAR NUEVOS JUEGOS</p>
	<table border="1">
		<tr>
			<td>
				<form action="" method="POST" enctype="multipart/form-data" class="formulario_insertar">
					<label for="nombre">Nombre</label><br/>
					<input type="text" name="nombre">
					<br/><br/><br/>
					<label for="crear">Creador</label><br/>
					<input type="text" name="creador">
					<br/><br/><br/>
					<label for="year">Año</label><br/>
					<input type="text" name="anio">
					<br/><br/><br/>
					<label for="port">Portada</label><br/>
					<input type="file" name="portadav">
					<br/><br/><br/>
					<input type="submit" value="LISTO" name="enviar" id="boton">
				</form>
			</td>
		</tr>
	</table>

<?php 
	include ("includes/conexion.php");
	$acentos=$enlace->query("SET NAMES 'utf8'");

	if (isset($_POST['enviar'])) {
		if (isset($_FILES) && !$_FILES['portadav']['error']) {

			$ruta="img/";
			move_uploaded_file($_FILES['portadav']['tmp_name'], $ruta.$_FILES['portadav']['name']);

			$portada=!$_FILES['portadav']['error']?$_FILES['portadav']['name']:'generica.jpg';

				$nombre=$_POST['nombre'];
				$creador=$_POST['creador'];
				$anio=$_POST['anio'];

			$query="INSERT INTO videojuegos(nombre,creador,anio,portada) VALUES('$nombre','$creador','$anio','$portada')";

			if (mysqli_query($enlace,$query)) {
				echo "<p>Se ha insertado el disco correctamente</p>";
				echo "<script>window.location='mostrar_videojuegos2.php'</script>";
			}
			else{
				echo "Ha habido un error al intentar insertar el juego".mysqli_error($enlace);
			}
		}
	}

 ?>

</body>
</html>