<?php
//models/Proveedores.php
/**
* Clase para proveedores
*
* @package Administracion_proveedores
* @author Martin Gainza <martingkoulak@gmail.com>
* @version 0.1
*/
class Proveedores extends Model {
	/**
	* Función que devuelve la informacion del estado de cuenta de los proveedores.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @return array retorna un array con el conjunto de datos solicitados
	*/
	public function getInf_est_cue(){
		$this->db->query("SELECT pr.cuit, pr.razon_social, SUM(fc.importe_factura - p.importe_pago - nc.importe_nota_cred )'est_cuenta' 
							FROM proveedores pr
							LEFT JOIN notas_credito nc ON nc.cuit = pr.cuit
							LEFT JOIN factura_compra fc ON fc.cuit = pr.cuit
							LEFT JOIN pagos p ON p.cuit = pr.cuit
							GROUP BY CUIT");
		return $this->db->fetchAll();
	}
	/**
	* Función que devuelve la informacion basica de los proveedores.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @return array retorna un array con el conjunto de datos solicitados
	*/
	public function getBasicInfo(){
		$this->db->query("SELECT cuit, razon_social,email
							FROM Proveedores");
		return $this->db->fetchAll();
	}
	/**
	* Función que devuelve la razon social y el email de un proveedor en especifico.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param string $cuit string que contiene el cuit de un proveedor
	* @return array retorna un array con el conjunto de datos solicitados
	*/
	public function getInfo_prov($cuit){
		$this->db->query("SELECT razon_social, email FROM proveedores where cuit = $cuit");
		return $this->db->fetch();
	}
	/**
	* Función que devuelve la razon social de un proveedor en especifico.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param string $cuit string con el cuit del proveedor
	* @return string retorna un string con la razon social del proveedor con el cuit especificado 
	*/
	public function getRaz($cuit){
		$this->db->query("SELECT razon_social FROM proveedores where cuit = $cuit");
		$p = $this->db->fetch();
		return $p["razon_social"];
	}
}