<?php
//controllers/informes.php
require '../fw/fw.php';
require '../views/Informes.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$v = new Informes;
$v->render();