<?php
//controllers/Act_nue_merc.php
require '../fw/fw.php';
require '../models/Pedidos.php';
require '../views/Act_nue_merc.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$p = new Pedidos;
if(isset($_POST["nro_pedido"]) ){
	if(!isset($_POST["nro_pedido"])) die("error en el numero de pedido");
	if(!isset($_POST["cuit"])) die("error en el cuit");
	$p->Act_nue_merc($_POST["nro_pedido"] , $_POST["cuit"]);
}
$v = new Act_nue_merc();
$v->render();