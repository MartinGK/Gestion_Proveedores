<?php
//controllers/inf_diario.php
require '../fw/fw.php';
require '../models/Productos.php';
require '../views/Inf_diario.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$e = new Productos;
$inf_diario = $e->getInf_diario();

$v = new Inf_diario;
$v->productos = $inf_diario;	//LA VARIABLE PRODUCTOS TIENE QUE SER PUBLICA
$v->render();