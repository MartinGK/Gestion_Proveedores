<?php
//controllers/Ped_dev_maq.php
require '../fw/fw.php';
require '../models/Solicitudes.php';
require '../views/Ped_dev_maq.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$e = new Solicitudes;
if(isset($_POST["nro_maquinaria"])){
	if(!isset($_POST["motivo"])) die("error falta motivo");
	if(!isset($_POST["nro_maquinaria"]) ) die("error falta numero de maquinaria");
	$e->Ped_dev_maq($_POST["nro_maquinaria"],$_POST["motivo"]);
}
//aca tendria que ir el insert o variante

$v = new Ped_dev_maq;
$v->render();