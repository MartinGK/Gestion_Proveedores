<?php
//controllers/inf_ped.php
require '../fw/fw.php';
require '../models/Pedidos.php';
require '../views/Inf_ped.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$e = new Pedidos;
$v = new Inf_ped;
$v->ult_pag = $e->ultimaPagina();

if(isset($_GET["pag"])){
	if(!isset($_GET["pag"])) die("error en el numero de pagina");
	$inf_ped = $e->getInf_ped($_GET["pag"]);
	$v->pag = $_GET["pag"];
}else{
	$inf_ped = $e->getInf_ped('1');
	$v->pag = '1';
}

$v->pedidos = $inf_ped;	
$v->render();