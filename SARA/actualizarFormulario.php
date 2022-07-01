<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Formulario</title>
	<link rel="stylesheet" type="text/css" href="css/estiloindex.css">
</head>
<body>
	<?php  
	include ("includes/conexion.php");
		$acentos = $enlace->query("SET NAMES 'utf8'");
		$query = "SELECT * FROM videojuegos WHERE id='$_GET[id]'";
			if ($result = mysqli_query ($enlace,$query)) {
				while ($fila = mysqli_fetch_array($result)) {
					echo '
						<div class="insertarindex">
							<p>INSERTAR NUEVOS JUEGOS</p>
								<table border="1" id="tabla">
									<tr>
										<td>
											<form action="actualizar.php" method="POST" enctype="multipart/form-data" class="formulario_insertar">
												<label for="id">Id</label><br/>
												<input type="text" name="id" value="'.$fila['id'].'">
												<br/><br/><br/>
												<label for="nombre">Nombre</label><br/>
												<input type="text" name="nombre" value="'.$fila['nombre'].'">
												<br/><br/><br/>
												<label for="crear">Creador</label><br/>
												<input type="text" name="creador" value="'.$fila['creador'].'">					
												<br/><br/><br/>
												<label for="year">Año</label><br/>
												<input type="text" name="anio" value="'.$fila['anio'].'">
												<br/><br/><br/>
												<label for="port">Portada</label><br/>
												<input type="file" name="portadav">
												<br/><br/><br/>
												<input type="submit" value="LISTO" name="enviar" id="boton">
											</form>
										</td>
									</tr>
								</table>
						</div>
					';
				}
			}
	
	?>
</body>
</html>