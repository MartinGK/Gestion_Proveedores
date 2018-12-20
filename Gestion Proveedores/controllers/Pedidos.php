<?php
//controllers/Act_con_maq.php
require '../fw/fw.php';
//require '../models/Pedidos_r.php';
require '../views/Pedidos.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

//$e = new Pedidos_r;
//aca tendria que ir el insert o variante

$v = new Pedidos;
$v->render();