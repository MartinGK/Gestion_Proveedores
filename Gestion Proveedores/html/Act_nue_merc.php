<!-- //../html/Act_nue_merc.php -->
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
		<h2 id="mensaje_bienvenida">Actualizacion: Ingreso de nueva mercaderia</h2>
<br>
<div id="opc">

<form method="POST" action="">
<div class="caja">
			<label for="nro_pedido" class="label">Ingrese el numero de pedido</label><br>
			<input type="text" name="nro_pedido" id="nro_pedido" class="input-text">
</div>
<br><br>
<div class="caja">
			<label for="cuit" class="label">Ingrese el numero de cuit del proveedor</label><br>
			<input type="text" name="cuit" id="cuit" class="input-text">
</div>
<br><br>

<!--
<div class="caja">
			<label for="codigo_producto" class="label">Seleccione el producto recibido</label><br>
			<select name="codigo_producto" id="codigo_producto" class="input-text">
				<?php foreach($this->productos as $p) { ?>
					<option value="<?= $p['codigo_producto'] ?>"><?= $p["nombre"] ?></option>
				<?php } ?>
			</select>
</div>
<br><br>
<div class="caja">
			<label for="cuit" class="label">Seleccione el proveedor</label><br>
			<select name="cuit" id="cuit" class="input-text">
				<?php foreach($this->proveedores as $pr) { ?>
					<option value="<?= $pr['cuit'] ?>"><?= $pr["razon_social"] ?></option>
				<?php } ?>
			</select>
</div>
<br><br>
<div class="caja">
			<label for="cantidad" class="label">Ingrese la cantidad recibida</label><br>
			<input type="text" name="cantidad" id="cantidad" class="input-text">
</div>
<br><br>-->
<!--
	<div id="opc">
		<form method="POST" action="">
<div class="caja">
			<label for="codigo_producto" class="label">Ingrese codigo del producto</label><br>
			<input type="text" name="codigo_producto" id="codigo_producto" class="input-text">
</div>
<br><br>
<div class="caja">
			<label for="nombre" class="label">Ingrese el nombre del producto</label><br>
			<input type="text" name="nombre" id="nombre" class="input-text">
</div>
<br><br>
<div class="caja">
			<label for="motivo" class="label">Ingrese una descripcion del producto</label><br>
			<textarea id="motivo" name="motivo" class="input-text">
			</textarea>
		</div><br>
<br><br>
<div class="caja">
			<label for="precio_venta" class="label">Ingrese el precio de venta</label><br>
			<input type="text" name="precio_venta" id="precio_venta" class="input-text">
</div>
<br><br>
<div class="caja">
			<label for="pto_reposicion" class="label">Ingrese el punto de reposicion</label><br>
			<input type="text" name="pto_reposicion" id="pto_reposicion" class="input-text">
</div>-->

			<a href="actualizaciones.php"  id="volver" class="button yellow hvr-radial-out">Volver</a>
			<input type="submit" value="Registrar nueva mercaderia" class="button yellow hvr-radial-out" id="submit">
		</form>
	
	</div>
</html>