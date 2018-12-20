<!-- //../html/Inf_est_cue.php -->
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
		<h2 id="mensaje_bienvenida">Informe de estado de cuenta de proveedores</h2>
<br>
<br>
	<div id="tablares">
		<table id="tabla" border="3px">
			<tr id="thead">
				<th>Razon Social</th>
				<th>Cuit</th>
				<th>Estado de cuenta</th>
			</tr>
<?php foreach($this->proveedores as $pr) { ?>
			<tr>
				<td class="td"><?= $pr["razon_social"] ?></td>
				<td class="td"><?= $pr["cuit"] ?></td>
				<?php if($pr["est_cuenta"] == null) $pr["est_cuenta"] = 0; ?>
				<td class="td"><?= '$' . $pr["est_cuenta"] ?></td>
			</tr>
<?php } ?>
		</table>		<br>

	<div id="opc">
			<a href="informes.php"  id="volver" class="button yellow hvr-radial-out">Volver</a>
	</div>
 </div>
</html>