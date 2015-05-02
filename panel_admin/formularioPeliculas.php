<?php
     $id = 0;
     $id = (isset($_GET["id"]))? $_GET["id"] : 0;
     $operacion = "ap";
     if($id != 0){
        $operacion = "mp";
        $pelicula = Pelicula::get($id);
     }
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
        
            <div class="right_content"> 
                <h2>Agregar película</h2>
                
                <div class="form">
                    <form action="controller.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="op" value="<?=$operacion?>">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <fieldset>
                            <dl>
                                <dt><label>Nombre:</label></dt>
                                <dd><input type="text" name="nombre" value="<?php echo ($id != 0)? $pelicula ->nombre: ""?>" id="" size="54" /></dd>
                            </dl>
                            <dl>
                                <dt><label>Director:</label></dt>
                                <dd><input type="text" name="director" value="<?php echo ($id != 0)? $pelicula ->director: ""?>" id="" size="54" /></dd>
                            </dl>
                            <dl>
                                <dt><label>Duración:</label></dt>
                                <dd><input type="text" name="duracion" id="" value="<?php echo ($id != 0)? $pelicula ->duracion: ""?>" size="54" /></dd>
                            </dl>
                            <dl>
                                <dt><label>Reparto:</label></dt>
                                <dd><input type="text" name="reparto" id="" value="<?php echo ($id != 0)? $pelicula ->reparto: ""?>" size="54" /></dd>
                            </dl>
                            <dl>
                                <dt><label>País:</label></dt>
                                <dd><input type="text" name="pais" id="" value="<?php echo ($id != 0)? $pelicula ->pais: ""?>" size="54" /></dd>
                            </dl>
                            <dl>
                                <dt><label>Año:</label></dt>
                                <dd><input type="text" name="anio" id="" value="<?php echo ($id != 0)? $pelicula ->anio: ""?>" size="54" /></dd>
                            </dl>
                            <dl>
                                <dt><label>Sinopsis:</label></dt>
                                <dd><textarea rows="10" style="resize:no-resize; width:100%;" name="sinopsis">
                                    <?php echo ($id != 0)? $pelicula ->sinopsis: ""?>
                                </textarea></dd>
                            </dl>
                            <dl>
                                <dt><label for="gender">Clasificación:</label></dt>
                                <dd>
                                    <select size="1" name="clasificacion" id="">
                                        <option value="AA" <?php echo ($id != 0 && $pelicula -> clasificacion == "AA")? "selected": ""?> >AA</option>
                                        <option value="A" <?php echo ($id != 0 && $pelicula -> clasificacion == "A")? "selected": ""?>>A</option>
                                        <option value="B" <?php echo ($id != 0 && $pelicula -> clasificacion == "B")? "selected": ""?>>B</option>
                                        <option value="B-15" <?php echo ($id != 0 && $pelicula -> clasificacion == "B-15")? "selected": ""?>>B-15</option>
                                        <option value="C" <?php echo ($id != 0 && $pelicula -> clasificacion == "C")? "selected": ""?>>C</option>
                                        <option value="D" <?php echo ($id != 0 && $pelicula -> clasificacion == "D")? "selected": ""?>>D</option>
                                    </select>
                                </dd>
                            </dl>
                            
                            <dl>
                                <dt><label for="upload">Imagen:</label></dt>
                                <dd>
                                    <input type="file" name="upload" id="upload" />
                                    <?php echo ($id != 0 && $pelicula -> img != "")? "<img src=\"movie_images/$pelicula ->img\">": ""?>
                                </dd>
                            </dl>
                            
                            <dl>
                                <dt><label for="description">Descripción:</label></dt>
                                <dd><textarea name="descripcion" id="description" rows="4" cols="41">
                                    <?php echo ($id != 0)? $pelicula ->description: ""?>
                                </textarea></dd>
                            </dl>
                            
                             <dl class="submit">
                            <input type="submit" name="submit" id="submit" value="Agregar"/>
                             </dl>
                        </fieldset>
                    </form>
                </div> <!--Fin del div form-->
            </div> <!--Fin del right content-->
         </div> <!--Fin del center content-->
         <div class="clear"></div>     
    </div> <!--Fin del main content-->
    
    <div class="footer">
    	<div class="left_footer">PANEL DE ADMINISTRACIÓN | <a href="#">MOVIE TIME</a></div>
    </div>

</div> <!--Fin del main container-->	
</body>
</html>