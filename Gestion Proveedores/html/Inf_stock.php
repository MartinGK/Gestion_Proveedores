<!-- //html/inf_stock.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Administracion de Proveedores</title>
	<link rel="stylesheet" type="text/css" href="../html/paginaprincipal.css">
	
</head>
	<body>
	<div class="background">
		<img id="background" src="../html/fondo.jpg" alt="fondo de pantalla">
	</div>
	</body>
		<nav id="navigation_top"><h3>Administracion de Proveedores</h3></nav><br><br>
	<br><br>	
		<h2 id="mensaje_bienvenida">Informe de stock</h2>
<br>
<br>
		
	
	<div id="tablares">
		<table id="tabla" border="3px">
			<tr id="thead">
				<th>Codigo Producto</th>
				<th>Nombre Producto</th>
				<th>Descripcion</th>
				<th>Precio de venta</th>
				<th>Stock</th>
				<th>Punto de reposicion</th>
			</tr>
<?php foreach($this->productos as $fila) { ?>
			<tr>
				<td class="td"><?= $fila["codigo_producto"] ?></td>
				<td class="td"><?= $fila["nombre"] ?></td>
				<td class="td"><?= $fila["descripcion_producto"] ?></td>
				<td class="td"><?= '$' . $fila["precio_venta"] ?></td>
				<td class="td"><?= $fila["stock"] ?></td>
				<td class="td"><?= $fila["pto_reposicion"] ?></td>
			</tr>
<?php } ?>
		</table>		<br>

	<div id="opc">
			<a href="informes.php"  id="volver" class="button yellow hvr-radial-out">Volver</a>
	</div>
 </div>
</html>