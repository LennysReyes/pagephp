<?php


ini_set("upload_max_filesize","30M");


$nombre = trim(strtolower($_POST["nombre"])); 
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];

//Datos obligatorios
if(empty($_POST["nombre"]) || empty($_POST["descripcion"])):
    header("Location:index_panel.php?seccion=agregar_barba&error&error=camposObligatoriosBarba");
    die();
endif;


// Veo si la barba esta  creada
if(is_dir("../barbas/$nombre")):
    header("Location:index_panel.php?seccion=agregar_barba&estado=error&error=barba_existe");
    die();
endif;

// Si la barba no existe creo la carpeta
mkdir("../barbas/$nombre");

file_put_contents("../barbas/$nombre/descripcion.txt",$descripcion);
file_put_contents("../barbas/$nombre/precio.txt",$precio);

if(!empty($_FILES["imagen"])):
    $excNom = $_FILES["imagen"]["name"];
    
    if($_FILES["imagen"]["name"] && strpos($barNom,".jpg") === false):
    
        header("Location:index_panel.php?seccion=agregar_barba&error&error=formato_imagen_barba");
        die();
    endif;


    $imagen  = $_FILES["imagen"];
    $tipo  = $_FILES["imagen"]["tmp_name"];
    $precio = "../barbas/$nombre/$nombre.jpg";

    move_uploaded_file($origen, $precio);

endif;

header("Location:index_panel.php?seccion=lista_barba&estado=ok&ok=alta_barba");