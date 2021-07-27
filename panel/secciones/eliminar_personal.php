<?php 

if(empty($_POST["personal"])):
    header("Location:../index_panel.php?seccion=lista_personal&estado=error&error=sin_personal");
    die();
endif;

$excursion = $_POST["personal"];

if(!is_dir("../../personal/$personal")):
    header("Location:../index_panel.php?seccion=lista_personal&estado=error&error=sin_carpeta_personal");
    die();
endif;

if(is_file("../../personal/$personal/$personal.jpg"))
    unlink("../../personal/$personal/$personal.jpg");
    
    unlink("../../personal/$personal/descripcion.txt");

    rmdir("../../personal/$personal");



header("Location:../index_panel.php?seccion=lista_personal&estado=ok&ok=personal_borrado");
die();