<!-- ../html/Inf_cro_maq.php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
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
		<h2 id="mensaje_bienvenida">Informe del cronograma de mantenimiento de las maquinas</h2>
<br>
<br>
		
	
	<div id="tablares">
		<table id="tabla" border="3px">
			<tr id="thead">
				<th>Numero de maquinaria</th>
				<th>Modelo de la maquinaria</th>
				<th>Ultimo mantenimiento</th>
				<th>Periodo mantenimiento</th>
				<th>Proximo mantenimiento</th>
				<th>Proveedor encargado</th>
				<th>Estado actual</th>
			</tr>
<?php foreach($this->maquinarias as $m) { ?>
			<tr>
				<td class="td"><?= $m["nro_maquinaria"] ?></td>
				<td class="td"><?= $m["modelo"] ?></td>
				<td class="td"><?= $m["ultimo_mant"] ?></td>
				<td class="td"><?= $m["periodo_mant"] ?></td>
				<td class="td"><?= $m["proximo_mant"] ?></td>
				<td class="td"><?= $m["razon_social"] ?></td>
				<td class="td"><?= $m["estado_maq"] ?></td>
			</tr>
<?php } ?>
		</table>		<br>

	<div id="opc">
			<a href="informes.php"  id="volver" class="button yellow hvr-radial-out">Volver</a>
	</div>
 </div>
</html>