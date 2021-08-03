<?php
// chequeo de datos obligarios
if(empty($_POST["nombre"])||empty($_POST["descripcion"])||empty($_POST["precio"])):
   header("Location:index_panel.php?seccion=agregar_barba&estado=error&error=camposObligatoriosBarba");
    die();
endif;
// Llega un nombre, una descripción y un precio
$nombre = trim(ucwords($_POST["nombre"])); 
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$barba = $_POST["barba"];

// Chequeo si la carpeta está creada
if(!is_dir("../barbas/$barba")):
    header("Location:index_panel.php?seccion=agregar_barba=$barba&estado=error&error=barba_existe");
    die();
endif;

// Busca la imagen
if(!empty($_FILES["imagen"])):
    $nombreBarba = $_FILES["imagen"]["name"]; 
    
    if($_FILES["imagen"]["name"] && strpos($nombreBarba,".jpg") === false):
        header("Location:index_panel.php?seccion=agregar_barba=$barba&estado=error&error=formato_imagen");
        die();
    endif;
// Ya tengo la imagen
    $imagen  = $_FILES["imagen"];
    $origen  = $_FILES["imagen"]["tmp_name"];
    $destino = "../barbas/$barba/$barba.jpg";

    move_uploaded_file($origen, $destino);

endif;

$nombreNuevo = str_replace(" ","_",$nombre);
$nombreNuevo = ucwords($nombreNuevo);

if($nombre != $barba):
// Renombrar la carpeta
    rename("../barbas/$barba","../barbas/$nombreNuevo");
    
    if(is_file("../barbas/$nombreNuevo/$barba.jpg")):
        rename("../barbas/$nombreNuevo/$barba.jpg","../barbas/$nombreNuevo/$nombreNuevo.jpg");
    endif;
    
    
    $barba = $nombreNuevo;
endif;
// Edito los archivos 
file_put_contents("../barbas/$barba/descripcion.txt",$descripcion);
file_put_contents("../barbas/$barba/precio.txt",$precio);

header("Location:index_panel.php?seccion=lista_barba&estado=ok&ok=barba_editada");

?>

<?php

ini_set("upload_max_filesize","30M");