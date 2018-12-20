<?php
//controllers/PaginaPrincipal.php
require '../fw/fw.php';
require '../views/PaginaPrincipal.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$ppal = new PaginaPrincipal();
$ppal->render();