
<html>
	<head>
	  <title>  </title>
	 <link rel="shortcut icon" href="/favicon.ico" />
	 <link rel="stylesheet" type="text/css" href="css/normalize.css"/> 
	 <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	 <script type="text/javascript" src="js/javascript.js"></script> 
	</head>	

	<body>
	<a href="index.php">
	<span>Volver al Inicio</span>	
   </a>
		<div id="contenedorFull">
			<div id="contenedorCentrado">
						
		<form action="" method="POST" enctype="multipart/form-data">
			
			<label for="buscar">Introduzca Año inferior:</label>
			<input type="text" id="buscar" name="anioinf">
			<label for="buscar">Introduzca Año Superior:</label>
			<input type="text" id="buscar" name="aniosup">
			<input type="submit" name="buscarv">
		</form>
		<?php
		
		if(isset($_POST['buscarv'])){
		$anioinf=$_POST['anioinf'];
		$aniosup=$_POST['aniosup'];
		include "includes/conexion.php";
			$acentos = $enlace->query("SET NAMES 'utf8'");		
			$query = "SELECT * FROM disco WHERE anio >=  $anioinf AND  anio <=  $aniosup";

				if ($result = mysqli_query ($enlace,$query)){
				while($fila = mysqli_fetch_array($result)){		
					echo '
						
							<div class="infoDiscos" >
								<div class="imagenDiscos">
								<a href="mostraruno.php?id='.$fila['id'].'">											
									<img src="images/'.$fila["portada"].'"/>
								</a>	
								</div>
								<div class="titulosDiscos">
									'.$fila['titulo'].'
								</div>
								<div class="autorDiscos">
									'.$fila['autor'].'
								</div>
								<div class="anioDiscos">
									'.$fila['anio'].'
								</div>
								<a href="insertar discos.php"><div class="botones">
									<span>Insertar Disco</span>
								</div></a>
								<a href="borrar.php?id='.$fila['id'].'"><div class="botones">
									<span>Borrar</span>
								</div>
								</a>
							</div>
						
					';
					}
					}else{
						echo "Base de datos sin información almacenada";
					}
				}
			?>

			
						
					
					</div>	
				</div>	
			</div>
		</div>
	</body>
</html>


						