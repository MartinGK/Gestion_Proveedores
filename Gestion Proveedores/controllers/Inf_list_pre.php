<?php
//controllers/inf_list_pre.php
require '../fw/fw.php';
require '../models/Productos.php';
require '../views/Inf_list_pre.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
$v = new Inf_list_pre;
$e = new Productos;

$v->ult_pag = $e->ultimaPagina();

if(isset($_GET["pag"])){
	if(!isset($_GET["pag"])) die("error en el numero de pagina");
	$inf_list_pre = $e->getInf_list_pre($_GET["pag"]);
	$v->pag = $_GET["pag"];
}else{
	$inf_list_pre = $e->getInf_list_pre('1');
	$v->pag = '1';
}

$v->productos = $inf_list_pre;
$v->render();