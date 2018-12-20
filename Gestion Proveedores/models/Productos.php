<?php
//models/Productos.php
require_once '../models/Proveedores.php';

/**
* Clase para Productos
*
* @package Administracion_proveedores
* @author Martin Gainza <martingkoulak@gmail.com>
* @version 0.1
*/
class Productos extends Model {
	/**
	* Función que devuelve la informacion de los productos en stock.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @return array retorna un array con el conjunto de datos solicitados
	*/
	public function getInf_stock(){
			$this->db->query("SELECT * FROM productos");
			return $this->db->fetchAll();
	}
	/**
	* Función que realiza el calculo de la ultima pagina posible y la retorna.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @return int un int que representa la ultima pagina posible
	*/
	public function ultimaPagina(){
		$this->db->query("SELECT  COUNT(pr.codigo_producto) cantidad
							FROM productos_prov pp
							LEFT JOIN proveedores p ON p.cuit = pp.cuit
							LEFT JOIN productos pr ON pr.codigo_producto = pp.codigo_producto ");
		$fila = $this->db->fetch();
		return ceil($fila["cantidad"] / 15);
	}
	/**
	* Función que devuelve la informacion de los productos y sus precios por proveedor.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param int $MULT es un int que se utiliza para limitar la cantidad de productos a mostrar
	* @return array retorna un array con el conjunto de datos solicitados
	*/
	public function getInf_list_pre($MULT){
		if(!ctype_digit($MULT)) die("error de numero de pagina");
		if($MULT<1) die("error en el numero de pagina");
		$MIN = ($MULT-1) * 15;
		$this->db->query("	SELECT  pr.codigo_producto, pr.nombre, p.razon_social 'nombre_prov', p.cuit, pp.precio_producto
							FROM productos_prov pp
							LEFT JOIN proveedores p ON p.cuit = pp.cuit
							LEFT JOIN productos pr ON pr.codigo_producto = pp.codigo_producto
							ORDER BY p.razon_social
							LIMIT $MIN,15");
		return $this->db->fetchAll();
	}
	/**
	* Función que devuelve la informacion de los productos con stock menor al punto de reposicion.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @return array retorna un array con el conjunto de datos solicitados
	*/
	public function getInf_diario(){
		$this->db->query("	SELECT *, (p.pto_reposicion-p.stock) cantidad
							FROM productos p
							WHERE p.stock < p.pto_reposicion");
		return $this->db->fetchAll();
	}
	/**
	* Función que devuelve la informacion basica de los productos.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @return array retorna un array con el conjunto de datos solicitados
	*/
	public function getBasicInfo(){
		$this->db->query("SELECT codigo_producto, nombre
							FROM Productos");
		return $this->db->fetchAll();
	}
	/**
	* Función que devuelve el precio de un producto especifico.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param string $cuit string con el cuit de un proveedor 
	* @param int $codigo_producto int con el codigo del producto a buscar
	* @return array retorna un array con el conjunto de datos solicitados
	*/
	public function getInfo_precio($cuit,$codigo_producto){
		$this->db->query("SELECT precio_producto 
							FROM productos_prov pp 
							left join productos p on pp.codigo_producto = p.codigo_producto 
							where pp.cuit = '$cuit' AND pp.codigo_producto = $codigo_producto ");
		return $this->db->fetch();
	}
	/**
	* Función que suma al stock del producto la cantidad especificada.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param int $codigo_producto int con el codigo del producto a buscar
	* @param int $cantidad int con la cantidad a sumar 
	*/
	public function sumarStock($codigo_producto,$cantidad){
		$this->db->query("UPDATE productos
							SET stock = stock + $cantidad
							WHERE codigo_producto = $codigo_producto");
	}
	/**
	* Función que devuelve el nombre de un producto especifico.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param int $cod_prod int con el codigo del producto a buscar
	* @return string retorna un string con el nombre del producto
	*/
	public function getNom($cod_prod){
		$this->db->query("SELECT nombre
							FROM productos
							WHERE codigo_producto = $cod_prod");
		$p = $this->db->fetch();
		return $p["nombre"];
	}
	/**
	* Función que verifica que los datos enviados al carrito sean los correctos
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param int $cant int con la cantidad
	* @param int $cod int con el codigo del producto
	* @param string $cuit string con el cuit de un proveedor
	* @return bool retorna true si cumple con la verificacion o false si no
	*/
	public function VerifDatos_precarrito($cant,$cod,$cuit){
		if($cant<0) die("erro1");//return false;
		if(!ctype_digit($cant))  die("erro2");//return false;
		if($cod<1)  die("erro3");//return false;
		if(!ctype_digit($cod))  die("erro4");//return false;
		if(strlen($cuit)!=11)  die("erro5");//return false;
		$cuit = $this->db->escapeString($cuit);
		return true;
	}
}