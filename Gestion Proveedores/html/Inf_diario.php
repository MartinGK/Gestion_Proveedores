<!-- ../html/Inf_diario.php -->
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
		<h2 id="mensaje_bienvenida">Informe de stock</h2>
<br>
<br>
		
	
	<div id="tablares">
		<table id="tabla" border="3px">
			<tr id="thead">
				<th>Codigo Producto</th>
				<th>Nombre Producto</th>
				<th>Stock</th>
				<th>Punto de reposicion</th>
				<th>Reponer</th>
			</tr>
<?php foreach($this->productos as $p) { ?>
			<tr>
				<td class="td"><?= $p["codigo_producto"] ?></td>
				<td class="td"><?= $p["nombre"] ?></td>
				<td class="td"><?= $p["stock"] ?></td>
				<td class="td"><?= $p["pto_reposicion"] ?></td>
				<td class="td"><?= $p["cantidad"] ?></td>
			</tr>
<?php } ?>
		</table>		<br>

	<div id="opc">
			<a href="informes.php"  id="volver" class="button yellow hvr-radial-out">Volver</a>
	</div>
 </div>
</html>