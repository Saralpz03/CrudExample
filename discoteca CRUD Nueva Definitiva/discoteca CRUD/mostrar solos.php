
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

				<!--<div id="tituloDisco">
					<span>Discos</span>
				</div>
				<div id="discos">
					<div class="infoDiscos">
							<div class="imagenDiscos">
								<img src="images/doors.jpg"/>
							</div>
							<div class="titulosDiscos">
							TITULO
							</div>
							<div class="autorDiscos">
							AUTOR
							</div>
							<div class="anioDiscos">
							AÑO
							</div>
					-->

					<?php
					include "includes/conexion.php";
						$acentos = $enlace->query("SET NAMES 'utf8'");		
						$query = "SELECT * FROM disco";
		
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
											<a href="index.php"><div class="botones">
												<span>Insertar Disco</span>
											</div></a>
											<a href="borrar.php?id='.$fila['id'].'"><div class="botones">
												<span>Borrar</span>
											</div>
											</a>
											<a href="actualizarFormulario.php?id='.$fila['id'].'"><div class="botones">
												<span>Actualizar</span>
											</div>
											</a>
										</div>
									
   								';
								}
								}else{
									echo "Base de datos sin información almacenada";
								}
						?>

						
						
					
					</div>	
				</div>	
			</div>
		</div>
	</body>
</html>


						