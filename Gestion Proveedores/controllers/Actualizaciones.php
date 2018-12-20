<?php
//controllers/Actualizaciones.php.php
require '../fw/fw.php';
require '../views/Actualizaciones.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$v = new Actualizaciones;
$v->render();