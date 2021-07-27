<?php


if(empty($_POST["nombre"])||empty($_POST["descripcion"])||empty($_POST["sueldo"])||empty($_POST["anioIngreso"])):
   header("Location:index_panel.php?seccion=agregar_personal&estado=error&error=camposObligatoriosPersonal");
    die();
endif;

$nombre = trim(ucwords($_POST["nombre"])); 
$descripcion = $_POST["descripcion"];
$sueldo = $_POST["sueldo"];
$anioIngreso = $_POST["anioIngreso"];
$personal = $_POST["personal"];


if(!is_dir("../personal/$personal")):
    header("Location:index_panel.php?seccion=agregar_personal=$personal&estado=error&error=personal_existe");
    die();
endif;


if(!empty($_FILES["imagen"])):
    $nombrePersonal = $_FILES["imagen"]["name"]; 
    
    if($_FILES["imagen"]["name"] && strpos($nombrePersonal,".jpg") === false):
        header("Location:index_panel.php?seccion=agregar_personal=$personal&estado=error&error=formato_imagen");
        die();
    endif;

    $imagen  = $_FILES["imagen"];
    $origen  = $_FILES["imagen"]["tmp_name"];
    $destino = "../personal/$personal/$personal.jpg";

    move_uploaded_file($origen, $destino);

endif;

$nombreNuevo = str_replace(" ","_",$nombre);
$nombreNuevo = ucwords($nombreNuevo);

if($nombre != $personal):
    rename("../personal/$personal","../personal/$nombreNuevo");
    
    if(is_file("../personal/$nombreNuevo/$personal.jpg")):
        rename("../personal/$nombreNuevo/$personal.jpg","../personal/$nombreNuevo/$nombreNuevo.jpg");
    endif;
    
    
    $personal = $nombreNuevo;
endif;

file_put_contents("../personal/$personal/descripcion.txt",$descripcion);
file_put_contents("../personal/$personal/sueldo.txt",$sueldo);
file_put_contents("../personal/$personal/anioIngreso.txt",$anioIngreso);

header("Location:index_panel.php?seccion=lista_personal&estado=ok&ok=personal_editado");

?>

<?php

ini_set("upload_max_filesize","30M");
