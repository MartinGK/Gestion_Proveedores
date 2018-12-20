<!--  //../html/login.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Administracion de Proveedores</title>
	<link rel="stylesheet" type="text/css" href="../html/paginaprincipal.css">
</head>
	<body>
	<div class="background">
		<img id="background" src="../html/fondo.jpg">
	</div>
	</body>
		<nav id="navigation_top"><h3>Administracion de Proveedores</h3></nav><br><br>
	<br><br>	
		<h2 id="mensaje_bienvenida">Bienvenido a Administracion de Proveedores</h2>
<br>
<br>
<div id="opc">
	<?php if($this->error==1){
		echo "<p id='no_login'> Login Incorrecto </p>";
	} ?>
	<form method="POST" action="">

		<div class="caja">
			<label for="nombre_usuario" class="label">Ingrese su nombre de usuario</label><br>
			<input type="text" name="nombre_usuario" id="nombre_usuario" class="input-text">
		</div>
		<br><br>
		<div class="caja">
			<label for="password" class="label">Ingrese su contraseña</label><br>
			<input type="password" name="password" id="password" class="input-text">
		</div>
		<br><br>
		<input type="submit" value="Entrar" class="button yellow hvr-radial-out" id="submit_entrar">
	</form>
</div>
</body>
</html>