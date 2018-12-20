<?php
//models/Maquinarias.php

/**
* Clase para Maquinarias
*
*@package Administracion_proveedores
*@author Martin Gainza <martingkoulak@gmail.com>
*@version 0.1
*/
class Maquinarias extends Model {
	/**
	* Función que devuelve la informacion de los cronogramas de las maquinarias.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @return array retorna un array con el conjunto de datos solicitados
	*/
	public function getInf_cro_maq(){
		$this->db->query("	SELECT  *
							FROM maquinarias
							left join proveedores ON proveedores.cuit = maquinarias.cuit");
		return $this->db->fetchAll();
	}
	/**
	* Función que devuelve la informacion de una maquinaria en especifico.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param int $nro_maq int con el numero de maquinaria
	* @return array retorna un array con el conjunto de datos solicitados
	*/
	public function getInfo_maq($nro_maq){
		$this->db->query("SELECT * FROM maquinarias where nro_maquinaria = $nro_maq");
		if($this->db->numRows() != 1) die("error en el numero de maquinaria");
		return $this->db->fetch();
	}
	/**
	* Función que verifica y realiza la actualización de un retiro de maquinaria.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param int $nro_maq int con un numero de maquinaria
	* @param int $nro_sol_rep int con un numero de solicitud reparación
	* @param string $cuit string con el cuit del proveedor al que se le realizo la solicitud
	*/
	public function Act_ret_maq($nro_maq,$nro_sol_rep,$cuit){
		if(!ctype_digit($nro_sol_rep)) die("error de solicitud");
		if(!ctype_digit($nro_maq)) die("error de numero de maquina");
		if(strlen($cuit)!=11) die("el cuit es erroneo");
		$cuit = $this->db->escapeString($cuit);
		$this->db->query("SELECT * FROM solicitud_reparacion
							WHERE nro_sol_rep = $nro_sol_rep
							AND cuit = $cuit
							AND nro_maquinaria = $nro_maq");
		if($this->db->numRows()!=1) die("No existe la solicitud");
		$datos_sol = $this->db->fetch();
		if($datos_sol["estado_sol"]=='Resuelta') die("La solicitud ya esta resuelta");
		$this->db->query("UPDATE maquinarias
							SET estado_maq = 'Retirada'
							WHERE nro_maquinaria = $nro_maq");
	}
	/**
	* Función que cambia el estado de una maquinaria en especifico.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param string $estado string que contiene el nuevo estado de la maquinaria
	* @param int $nro_maq int que contiene el numero de maquinaria
	*/
	public function nuevoEstadoMaq($estado,$nro_maq){
		$this->db->query("UPDATE maquinarias
							SET estado_maq = '$estado'
							WHERE nro_maquinaria = $nro_maq");
	}
	/**
	* Función que registra un nuevo mantenimiento.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param date $ult date que contiene la fecha del ultimo mantenimiento
	* @param date $prox date que contiene la fecha del proximo mantenimiento
	* @param int $nro_maq int que contiene el numero de maquinaria
	*/
	public function nuevoMantenimiento($ult,$prox,$nro_maq){
		$this->db->query("UPDATE Maquinarias
							SET ultimo_mant = '$ult', proximo_mant = '$prox'
							WHERE nro_maquinaria = $nro_maq");
	}
	/**
	* Función que registra una nueva maquinaria.
	*
	* Si hay dudas sobre la herencia, chequear {@link Model la clase madre}.
	*
	* @param string $modelo string que contiene el modelo de la maquinaria
	* @param string $fabricante string que contiene el fabricante de la maquinaria
	* @param string $periodo_garantia string que contiene el periodo de garantia
	* @param string $resumen_de_uso string que contiene el resumen de uso
	* @param string $estado_maq string que contiene el estado de la maquinaria
	* @param date $ultimo_mant date que contiene el ultimo mantenimiento
	* @param date $proximo_mant date que contiene el proximo mantenimiento
	* @param string $periodo_mant string que contiene el periodo de mantenimiento
	* @param string $cuit string que contiene el cuit del proveedor
	* @param int $codigo_producto int que contiene el codigo del producto
	*/
	public function nuevaMaquinaria($modelo, $fabricante, $periodo_garantia, $resumen_de_uso, $estado_maq, $ultimo_mant, $proximo_mant,
		$periodo_mant,$cuit,$codigo_producto){
		$this->db->query("INSERT INTO maquinarias(nro_maquinaria, modelo, fabricante, periodo_garantia, resumen_de_uso, estado_maq, 				ultimo_mant, proximo_mant, periodo_mant, cuit, codigo_producto)
							VALUES (null,'$modelo', '$fabricante', '$periodo_garantia', '$resumen_de_uso', '$estado_maq',			
							'$ultimo_mant', '$proximo_mant', '$periodo_mant', '$cuit', $codigo_producto)");
	}
}