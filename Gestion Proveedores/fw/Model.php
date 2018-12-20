<?php
/**
* Clase para los models 
*
* @package Administracion_proveedores
* @author Martin Gainza <martingkoulak@gmail.com>
* @version 0.1
*/
	abstract class Model {	
		protected $db;//PERMITE ACCEDER DESDE LA CLASE HIJA Y PROTEGE EL ACCESO A LA MISMA
		/**
		* Función constructora de la base de datos.
		*/
		public function __construct(){
			$this->db = Database::getInstance();
		}
	}