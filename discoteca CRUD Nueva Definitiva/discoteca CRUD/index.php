<html>
	<head>
	  <title>  </title>
	 <link rel="shortcut icon" href="/favicon.ico" />
	 <link rel="stylesheet" type="text/css" href="css/normalize.css"/> 
	 <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	 <script type="text/javascript" src="js/javascript.js"></script> 
	</head>	

	<body>
		<h1>Insertar Nuevos discos</h1>
		<form action="" method="POST" enctype="multipart/form-data">
			<fieldset>
			<label for="titulo" class="signo">
				Insertar titulo del disco:
			</label>
			<input type="text" id="titulo" name="titulov" class="field"/>

			<label for="anio" class="signo">
				Insertar el año  :
			</label>
			<input type="text" id="anio" name="aniov" class="field"/>

			<label for="autor" class="signo">
				Insertar el autor:
			</label>
			<input type="text" id="autor" name="autorv" class="field"/>

			<label for="portada" class="signo">Portada</label>
			<input type="file" id="portada" name="portadav">

			<input type="submit" value="Enviar" id="boton" name="enviarv">
			</fieldset>
		</form>

		<?php

			header("Content-Type: text/html;charset=utf-8");
				include "includes/conexion.php";
				$acentos = $enlace->query("SET NAMES 'utf8'");

				if(isset($_POST['enviarv'])){

					if(isset($_FILES) && !$_FILES['portadav']['error']){
	
					  	$ruta="images/";
	  
		 				move_uploaded_file($_FILES['portadav']['tmp_name'],$ruta.$_FILES['portadav']['name']);
					} 
	
					$portada=!$_FILES['portadav']['error']?$_FILES['portadav']['name']:'portada.jpg';

						$titulo = $_POST['titulov'];
						$anio = $_POST['aniov'];
						$autor=$_POST['autorv'];


				$query = "INSERT INTO disco(titulo,anio,autor,portada) VALUES('$titulo','$anio','$autor','$portada')";
	
					if (mysqli_query($enlace,$query)){
						echo "<p class='centrarInfo'>Se ha insertado el disco correctamente en la Base de Datos</p>";
						echo "<script>window.location='mostrar.php'</script>";
					}
					else{
						echo "<p>Hubo algún problema al registrar el disco. Inténtelo más tarde</p>"
						.mysqli_error($enlace);
					}
				}
		?>

<a href="mostrar solos.php">
<div id="botonMostrar">
	<span>Ir a mostrar</span>
</div>
</a>
<a href="buscarI.php">
<div id="botonMostrar">
	<span>Buscar Texto exacto</span>
</div>
</a>
<a href="buscarII.php">
<div id="botonMostrar">
	<span>Buscar Año exacto</span>
</div>
</a>
<a href="buscarIII.php">
<div id="botonMostrar">
	<span>Buscar entre años</span>
</div>
</a>
<a href="buscarIV.php">
<div id="botonMostrar">
	<span>Buscar comodín</span>
</div>
</a>
<a href="mostrar solos.php">
<div id="botonMostrar">
	<span>Actualizar</span>
</div>
</a>
<a href="usuario.php">
<div id="botonMostrar">
	<span>Crear/Ingresar Usuario</span>
</div>
</a>

	</body>
</html>

