<?php 

if(empty($_POST["personal"])):
    header("Location:index_panel.php?seccion=lista_personal&estado=error&error=sin_personal");
    die();
endif;

$personal = $_POST["personal"];

if(!is_dir("../personal/$personal")):
    header("Location:index_panel.php?seccion=lista_personal&estado=error&error=sin_personal");
    die();
endif;

unlink("../personal/$personal/$personal.jpg");
unlink("../personal/$personal/descripcion.txt");
unlink("../personal/$personal/sueldo.txt");
unlink("../personal/$personal/anioIngreso.txt");

rmdir("../personal/$personal");

header("Location:index_panel.php?seccion=lista_personal&estado=ok&ok=personal_borrado");
die();

?>

