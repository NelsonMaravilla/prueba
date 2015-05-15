<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de usuarios</title>
</head>
<body link="#E5E5E5" vlink="E0E0E0" bgcolor="red">
	<strong>FORMULARIO DE REGISTRO DE USUARIOS</strong>
	<form  method="post" action="registro.php">
		<p>NOMBRE:
		<input type="text" name="nombre" value="" required>
		</p>
		<br><br>
		<p>APELLIDOS:
		<input type="text" name="apellidos" required >
		</p>
		<br><br>
		<p>NOMBRE DE USUARIO:
		<input type="text" name="usuario" required>
		</p>
		<br><br>
		<p>CONTRASEÑA:
		<input type="password" name="contrasena" required>
		</p>
		<br><br>
		<p>E-MAL:
		<input type="text" name="email" required>
		</p>
		<br><br>
		<input type="submit" name="submit" value="ENVIAR DATOS">
		<br><br>
	</form>
</body>
</html>