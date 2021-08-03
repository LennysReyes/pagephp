<?php 
// Verificar si me llega un dato en $_POST["personal"] 
if(empty($_POST["personal"])):
    header("Location:../index_panel.php?seccion=lista_personal&estado=error&error=sin_personal");
    die();
endif;
// Tomar el dato que me llega en post
$excursion = $_POST["personal"];
// Chequear que exista esa carpeta
if(!is_dir("../../personal/$personal")):
    header("Location:../index_panel.php?seccion=lista_personal&estado=error&error=sin_carpeta_personal");
    die();
endif;
// Borrar personal -> unlink($archivo)
if(is_file("../../personal/$personal/$personal.jpg"))
    unlink("../../personal/$personal/$personal.jpg");
    unlink("../../personal/$personal/descripcion.txt");
// Borrar personal -> rmdir($carpeta)
    rmdir("../../personal/$personal");
// Redireccionar al usuario al listado de personal
header("Location:../index_panel.php?seccion=lista_personal&estado=ok&ok=personal_borrado");
die();