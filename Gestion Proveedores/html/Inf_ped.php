<!--  //../html/inf_ped.php -->
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
		<h2 id="mensaje_bienvenida">Informe de pedidos realizados</h2>

	<div id="tablares">
		<table id="tabla" border="3px">
			<tr id="thead">
				<th>Numero de pedido</th>
				<th>Fecha del pedido</th>
				<th>Cuit del proveedor</th>
				<th>Nombre del producto</th>
				<th>Cantidad solicitada</th>
				<th>Importe a pagar</th>
				<th>Estado del pedido</th>
			</tr>
<?php foreach($this->pedidos as $fila) { //HAY QUE CAMBIAR EL COSTO TOTAL POR EL VERDADERO ?>
			<tr>
				<td class="td"><?= $fila["nro_pedido"] ?></td>
				<td class="td"><?= $fila["fecha"] ?></td>
				<td class="td"><?= $fila["cuit"] ?></td>
				<td class="td"><?= $fila["nombre"] ?></td>
				<td class="td"><?= $fila["cantidad"] ?></td>
				<td class="td"><?= '$' . $fila["costo_total"] ?></td>
				<td class="td"><?=$fila["estado_pedido"] ?></td>
			</tr>
<?php } ?>
		</table>
	<div id="opc">
	<div class="caja"><?php if($this->pag == 1){ ?>
		<a href="Inf_ped.php?pag=1" class="paginadores"><<</a>
		<a href="Inf_ped.php?pag=<?= $this->pag ?>" class="paginadores" id="pag_ubic"><?= $this->pag?></a>
		<a href="Inf_ped.php?pag=<?= $this->pag + 1 ?>" class="paginadores"><?= $this->pag + 1 ?></a>
		<a href="Inf_ped.php?pag=<?= $this->ult_pag ?>" class="paginadores">>></a>
	<?php }elseif($this->pag == $this->ult_pag){ ?>
		<a href="Inf_ped.php?pag=1" class="paginadores"><<</a>
		<a href="Inf_ped.php?pag=<?= $this->pag - 1 ?>" class="paginadores"><?= $this->pag - 1 ?></a>
		<a href="Inf_ped.php?pag=<?= $this->ult_pag ?>" class="paginadores" id="pag_ubic"><?= $this->ult_pag ?></a>
		<a href="Inf_ped.php?pag=<?= $this->ult_pag ?>" class="paginadores">>></a>
	<?php } else{ ?>
		<a href="Inf_ped.php?pag=1" class="paginadores"><<</a>
		<a href="Inf_ped.php?pag=<?= $this->pag - 1 ?>" class="paginadores"><?= $this->pag - 1 ?></a>
		<a href="Inf_ped.php?pag=<?= $this->pag ?>" class="paginadores" id="pag_ubic"><?= $this->pag ?></a>
		<a href="Inf_ped.php?pag=<?= $this->pag + 1 ?>" class="paginadores"><?= $this->pag + 1 ?></a>
		<a href="Inf_ped.php?pag=<?= $this->ult_pag ?>" class="paginadores">>></a>
	<?php } ?>
	</div><br>
	<a href="informes.php"  id="volver" class="button yellow hvr-radial-out">Volver</a>
	</div>
 </div>
</html>