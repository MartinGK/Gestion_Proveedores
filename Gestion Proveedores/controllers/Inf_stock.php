<?php
//controllers/inf_stock.php
require '../fw/fw.php';
require '../models/Productos.php';
require '../views/Inf_stock.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$e = new Productos;
$inf_stock = $e->getInf_stock();

$v = new Inf_stock;
$v->productos = $inf_stock;	//LA VARIABLE PRODUCTOS TIENE QUE SER PUBLICA
$v->render();