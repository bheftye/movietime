<?php
date_default_timezone_set('America/Mexico_City');

//error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

class DatabaseConexion{
	var $host;
	var $usuario;
	var $password;
	var $database;
	var $conexion;

	function DatabaseConexion(){
		$this->host='localhost';
		$this->usuario='root';
		$this->password='root';
		$this->database='movietime';
	}
	
	function conectar(){
		$this -> conexion = new mysqli($this -> host, $this -> usuario, $this -> password, $this -> database);
	}
	
	function desconectar(){
		$this -> conexion -> close();
	}
	
	function ejecutar($sql){
		$this -> conectar();

		if (! $resultados = $this -> conexion -> query($sql)) {
		    echo "Falló la ejecución: (" . $this -> conexion->errno . ") " . $this -> conexion->error;
		}

		if(preg_match('/insert/i',$sql))
		{
			$resultados =  $this -> conexion -> insert_id; 
		}

		$this -> desconectar();

		return $resultados;
	}

}
?>