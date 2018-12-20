<?php //../controllers/login.php

require '../fw/fw.php';
require '../views/Login.php';
require '../models/Usuarios.php';

$login = new Login();
$usuario = new Usuarios();

$login->error = 0;

if(isset($_POST["nombre_usuario"]) || isset($_POST["password"])){
	if(!isset($_POST["nombre_usuario"])) die("Ingrese un nombre de usuario");
	if(!isset($_POST["password"])) die("Ingrese contraseña");
	if($usuario->ValidarConexion($_POST["nombre_usuario"],$_POST["password"])){
		$_SESSION["login"]=true;
		header("Location: PaginaPrincipal.php");
		exit;
	}else $login->error = 1;
}

if(isset($_SESSION["login"])){
		header("Location: PaginaPrincipal.php");
		exit;
}
else{
	$login->render();
}	