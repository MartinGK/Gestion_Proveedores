<?php
//controllers/Act_con_maq.php
require '../fw/fw.php';
require '../models/Solicitudes.php';
require '../views/Act_con_maq.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$e = new Solicitudes;
if(isset($_POST["nro_sol_rep"]) ){
	if(!isset($_POST["nro_sol_rep"])) die("error en el numero de solicitud");
	if(!isset($_POST["cuit"])) die("error en el cuit");
	$e->Act_con_maq($_POST["nro_sol_rep"] , $_POST["cuit"]);
}

$v = new Act_con_maq;
$v->render();