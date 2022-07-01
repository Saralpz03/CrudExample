

<?php
	
	include "includes/conexion.php";
		$acentos = $enlace->query("SET NAMES 'utf8'");
		
		$query = "DELETE FROM disco WHERE id='$_GET[id]'";
			if ($result = mysqli_query ($enlace,$query)){
				echo '<script type="text/javascript">
				window.location="mostrar solos.php";
					</script>
				';
			}else{
				echo "No";
			}
		
?>



						