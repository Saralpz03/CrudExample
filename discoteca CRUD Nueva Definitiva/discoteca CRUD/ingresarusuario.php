<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
	<body>
		<form action="" method="POST" enctype="multipart/form-data">
			<h1 class="usuario">INGRESAR USUARIO</h1><br/>
			<label for="name">NOMBRE DEL USUARIO</label><br/>
			<input type="text" id="nom" name="nombre_usu"/><br/>
			<label for="pass">Contraseña</label><br/>
			<input type="text" id="contrasena" name="pass_usu"/><br/><br/>
			<input type="submit" value="Ingresar" id="boton" name="ingresaru"/>
			
		</form>
		
		<?php
		
		include ("includes/conexion1.php");
		$acentos = $enlace->query("SET NAMES 'utf8'"); 
		
		if(isset($_POST['ingresaru'])){
			
			$nombre = $_POST["nombre_usu"];
			$passw = $_POST["pass_usu"];
		
			$query = "SELECT usuario,password FROM t_usuario WHERE usuario='$nombre' AND password='$passw'";
			
			$resultado = mysqli_query($enlace,$query); //ejecutar
			$filas = mysqli_num_rows($resultado);
			
			if($filas>0){
				if(isset($nombre)){				
					echo "Se ha registrado como $nombre correctamente<br/>";
					echo "<a href='usuario.php'>Volver al menu de los usuarios</a><br/>";
					echo "<a href='index.php'>Volver al menú principal</a><br/>";
				}
			}
			else{
				echo "Usuario o contraseña incorrectos<br/>";
				echo "<a href='crearusuario.php'>Crear usuario nuevo</a><br/>";
				echo "<a href='ingresarusuario.php'>Volver a intentarlo</a><br/>";
			}
		}
			
		?>
	</body>
</html>