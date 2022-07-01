
<html>
	<head>
	  <title>  </title>
	 <link rel="shortcut icon" href="/favicon.ico" />
	 <link rel="stylesheet" type="text/css" href="css/normalize.css"/> 
	 <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	 <script type="text/javascript" src="js/javascript.js"></script> 
	</head>	

	<body>
		<h1>ACTUALIZAR DISCOS</h1>
		</div>					
					<?php
						include "includes/conexion.php";
							$acentos = $enlace->query("SET NAMES 'utf8'");		
							$query = "SELECT * FROM disco WHERE id='$_GET[id]'";
		
								if ($result = mysqli_query ($enlace,$query)){
								while($fila = mysqli_fetch_array($result)){			
								echo '
											
			<form action="actualizar.php" method="POST" enctype="multipart/form-data">
			<fieldset>
			<label for="id" class="signo">		
				Insertar titulo del disco:
			</label>
			<input type="text" id="id" name="idv" class="field" value="'.$fila['id'].'"/>
			<label for="titulo" class="signo">		
				Insertar titulo del disco:
			</label>
			<input type="text" id="titulo" name="titulov" class="field" value="'.$fila['titulo'].'"/>

			<label for="anio" class="signo">
				Insertar el año  :
			</label>
			<input type="text" id="anio" name="aniov" class="field" value="'.$fila['anio'].'"/>

			<label for="autor" class="signo">
				Insertar el autor:
			</label>
			<input type="text" id="autor" name="autorv" class="field" value="'.$fila['autor'].'"/>

			<label for="portada" class="signo">Portada</label>
			<input type="file" id="portada" name="portadav">

			<input type="submit" value="Enviar" id="boton" name="enviarv">
			</fieldset>
		</form>					
				';
				}
				}else{
					echo "Base de datos sin información almacenada";
				}
					?>
					
			</div>	
		
		

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
	<span>Buscar I</span>
</div>
</a>

	</body>
</html>

