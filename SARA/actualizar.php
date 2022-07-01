<?php 
	include ("includes/conexion.php");
	$acentos = $enlace->query("SET NAMES 'utf8'");
		
		if ($_FILES['portadav']['error']) {

			
		}
		else{
			if (isset($_FILES) && !$_FILES['portadav']['error']) {
				$ruta="img/";
				move_uploaded_file($_FILES['portadav']['tmp_name'], $ruta.$_FILES['portadav']['name']);

				$portada=!$_FILES['portadav']['error']?$_FILES['portadav']['name']:'generica.jpg';

				$query = "UPDATE  videojuegos SET portada='$portada' where id='$_POST[id]'";
				mysqli_query($enlace,$query);

			}
		}
			
		
		
		$query = "UPDATE videojuegos SET nombre='$_POST[nombre]',creador='$_POST[creador]',anio='$_POST[anio]' WHERE id='$_POST[id]'";
			if(mysqli_query($enlace,$query)){
				?>
				<script type="text/javascript">
					window.location="mostrar_videojuegos2.php";
				</script>
				<?php
			}

 ?>