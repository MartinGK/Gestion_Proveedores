<?php
//controllers/inf_cro_maq.php
require '../fw/fw.php';
require '../models/Maquinarias.php';
require '../views/Inf_cro_maq.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$m = new Maquinarias;
$inf_cro_maq = $m->getInf_cro_maq();

$v = new Inf_cro_maq;
$v->maquinarias = $inf_cro_maq;	//LA VARIABLE PRODUCTOS TIENE QUE SER PUBLICA
$v->render();