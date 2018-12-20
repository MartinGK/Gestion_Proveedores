<?php
// ../fw/database.php

/**
* Clase para la base de datos 
*
* @package Administracion_proveedores
* @author Martin Gainza <martingkoulak@gmail.com>
* @version 0.1
*/
class Database{
	private $res; 
	private $cn = false;
	private static $instance = false;
	/**
	* Funciónde getinstance.
	*
	* @return object $instance object que dice si esta activa o no
	*/
	public static function getInstance(){
		if(!self::$instance)self::$instance = new Database;
		return self::$instance;
	}
	/**
	* Función constructora de la base de datos.
	*/
	private function __contruct(){ }
	/**
	* Función que conecta a la base de datos.
	*/
	private function connect(){
		$this->cn = mysqli_connect("localhost","root","","adm_proveedores");
	}
	/**
	* Función que gestiona las consultas.
	*
	* @param string $q string que contiene la consulta a realizarse
	*/
	public function query($q){
		if(!$this->cn)$this->connect();
		$this->res = mysqli_query($this->cn,$q);
		if(mysqli_error($this->cn) != ""){
			die("Error consulta $q -- " . mysqli_error($this->cn) );
		}			
	}
	/**
	* Función que devuelve el resultado de las consultas.
	*
	* @return array retorna un array con el resultado de la consulta en la base de datos
	*/
	public function fetch(){
		return mysqli_fetch_assoc($this->res);
	}
	/**
	* Función que devuelve la cantidad de filas la ultima consulta.
	*
	* @return int retorna un int con la cantidad de filas de la ultima consulta.
	*/
	public function numRows(){
		return mysqli_num_rows($this->res);
	}
	/**
	* Función que devuelve todos los resultados de las consultas.
	*
	* @return array retorna un array con todos los resultado de la consulta en la base de datos
	*/
	public function fetchAll(){
		$aux = array();
		while($fila=$this->fetch()) $aux [] = $fila;
		return $aux;	// ESTO ME PERMITE HACER UN FOREACH
	}
	/**
	* Función que escapa las comillas de los string.
	*
	* @param string $str string al que se le tiene que escapar las comillas
	* @return string retorna el string con las comillas escapadas
	*/
	public function escapeString($str){
		if(!$this->cn)$this->connect();
		return mysqli_escape_string($this->cn,$str);
	}
	/**
	* Función que devuelve el ultimo id del ultimo insert.
	*
	* @return int retorna un int con el ultimo id del ultimo insert
	*/
	public function UltimoId(){
		return mysqli_insert_id($this->cn);
	}
}