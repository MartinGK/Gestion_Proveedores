<?php
//controllers/Act_con_camb.php
require '../fw/fw.php';
require '../models/Solicitudes.php';
require '../views/Act_con_camb.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$e = new Solicitudes;
if(isset($_POST["nro_sol_camb"]) ){
	if(!isset($_POST["nro_sol_camb"])) die("error en el numero de solicitud");
	if(!isset($_POST["cuit"])) die("error en el cuit");
	$e->Act_con_camb($_POST["nro_sol_camb"] , $_POST["cuit"]);
}

$v = new Act_con_camb;
$v->render();