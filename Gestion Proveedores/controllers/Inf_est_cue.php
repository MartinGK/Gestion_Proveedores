<?php
//controllers/Inf_est_cue.php.php
require '../fw/fw.php';
require '../models/Proveedores.php';
require '../views/Inf_est_cue.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

$pr = new Proveedores;
$inf_est_cue = $pr->getInf_est_cue();

$v = new Inf_est_cue;
$v->proveedores = $inf_est_cue;
$v->render();