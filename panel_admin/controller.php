<?php
	include_once("clases/Pelicula.php");
	$operation = (isset($_POST["op"]) and $_POST["op"] != "")? $_POST["op"]:"";

	switch ($operation) {
		case 'ap':
			$id = 0;
			$nombre = (isset($_POST["nombre"]) and $_POST["nombre"] != "")? $_POST["nombre"]:"";
			$director = (isset($_POST["director"]) and $_POST["director"] != "")? $_POST["director"]:"";
			$duracion = (isset($_POST["duracion"]) and $_POST["duracion"] != "")? $_POST["duracion"]:"";
			$reparto = (isset($_POST["reparto"]) and $_POST["reparto"] != "")? $_POST["reparto"]:"";
			$pais = (isset($_POST["pais"]) and $_POST["pais"] != "")? $_POST["pais"]:"";
			$anio = (isset($_POST["anio"]) and $_POST["anio"] != "")? $_POST["anio"]:"";
			$sinopsis = (isset($_POST["sinopsis"]) and $_POST["sinopsis"] != "")? $_POST["sinopsis"]:"";
			$clasificacion = (isset($_POST["clasificacion"]) and $_POST["clasificacion"] != "")? $_POST["clasificacion"]:"";
			$descripcion = (isset($_POST["descripcion"]) and $_POST["descripcion"] != "")? $_POST["descripcion"]:"";
			$img = "";

			if(isset($_FILES["upload"])){
				$tmp_file = $_FILES["upload"]["tmp_name"];
				$img_principal = $_FILES["upload"]["name"];
				$img_principal = explode(".", $img_principal);
				$extension = $img_principal[1];
				$file_name = uniqid($id).".".$extension;
				if(is_file($tmp_file)){
					move_uploaded_file($tmp_file, "movie_images/".$file_name);
					$img = $file_name;
				}

				$pelicula = new Pelicula($id, $nombre, $director, $duracion, $reparto, $pais, $anio, $sinopsis, $clasificacion, $descripcion, $file_name);
				$pelicula -> guardar();
			}
			header("Location: index.php");

			break;
		case 'mp':
			$id = (isset($_POST["id"]) and $_POST["id"] != "")? $_POST["id"]:"";
			$nombre = (isset($_POST["nombre"]) and $_POST["nombre"] != "")? $_POST["nombre"]:"";
			$director = (isset($_POST["director"]) and $_POST["director"] != "")? $_POST["director"]:"";
			$duracion = (isset($_POST["duracion"]) and $_POST["duracion"] != "")? $_POST["duracion"]:"";
			$reparto = (isset($_POST["reparto"]) and $_POST["reparto"] != "")? $_POST["reparto"]:"";
			$pais = (isset($_POST["pais"]) and $_POST["pais"] != "")? $_POST["pais"]:"";
			$anio = (isset($_POST["anio"]) and $_POST["anio"] != "")? $_POST["anio"]:"";
			$sinopsis = (isset($_POST["sinopsis"]) and $_POST["sinopsis"] != "")? $_POST["sinopsis"]:"";
			$clasificacion = (isset($_POST["clasificacion"]) and $_POST["clasificacion"] != "")? $_POST["clasificacion"]:"";
			$descripcion = (isset($_POST["descripcion"]) and $_POST["descripcion"] != "")? $_POST["descripcion"]:"";
			$pelicula = new Pelicula($id, $nombre, $director, $duracion, $reparto, $pais, $anio, $sinopsis, $clasificacion, $descripcion);
			$pelicula -> modificar();

			if(isset($_FILES["upload"])){
				$tmp_file = $_FILES["upload"]["tmp_name"];
				$img_principal = $_FILES["upload"]["name"];
				$img_principal = explode(".", $img_principal);
				$extension = $img_principal[1];
				$file_name = uniqid($id).".".$extension;
				if(is_file($tmp_file)){
					move_uploaded_file($tmp_file, "movie_images/".$file_name);
					$pelicula -> modificar_img($file_name);
				}
			}
			header("Location: index.php");
			break;
		
		default:
			# code...
			break;
	}
?>