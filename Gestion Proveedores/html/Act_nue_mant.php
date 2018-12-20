<!-- //../html/Act_nue_mant.php -->
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
		<h2 id="mensaje_bienvenida">Actualizacion: Nuevo mantenimiento </h2>
<br>
<br>
	<div id="opc">

		<form method="POST" action="">
<div class="caja">
			<label for="nro_sol_mant" class="label">Ingrese el numero de solicitud de mantenimiento</label><br>
			<input type="text" name="nro_sol_mant" id="nro_sol_mant" class="input-text">
</div>
<br><br>
<div class="caja">
			<label for="cuit" class="label">Ingrese el numero de cuit del proveedor</label><br>
			<input type="text" name="cuit" id="cuit" class="input-text">
</div>
<br><br>
			<a href="actualizaciones.php"  id="volver" class="button yellow hvr-radial-out">Volver</a>
			<input type="submit" value="Mantenimiento realizado" class="button yellow hvr-radial-out" id="submit">
		</form>
	
	</div>
</html>