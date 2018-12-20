<?php
//models/Notas_credito.php

/**
* Clase para Notas credito
*
*@package Administracion_proveedores
*@author Martin Gainza <martingkoulak@gmail.com>
*@version 0.1
*/
class Notas_credito extends Model {
	/**
	* Función que agrega una nueva nota de credito
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param string $cuit string con el cuit del proveedor 
	* @param float $importe_neto float con el importe neto entregado por el proveedor
	* @param int $nro_sol_dev int con el numero de solicitud de devolucion
	*/
	public function nuevaNota($cuit,$importe_neto,$nro_sol_dev){
		$hoy = date("Y-m-d");
		$this->db->query("INSERT INTO notas_credito(nro_nota_cred, cuit, fecha_nota_cred, importe_nota_cred, nro_sol_dev) 
							VALUES (null,'$cuit','$hoy',$importe_neto,$nro_sol_dev)");
	}
}