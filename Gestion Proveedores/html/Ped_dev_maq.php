<!--  //../html/Ped_dev_maq.php -->
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
		<h2 id="mensaje_bienvenida">Pedido de devolucion de maquina</h2>
<br>
<br>
		
	<!-- Botones Chicos -->
	<div id="opc">

		<form method="POST" action="">
		<div class="caja">
			<label for="nro_maquinaria" class="label">Ingrese numero de maquinaria</label><br>
			<input type="text" name="nro_maquinaria" id="nro_maquinaria" class="input-text">
		</div><br>
		<br><br>
		<div class="caja">
			<label for="motivo" class="label">Ingrese motivo del pedido</label><br>
			<textarea id="motivo" name="motivo" class="input-text">
			</textarea>
		</div><br><br><br>
			<a href="pedidos.php"  id="volver" class="button yellow hvr-radial-out">Volver</a>
			<input type="submit" value="Enviar pedido de devolucion" class="button yellow hvr-radial-out" id="submit">
		</form>
	
	</div>
</html>