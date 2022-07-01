
<html>
	<head>
	  <title>  </title>
	 <link rel="shortcut icon" href="/favicon.ico" />
	 <link rel="stylesheet" type="text/css" href="css/normalize.css"/> 
	 <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	 <script type="text/javascript" src="js/javascript.js"></script> 
	</head>	

	<body>
		<div id="contenedorFull">
			<div id="contenedorCentrado">
				<div id="tituloDisco">
					<span>Discos</span>
				</div>
				<div id="discos">
					<!--<div class="infoDiscos">
							<div class="imagenDiscos">
							</div>
							<div class="titulosDiscos">
							
							</div>
							<div class="autorDiscos">
							
							</div>
							<div class="anioDiscos">
							
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
												<img src="images/'.$fila["portada"].'"/>
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
											<a href="mostrar.php?id='.$fila['id'].'"><div class="botones">
												<span>Borrar</span>
											</div>
											</a>
											<a href="actualizarFormulario.php?id='.$fila['id'].'">
											<div class="botones">
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

						<?php
							if (isset($_GET['id'])){
		
							echo '
								<div id="popUpEliminar">
									<h3>ELIMINAR LIBRO</h3>
								<div>
								
								<a href="borrar.php?id='.$_GET['id'].'">
									<input type="button" class="btEnvio" name="si" value="SI" />
									</a>
								</div>
								<div>
									<a href="mostrar.php"><input type="submit" class="btEnvio" name="no" value="NO" /></a>
								</div>
								</div>
							';
							}
						?>
						
					
					</div>	
				</div>	
			</div>
		</div>
	</body>
</html>


						