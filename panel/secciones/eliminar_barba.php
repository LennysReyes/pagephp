<?php 
// Verificar si me llega un dato en $_POST["barba"] 
if(empty($_POST["barba"])):
    header("Location:../index_panel.php?seccion=lista_barba&estado=error&error=sin_barba");
    die();
endif;
// Tomar el dato que me llega en post
$barba = $_POST["barba"];
// Chequear que exista esa carpeta
if(!is_dir("../../barbas/$barba")):
    header("Location:../index_panel.php?seccion=lista_barba&estado=error&error=sin_carpeta_barba");
    die();
endif;
// Borrar la barba -> unlink($archivo)
if(is_file("../../barbas/$barba/$barba.jpg"))
    unlink("../../barbas/$barba/$barba.jpg");
    unlink("../../barbas/$barba/descripcion.txt");
// Borrar la barba -> rmdir($carpeta) 
    rmdir("../../barbas/$barba");
// Redireccionar al usuario al listado de barbas
header("Location:../index_panel.php?seccion=lista_barba&estado=ok&ok=barba_borrada");
die();
