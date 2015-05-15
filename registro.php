	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body link="#E5E5E5" vlink="E0E0E0">
		<strong>SU REGISTRO SE HA COMPLETADO CON EXITO</strong>
		<?php 
		require_once 'vendor/autoload.php';

		$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'registrados',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8'
]);


		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$usuario = $_POST['usuario'];
		$contrasena = $_POST['contrasena'];
		$email = $_POST['email'];


		$database->insert('usuarios', [
	'nombre' => $nombre,
	'apellidos' => $apellidos,
	'usuario' => $usuario,
	'contrasena' =>$contrasena,
	'email'=>$email
]);

		

		
	?>
	<br>
	<a href="formulario.php">volver al formulario</a>
	</body>
	</html>
	
