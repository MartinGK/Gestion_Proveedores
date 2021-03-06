<?php
//models/Usuarios.php

/**
* Clase para Usuarios
*
* @package Administracion_proveedores
* @author Martin Gainza <martingkoulak@gmail.com>
* @version 0.1
*/
class Usuarios extends Model {
	/**
	* Función que valida la conexion de un usuario.
	*
	* @param string $user string con el nombre de usuario
	* @param string $pass string con la contraseña del usuario
	* @return bool retorna true o false
	*/
	public function ValidarConexion($user,$pass){	
		$user = $this->db->escapeString($_POST["nombre_usuario"]);
		if(strlen($user)<3 || strlen($user)>15) die("error en la longitud del nombre de usuario");
		$pass = $this->db->escapeString($_POST["password"]);
		$pass = sha1($pass);
		return $this->conexion($user,$pass);
	}
	/**
	* Función que verifica la existencia de un usuario y contraseña.
	*
	* @param string $user string con el nombre de usuario
	* @param string $pass string con la contraseña del usuario
	* @return bool retorna true si existe o false si no existe
	*/
	public function conexion($user,$pass){
		$this->db->query("SELECT *
							FROM usuarios
							WHERE nombre_usuario='$user' 
							AND password= '$pass' ");
		if ($this->db->numRows()==1){
			return true;
		}
		return false;
	}
	/**
	* Función que devuelve los datos del contador.
	*
	* @return array retorna un array con el conjunto de datos solicitados
	*/
	public function getInfoCont(){
		$this->db->query("SELECT * FROM usuarios where cargo_id = 2");
		return $this->db->fetch();
	}

}