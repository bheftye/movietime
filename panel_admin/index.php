<?php 
    include_once("clases/Pelicula.php");
    $peliculas = Pelicula::getAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PANEL DE ADMINISTRACIÓN | MOVIE TIME</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />

</head>
<body>
<div id="main_container">

	<div class="header">
    	<div class="right_header">Bienvenido Admin | <a href="login.html" class="logout">Salir</a></div>
    </div>
    
    <div class="main_content">
        <div class="menu">
            <ul>
                <li><a class="current" href="index.html">Películas</a></li>
                <li><a href="cines.html">Cines</a></li>
                <li><a href="categorias.html">Categorías</a></li>
            </ul>
        </div> 
                    
    	<div class="center_content">   
        
        	<div class="left_content"></div>   
    
    		<div class="right_content_pelicula">   
            
                <div class="sidebar_search">
                    <form>
                        <input type="text" name="" class="search_input" value="Buscar" onclick="this.value=''" />
                        <input type="image" class="search_submit" src="style/images/search.png" />
                    </form>            
                </div>
                     
    		<h2>Lista de Películas</h2> 
<table id="table">
    <thead>
    	<tr>
        	<th scope="col" class="table_image_left"></th>
            <th scope="col" class="rounded">Nombre</th>
            <th scope="col" class="rounded">Director</th>
            <th scope="col" class="rounded">Duración</th>
            <th scope="col" class="rounded">Reparto</th>
            <th scope="col" class="rounded">País</th>
            <th scope="col" class="rounded">Año</th>
            <th scope="col" class="rounded">Sinopsis</th>
            <th scope="col" class="rounded">Clasificación</th>
            <th scope="col" class="rounded">Editar</th>
            <th scope="col" class="table_image_right">Borrar</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($peliculas as $pelicula) {           
        ?>
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            <td><?php echo $pelicula -> nombre;?></td>
            <td><?php echo $pelicula -> director;?></td>
            <td><?php echo $pelicula -> duracion;?></td>
            <td><?php echo $pelicula -> reparto;?></td>
            <td><?php echo $pelicula -> pais;?></td>
            <td><?php echo $pelicula -> anio;?></td>
            <td><?php echo $pelicula -> sinopsis;?></td>
            <td><?php echo $pelicula -> clasificacion;?></td>
            <td><a href="formularioPeliculas.php?id=<?php echo $pelicula -> id;?>"><img src="style/images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#"><img src="style/images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>

	 <a href="formularioPeliculas.php" class="bt_green"><span class="bt_green_lft"></span><strong>Agregar película</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Borrar películas</strong><span class="bt_red_r"></span></a> 
     
        <div class="pagination">
        <span class="disabled"><< prev</span><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a>…<a href="">10</a><a href="">11</a><a href="">12</a>...<a href="">100</a><a href="">101</a><a href="">next >></a>
        </div> 
        
     </div><!-- end of right content-->
  </div>   <!--end of center content -->               
                    
    	<div class="clear"></div>
    </div> <!--end of main content-->
    
    <div class="footer">
    	<div class="left_footer">PANEL DE ADMINISTRACIÓN | <a href="#">MOVIE TIME</a></div>
    </div>

</div>		
</body>
</html>