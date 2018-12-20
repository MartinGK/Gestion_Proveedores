<?php
//controllers/Ped_nue_merc.php
require '../fw/fw.php';
require '../models/Pedidos.php';
require_once '../models/Proveedores.php';
require '../views/Ped_nue_merc.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$v = new Ped_nue_merc;
$e = new Productos;

$p = new Pedidos;

if(isset($_POST["Enviar_pedido"])){
	if(!isset($_POST["Enviar_pedido"]))die("error9");
	$p->enviarPedidos($_POST["Enviar_pedido"]);
}

if(!isset($_SESSION['carrito'])) $_SESSION['carrito']  = array();

$v->ult_pag = $e->ultimaPagina();

if(isset($_GET["pag"])){
	if(!isset($_GET["pag"])) die("error en el numero de pagina");
	$ped_nue_merc = $e->getInf_list_pre($_GET["pag"]);
	$v->pag = $_GET["pag"];
}else{
	$ped_nue_merc = $e->getInf_list_pre('1');
	$v->pag = '1';
}
if(isset($_POST["pagina"])){
	if(!isset($_POST["pagina"])) die("error en el numero de pagina");
	$prod_prov = $e->getInf_list_pre($_POST["pagina"]);
	foreach($prod_prov as $pp){
		if(isset($_POST["pedido_" .$pp["codigo_producto"] .'_'.$pp["cuit"]])){
			if(!$e->VerifDatos_precarrito($_POST["pedido_" . $pp["codigo_producto"] .'_'.$pp["cuit"] ],$pp["codigo_producto"],$pp["cuit"]))die("error en el carrito");
			$cant = $_POST["pedido_" . $pp["codigo_producto"] .'_'.$pp["cuit"] ];
			if ($cant>0){
				$nom=$e->getNom($pp["codigo_producto"]);
				$razon_social = (new Proveedores)->getRaz($pp["cuit"]);
				$precio = $e->getInfo_precio($pp["cuit"],$pp["codigo_producto"]);
				$total = $precio["precio_producto"] * $cant;
				$_SESSION["carrito"][] = array("nombre"=>$nom,"cod"=>$pp["codigo_producto"],"cuit"=>$pp["cuit"],"razon_social"=>$razon_social,"cant"=>$_POST["pedido_" . $pp["codigo_producto"] .'_'.$pp["cuit"] ], "total"=>$total);
			}
		}
	}	
}

if(isset($_GET["cuit"])){
	if(!isset($_GET["cuit"]))die("no hay cuit");
	if(!isset($_GET["cod"]))die("no hay codigo");
	$p->eliminarPedido($_GET["cuit"],$_GET["cod"]);
	header("Location: ped_nue_merc.php#mostrarCarrito");
	exit;
}


if(!isset($_SESSION['carrito'])) $_SESSION['carrito']  = array();
$v->carrito = $_SESSION['carrito'];
$v->productos = $ped_nue_merc;
$v->render();