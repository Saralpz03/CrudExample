<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css/estiloindex2.css">
</head>
<body>
	<div class="contenedor">
		<div class="insertarindex">
			<p>INSERTAR NUEVOS VINOS</p>
				<table border="1" id="tabla">
					<tr>
						<td>
							<form action="insertar.php" method="POST" enctype="multipart/form-data" class="formulario_insertar">
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

		</div>

		<div class="centrarbotones">
			<div>
				<a href="mostrar_videojuegos2.php" class="botones">Ir a mostrar</a>
			</div>
			<div>
				<a href="buscar.php" class="botones">Buscar texto exacto</a>
			</div>
			<div>
				<a href="buscarPorLetras.php" class="botones">Buscar comodin</a>
			</div>
			<div>
				<a href="buscarEntreAnios.php" class="botones">Buscar entre años</a>
			</div>
			<div>
				<a href="buscaranio.php" class="botones">Buscar por año</a>
			</div>
			<div>
				<a href="" class="botones">Actualizar</a>
			</div>
			<div>
				<a href="usuario.php" class="botones">Usuarios</a>
			</div>
		</div>
	</div>
	</body>
</body>
</html>