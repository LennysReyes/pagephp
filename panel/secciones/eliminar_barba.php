<?php 

if(empty($_POST["barba"])):
    header("Location:../index_panel.php?seccion=lista_barba&estado=error&error=sin_barba");
    die();
endif;

$barba = $_POST["barba"];

if(!is_dir("../../barbas/$barba")):
    header("Location:../index_panel.php?seccion=lista_barba&estado=error&error=sin_carpeta_barba");
    die();
endif;

if(is_file("../../barbas/$barba/$barba.jpg"))

    unlink("../../barbas/$barba/$barba.jpg");
    
    unlink("../../barbas/$barba/descripcion.txt");

    rmdir("../../barbas/$barba");

header("Location:../index_panel.php?seccion=lista_barba&estado=ok&ok=barba_borrada");
die();
