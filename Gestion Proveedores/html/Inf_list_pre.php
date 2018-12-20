<!-- //../html/inf_list_pre.php -->
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
		<h2 id="mensaje_bienvenida">Informe de lista de precios de los productos</h2>
		

	<div id="tablares">
		<table id="tabla" border="3px">
			<tr id="thead">
				<th>Nombre del producto</th>
				<th>Razon social del proveedor</th>
				<th>Cuit del proveedor</th>
				<th>Precio del producto</th>
			</tr>
<?php foreach($this->productos as $e) { ?>
			<tr>
				<td class="td"><?= $e["nombre"] ?></td>
				<td class="td"><?= $e["nombre_prov"] ?></td>
				<td class="td"><?= $e["cuit"] ?></td>
				<td class="td"><?= '$' . $e["precio_producto"] ?></td>
			</tr>
<?php } ?>
		</table>
	<div id="opc">
	<div class="caja"><?php if($this->pag == 1){ ?>
		<a href="inf_list_pre.php?pag=1" class="paginadores"><<</a>
		<a href="inf_list_pre.php?pag=<?= $this->pag ?>" class="paginadores" id="pag_ubic"><?= $this->pag?></a>
		<a href="inf_list_pre.php?pag=<?= $this->pag + 1 ?>" class="paginadores"><?= $this->pag + 1 ?></a>
		<a href="inf_list_pre.php?pag=<?= $this->ult_pag ?>" class="paginadores">>></a>
	<?php }elseif($this->pag == $this->ult_pag){ ?>
		<a href="inf_list_pre.php?pag=1" class="paginadores"><<</a>
		<a href="inf_list_pre.php?pag=<?= $this->pag - 1 ?>" class="paginadores"><?= $this->pag - 1 ?></a>
		<a href="inf_list_pre.php?pag=<?= $this->ult_pag ?>" class="paginadores" id="pag_ubic"><?= $this->ult_pag ?></a>
		<a href="inf_list_pre.php?pag=<?= $this->ult_pag ?>" class="paginadores">>></a>
	<?php } else{ ?>
		<a href="inf_list_pre.php?pag=1" class="paginadores"><<</a>
		<a href="inf_list_pre.php?pag=<?= $this->pag - 1 ?>" class="paginadores"><?= $this->pag - 1 ?></a>
		<a href="inf_list_pre.php?pag=<?= $this->pag ?>" class="paginadores" id="pag_ubic"><?= $this->pag ?></a>
		<a href="inf_list_pre.php?pag=<?= $this->pag + 1 ?>" class="paginadores"><?= $this->pag + 1 ?></a>
		<a href="inf_list_pre.php?pag=<?= $this->ult_pag ?>" class="paginadores">>></a>
	<?php } ?>
	</div><br>
			<a href="informes.php"  id="volver" class="button yellow hvr-radial-out">Volver</a>
	</div>
 </div>
</html>