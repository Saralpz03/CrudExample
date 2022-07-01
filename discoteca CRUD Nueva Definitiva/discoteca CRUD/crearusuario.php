<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
	<body>
		<form action="" method="POST" enctype="multipart/form-data">
			<h1 class="usuario">CREAR USUARIO</h1><br/>
			<label for="name">NOMBRE DEL USUARIO</label><br/>
			<input type="text" id="nom" name="nombre_usu"/><br/>
			<label for="pass">Contraseña</label><br/>
			<input type="text" id="contrasena" name="pass_usu"/><br/><br/>
			<input type="submit" value="Crear" id="boton" name="enviaru"/>
			
		</form>
		
		<?php
		
		include ("includes/conexion1.php"); //incluir la conexiona a la BBDD
		$acentos = $enlace->query("SET NAMES 'utf8'"); //acentos
		
		
		if(isset($_POST['enviaru'])){
			$nombre = $_POST["nombre_usu"]; //coger el nombre
			$passw = $_POST["pass_usu"];  //coger la contraseña
			
		$query = "SELECT usuario,password FROM t_usuario WHERE usuario='$nombre'"; //Consulta
		
		// SELECT usuario,password FROM t_usuario WHERE usuario="sara"
		
		$resultado = mysqli_query($enlace,$query); //Ejecutar consulta
		
		$filas = mysqli_num_rows($resultado);
		
			if(strlen($nombre)==0 || strlen($passw)==0){ //Si la longitud del usuario y contraseña es igual a 0...
				echo"El usuario y la contraseña son obligatorios rellenarlos";
			}
			else if(strlen($passw)<6){ //Si la longitus de la comtraseña es menor de 6...
				echo "La contraseña debe tener mínimo 6 caracteres";
			}
			else{ //Sino..
				if($filas>0){ //Si...
					echo "El usuario ya existe.<br/><br/><a href='ingresarusuario.php'>Volver a intentarlo</a><br/>";
					echo "<a href='ingresarusuario.php'>Ingresar usuario</a>";
				}
				else{ //Sino...
					$query = "INSERT INTO t_usuario(usuario,password) VALUES('$nombre','$passw')";  //Consulta que quermos hacer
					$resultado = mysqli_query($enlace,$query); //ejecutar
					echo "Se ha insertado el usuario<br/>";
					echo "<a href='usuario.php'>Volver al menu de los usuarios</a><br/>";
					echo "<a href='crearusuario.php'>Volver a crear otro usuario</a><br/>";
					echo "<a href='index.php'>Volver al menú principal</a>";
				}
			}
		}
		
			
		?>
	</body>
</html>