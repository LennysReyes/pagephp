<?php 

if(empty($_POST["barba"])):
    header("Location:index_panel.php?estado=error&error=sin_barba");
    die();
endif;

$barba = $_POST["barba"];

if(!is_dir("../barbas/$barba")):
    header("Location:index_panel.php?estado=error&error=sin_barba");
    die();
endif;

unlink("../barbas/$barba/$barba.jpg");
unlink("../barbas/$barba/descripcion.txt");
unlink("../barbas/$barba/precio.txt");

rmdir("../barbas/$barba");

header("Location:index_panel.php?estado=ok&ok=barba_borrada");
die();

?>
