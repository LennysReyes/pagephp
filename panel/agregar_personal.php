<?php


ini_set("upload_max_filesize","30M");

if(empty($_POST["nombre"]) || empty($_POST["descripcion"])):
    header("Location:index_panel.php?seccion=agregar_personal&estado=error&error=camposObligatoriosPersonal");                       
    die();
endif;

$nombre = trim(strtolower($_POST["nombre"])); 
$descripcion = $_POST["descripcion"];
$sueldo = $_POST["sueldo"];
$anioIngreso = $_POST["anioIngreso"];

if(is_dir("../personal/$nombre")):
    header("Location:index_panel.php?seccion=agregar_personal&error&error=personal_existe");
    die();
endif;


mkdir("../personal/$nombre");


file_put_contents("../personal/$nombre/descripcion.txt",$descripcion);
file_put_contents("../personal/$nombre/sueldo.txt",$sueldo);
file_put_contents("../personal/$nombre/anioIngreso.txt",$anioIngreso);


if(!empty($_FILES["imagen"])):
    $perNom = $_FILES["imagen"]["name"];
    
    if($_FILES["imagen"]["name"] && strpos($perNom,".jpg") === false):
    
        header("Location:index_panel.php?seccion=agregar_personal&error&error=formato_imagen_personal");
        die();
    endif;


    $imagen  = $_FILES["imagen"];
    $origen  = $_FILES["imagen"]["tmp_name"];
    $destino = "../personal/$nombre/$nombre.jpg";

    move_uploaded_file($origen, $destino);

endif;

header("Location:index_panel.php?seccion=lista_personal&estado=ok&ok=alta_personal");
?>
<?php
