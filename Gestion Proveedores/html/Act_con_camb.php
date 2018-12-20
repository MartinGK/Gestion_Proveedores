<!--  //../html/Act_con_camb.php -->
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
	<br>
		<h2 id="mensaje_bienvenida">Actualizacion: Concrecion de cambio de maquina</h2>
<br>
<br>
<div id="opc">
		<form method="POST" action="">
<div class="caja">
			<label for="nro_sol_camb" class="label">Ingrese el numero de solicitud de cambio</label><br>
			<input type="text" name="nro_sol_camb" id="nro_sol_camb" class="input-text">
</div>
<br><br>
<div class="caja">
			<label for="cuit" class="label">Ingrese el numero de cuit del proveedor</label><br>
			<input type="text" name="cuit" id="cuit" class="input-text">
</div>
<br><br><!--
<div class="caja">
			<label for="modelo" class="label">Ingrese el modelo de la nueva maquina</label><br>
			<input type="text" name="modelo" id="modelo" class="input-text">
</div>
<br><br>
<div class="caja">
			<label for="fabricante" class="label">Ingrese el fabricante de la nueva maquina</label><br>
			<input type="text" name="fabricante" id="fabricante" class="input-text">
</div>
<br><br>
<div class="caja">
			<label for="periodo_garantia" class="label">Ingrese el periodo de garantia</label><br>
			<input type="text" name="periodo_garantia" id="periodo_garantia" class="input-text">
</div>
<br><br>
<div class="caja">
			<label for="periodo_mant" class="label">Ingrese el periodo de mantenimiento</label><br>
			<input type="text" name="periodo_mant" id="periodo_mant" class="input-text">
</div>
<br><br>
<div class="caja">
			<label for="resumen_de_uso" class="label">Ingrese resumen de uso de la maquina</label><br>
			<textarea id="resumen_de_uso" name="resumen_de_uso" class="input-text">
			</textarea>
</div><br><br>-->
			<a href="actualizaciones.php"  id="volver" class="button yellow hvr-radial-out">Volver</a>
			<input type="submit" value="Cambio concretado" class="button yellow hvr-radial-out" id="submit">
		</form>
	
	</div>
</html>