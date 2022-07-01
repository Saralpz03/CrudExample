
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
			<label for="buscar">Introduzca Texto:</label>
			<input type="text" id="buscar" name="textoBuscar">
			<input type="submit" name="buscarv">

		</form>
		<?php
		
		if(isset($_POST['buscarv'])){
		$titulo=$_POST['textoBuscar'];
		
		include "includes/conexion.php";
			$acentos = $enlace->query("SET NAMES 'utf8'");		
			$query = "SELECT * FROM disco WHERE titulo LIKE '%$titulo%' OR autor LIKE '%$titulo%' OR anio LIKE  '%$titulo%'";

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


						