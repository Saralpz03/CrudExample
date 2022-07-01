
<html>
	<head>
	  <title>  </title>
	 <link rel="shortcut icon" href="/favicon.ico" />
	 <link rel="stylesheet" type="text/css" href="css/normalize.css"/> 
	 <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	 <script type="text/javascript" src="js/javascript.js"></script> 
	</head>	
	<style>
		
	</style>

	<body>
		<div id="contenedorFull">
			<div id="contenedorCentrado">			
			<!--<div class="disco">	
				<div class="portada">
				<img  class="foto" src="images/portadaRolling.jpg" />
				</div>				
			<div class="informacionDisco">
				<div class="titulosDiscosuno">
				TITULO DEL DISCO
				</div>
				<div class="autorDiscosizq">
				AUTOR
				</div>
				<div class="anioDiscosder">
				AÑO
				</div>
			</div>					
			</div>-->
			<?php
					include "includes/conexion.php";
						$acentos = $enlace->query("SET NAMES 'utf8'");		
						$query = "SELECT * FROM disco WHERE id='$_GET[id]'";
		
							if ($result = mysqli_query ($enlace,$query)){
							while($fila = mysqli_fetch_array($result)){		
								echo '
							<div class="disco">	
								<div class="portada">
								<img  class="foto" src="images/'.$fila["portada"].'" />
								</div>				
							<div class="informacionDisco">
								<div class="titulosDiscosuno">
								'.$fila["titulo"].'
								</div>
								<div class="autorDiscosizq">
								'.$fila["autor"].'
								</div>
								<div class="anioDiscosder">
								'.$fila["anio"].'
								</div>
							</div>					
						</div>';
			
							}
				}
			else{
				echo "No";
			}
							
		?>
			
		
			<a href="mostrar solos.php" >Volver </a>
			
		</div>
		</div>
	</body>
</html>


						