

<?php
	include "includes/conexion.php";
	
	/*Primero tratamos la imagen, si no han puesto ninguna, no queremos que haga ningun cambio, si la modifican , si queremos que se actualice.
	*/
	
	/*En el siguiente código, si la imagen no se adjunta al formulario, no queremos que haga nada*/
	if( $_FILES['portadav']['error']  ){
  
}
/*Si se modifica relizaremos el código que viene a continuación*/
else{
  if(isset($_FILES) && !$_FILES['portadav']['error']){
	  //no hay error al subir el fichero al servidor
	  $ruta="images/";
	  move_uploaded_file($_FILES['portadav']['tmp_name'],$ruta.$_FILES['portadav']['name']);

	$portada=!$_FILES['portadav']['error']?$_FILES['portadav']['name']:'generica.jpg'; //Imagen por defecto  
	
                   
	$query = "UPDATE  disco SET portada='$portada' where id='$_POST[idv]'";
		mysqli_query($enlace,$query);		  
	
}
 
}	
											
	$acentos=$enlace->query("SET NAMES 'utf8'");

		$query="UPDATE disco SET titulo='$_POST[titulov]',autor='$_POST[autorv]',anio='$_POST[aniov]' WHERE id='$_POST[idv]'";
			if(mysqli_query($enlace,$query)){
				?>
				<script type="text/javascript">
					window.location="mostrar solos.php";
				</script>
				<?php
			}
?>


						