<?php
//controllers/Act_ret_maq.php
require '../fw/fw.php';
require '../models/Maquinarias.php';
require '../views/Act_ret_maq.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$e = new Maquinarias;
if(isset($_POST["nro_sol_rep"])){
	if(!isset($_POST["nro_sol_rep"])) die("error en el numero de solicitud");
	if(!isset($_POST["nro_maquina"])) die("error en el numero de maquinaria");
	if(!isset($_POST["cuit"])) die("error en el cuit");
	$e->Act_ret_maq($_POST["nro_maquina"],$_POST["nro_sol_rep"] , $_POST["cuit"]);
}

$v = new Act_ret_maq;
$v->render();