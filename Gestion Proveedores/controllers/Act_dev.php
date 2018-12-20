<?php
//controllers/Act_dev.php
require '../fw/fw.php';
require '../models/Solicitudes.php';
require '../views/Act_dev.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$e = new Solicitudes;
if(isset($_POST["nro_sol_dev"]) ){
	if(!isset($_POST["nro_sol_dev"])) die("error en el numero de solicitud");
	if(!isset($_POST["cuit"])) die("error en el cuit");
	if(!isset($_POST["importe_neto"])) die("error en el importe");
	$e->Act_dev($_POST["nro_sol_dev"] , $_POST["cuit"],$_POST["importe_neto"]);
}


$v = new Act_dev;
$v->render();