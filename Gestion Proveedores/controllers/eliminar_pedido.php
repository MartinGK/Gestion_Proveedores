<?php
//controllers/eliminar_pedido.php
require '../fw/fw.php';

if(isset($_GET["cuit"])){
if(!isset($_GET["cuit"])) die("error cuit");
if(strlen($_GET["cuit"])!=11) die("error cuit");
$cuit = $this->db->escapeString($_GET["cuit"]);

if(!isset($_GET["cod"])) die("error cuit");
if(!isset($_GET["cod"])) die("error cuit");
if(!isset($_GET["cod"])) die("error cuit");
}

foreach ($_SESSION["carrito"] as $key => $pedido) {
	if($pedido["cuit"]==$cuit && $pedido["cod"]==$cod){
		$elim=$key;

	}
		var_dump($key);
		echo "<p>separador 1</p>";
		var_dump($value);
		echo "<p>separador 2</p>";

	}

if(isset($elim)) unset($_SESSION["carrito"][$elim]);