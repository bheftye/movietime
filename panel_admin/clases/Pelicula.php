<?php 
	/**
	* 
	*/
	include_once("DatabaseConexion.php");
	class Pelicula
	{
		var $id;
		var $nombre;
		var $director;
		var $duracion;
		var $reparto;
		var $pais;
		var $anio;
		var $sinopsis;
		var $clasificacion;
		var $descripcion;
		var $img;
		
		function __construct($id = 0, $nombre = "", $director = "", $duracion = "", $reparto = "", $pais = "", $anio = "", $sinopsis = "", $clasificacion = "", $descripcion = "", $img = "")
		{	
			$this -> id = $id;
			$this -> nombre = $nombre;
			$this -> director = $director;
			$this -> duracion = $duracion;
			$this -> reparto = $reparto;
			$this -> pais = $pais;
			$this -> anio = $anio;
			$this -> sinopsis = $sinopsis;
			$this -> clasificacion = $clasificacion;
			$this -> descripcion = $descripcion;
			$this -> img = $img;
		}

		function guardar(){
			$conexion = new DatabaseConexion();
			$sql = "INSERT INTO peliculas (`nombre`, `director`, `duracion`, `reparto`, `pais`, `anio`, `sinopsis`, `clasificacion`, `img`, `descripcion`) VALUES ('".$this -> nombre."', '".$this -> director."', '".$this -> duracion."', '".$this -> reparto."', '".$this -> pais."', '".$this -> anio."', '".$this -> sinopsis."', '".$this -> clasificacion."', '".$this -> img."', '".$this -> descripcion."');";
			$resultados = $conexion -> ejecutar($sql);
			$this -> id = $resultados;
			return $resultados;
		}

		function modificar(){
			$conexion = new DatabaseConexion();
			$sql = "UPDATE `peliculas` SET `nombre`='".$this -> nombre."',`director`='".$this -> director."',`duracion`='".$this -> duracion."',`reparto`='".$this -> reparto."',`pais`='".$this -> pais."',`anio`='".$this -> anio."',`sinopsis`='".$this -> sinopsis."',`clasificacion`='".$this -> clasificacion."',`descripcion`='".$this -> descripcion."' WHERE `id` = ".$this -> id.";";
			$resultados = $conexion -> ejecutar($sql);
			return $resultados;
		}

		function modificar_img($img){
			$conexion = new DatabaseConexion();
			$sql = "UPDATE `peliculas` SET `img` = '".$img."' WHERE `id` = ".$this -> id.";";
			$resultados = $conexion -> ejecutar($sql);
			return $resultados;
		}

		public static function get($id){
			$conexion = new DatabaseConexion();
			$sql = "SELECT * FROM peliculas WHERE id = ".$id.";";
			$resultados = $conexion -> ejecutar($sql);
			foreach ($resultados as $fila) {
				$this -> id = $fila["id"];
				$this -> nombre = $fila["nombre"];
				$this -> director = $fila["director"];
				$this -> duracion = $fila["duracion"];
				$this -> reparto = $fila["reparto"];
				$this -> pais = $fula["pais"];
				$this -> anio = $fila["anio"];
				$this -> sinopsis = $fila["sinopsis"];
				$this -> clasificacion = $fila["clasificacion"];
				$this -> descripcion = $fila["descripcion"];
				$this -> img = $fila["img"];
			}
		}

		public static function getAll(){
			$conexion = new DatabaseConexion();
			$peliculas = array();
			$sql = "SELECT * FROM peliculas ORDER BY id DESC;";
			$resultados = $conexion -> ejecutar($sql);
			foreach ($resultados as $fila) {
				$pelicula = new Pelicula();
				$pelicula -> id = $fila["id"];
				$pelicula -> nombre = $fila["nombre"];
				$pelicula -> director = $fila["director"];
				$pelicula -> duracion = $fila["duracion"];
				$pelicula -> reparto = $fila["reparto"];
				$pelicula -> pais = $fula["pais"];
				$pelicula -> anio = $fila["anio"];
				$pelicula -> sinopsis = $fila["sinopsis"];
				$pelicula -> clasificacion = $fila["clasificacion"];
				$pelicula -> descripcion = $fila["descripcion"];
				$pelicula -> img = $fila["img"];
				array_push($peliculas, $pelicula);
			}
			return $peliculas;
		}

	}
?>