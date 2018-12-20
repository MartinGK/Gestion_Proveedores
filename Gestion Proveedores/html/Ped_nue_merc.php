<!-- //../html/Ped_nue_merc.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Administracion de Proveedores</title>
	<link rel="stylesheet" type="text/css" href="../html/paginaprincipal.css">
	<script src="../html/Javascript.js"></script>
</head>
	<body>
	<div class="background">
		<img id="background" src="../html/fondo.jpg">
	</div>
	<div id="carrito">		
		<a href="#mostrarCarrito"><img id="carrito" src="../html/carrito.png"></a>
	</div>
	</body>
		<nav id="navigation_top"><h3>Administracion de Proveedores</h3></nav><br><br>
		
		<h2 id="mensaje_bienvenida">Pedido de nueva mercaderia</h2>		
	
	<div id="tablares">
		<table class="tabla" border="3px">
			<tr id="thead">
				<th>Nombre del producto</th>
				<th>Razon social del proveedor</th>
				<th>Cuit del proveedor</th>
				<th>Precio del producto</th>
				<th>Cantidad</th>
				<th>Precio por cantidad</th>
			</tr>
<?php foreach($this->productos as $e) { ?>
			<tr>
				<td class="td"><?= $e["nombre"] ?></td>
				<td class="td"><?= $e["nombre_prov"] ?></td>
				<td class="td"><?= $e["cuit"] ?></td>
				<td class="td"><?= '$' . $e["precio_producto"] ?></td>
				<td class="td" id="cant_num">
				<span id="menos" onclick="restar(<?=$e["codigo_producto"].", ".$e["cuit"] .", " . $e["precio_producto"]?>)">-</span>
				<span id="cantidad_<?=$e["codigo_producto"].'_'.$e["cuit"]?>">0</span>
				<span id="mas" onclick="sumar(<?=$e["codigo_producto"].", ".$e["cuit"].", " . $e["precio_producto"]?>)">+</span>
				</td>
				<td class="td" id="precio_cant_<?=$e['codigo_producto'].'_'.$e['cuit']?>">$0</td>
			</tr>
<?php } ?>
		</table>
	<div id="opc">
	<div class="caja"><?php if($this->pag == 1){ ?>
		<a href="Ped_nue_merc.php?pag=1" class="paginadores"><<</a>
		<a href="Ped_nue_merc.php?pag=<?= $this->pag ?>" class="paginadores" id="pag_ubic"><?= $this->pag?></a>
		<a href="Ped_nue_merc.php?pag=<?= $this->pag + 1 ?>" class="paginadores"><?= $this->pag + 1 ?></a>
		<a href="Ped_nue_merc.php?pag=<?= $this->ult_pag ?>" class="paginadores">>></a>
	<?php }elseif($this->pag == $this->ult_pag){ ?>
		<a href="Ped_nue_merc.php?pag=1" class="paginadores"><<</a>
		<a href="Ped_nue_merc.php?pag=<?= $this->pag - 1 ?>" class="paginadores"><?= $this->pag - 1 ?></a>
		<a href="Ped_nue_merc.php?pag=<?= $this->ult_pag ?>" class="paginadores" id="pag_ubic"><?= $this->ult_pag ?></a>
		<a href="Ped_nue_merc.php?pag=<?= $this->ult_pag ?>" class="paginadores">>></a>
	<?php } else{ ?>
		<a href="Ped_nue_merc.php?pag=1" class="paginadores"><<</a>
		<a href="Ped_nue_merc.php?pag=<?= $this->pag - 1 ?>" class="paginadores"><?= $this->pag - 1 ?></a>
		<a href="Ped_nue_merc.php?pag=<?= $this->pag ?>" class="paginadores" id="pag_ubic"><?= $this->pag ?></a>
		<a href="Ped_nue_merc.php?pag=<?= $this->pag + 1 ?>" class="paginadores"><?= $this->pag + 1 ?></a>
		<a href="Ped_nue_merc.php?pag=<?= $this->ult_pag ?>" class="paginadores">>></a>
	<?php } ?>
	</div>
	
		<form method="POST" action="" id="form_carrito">
<?php foreach($this->productos as $e) { ?>
			<input type="hidden" id="pedido_<?=$e["codigo_producto"].'_'.$e["cuit"]?>"
			name="pedido_<?=$e["codigo_producto"].'_'.$e["cuit"]?>" value="0">
<?php } ?>
			<input type="hidden" name="pagina" value="<?= $this->pag ?>">
			<a href="Pedidos.php"  id="volver" class="button yellow hvr-radial-out">Volver</a>
			<input type="submit" value="Agregar al carrito" class="button yellow hvr-radial-out" id="submit">
		</form>
</div>

 </div>

<!--ACA VAN LOS DATOS DEL CARRITO-->
	<div id="mostrarCarrito" class="verCarrito" >
		<div>
			<a href="#" class="close">X</a>
			<h1>Lista de productos</h1>

<table class="tabla_azul" border="3px">
			<tr class="thead_azul">
				<th>Nombre del producto</th>
				<th>Razon social del proveedor</th>
				<th>Cantidad</th>
				<th>Costo total</th>
			</tr>
		<?php foreach($this->carrito as $pr){ $this->costo_total = $this->costo_total + $pr["total"]; ?>
			<tr>
				<td class="td_azul"><?= $pr["nombre"] ?></td>
				<td class="td_azul"><?= $pr["razon_social"] ?></td>
				<td class="td_azul"><?= $pr["cant"] ?></td>
				<td class="td_azul"><?= '$' . $pr["total"] ?></td>
				<td class="td_azul"><a class="eliminar" href="Ped_nue_merc.php?cuit=<?=$pr['cuit']?>&cod=<?=$pr['cod']?>">Eliminar</a></td>
			</tr>
		<?php } ?>
		</table>
<h3>El costo final es de: $<?=$this->costo_total?></h3>
<form action="Ped_nue_merc.php" method="POST">
	<input type="hidden" name="Enviar_pedido" value="1">
	<input type="submit" value="Enviar pedido" class="button yellow hvr-radial-out" id="submit">
</form>
		</div>
	</div>

</html>