<?php
//controllers/Act_nue_mant.php
require '../fw/fw.php';
require '../models/Solicitudes.php';
require '../views/Act_nue_mant.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$e = new Solicitudes;
if(isset($_POST["nro_sol_mant"]) ){
	if(!isset($_POST["nro_sol_mant"])) die("error en el numero de solicitud");
	if(!isset($_POST["cuit"])) die("error en el cuit");
	$e->Act_nue_mant($_POST["nro_sol_mant"] , $_POST["cuit"]);
}

$v = new Act_nue_mant;
$v->render();