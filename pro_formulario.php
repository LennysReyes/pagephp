<?php

if(empty($_GET["nombre"])):
    header("Location:index.php?seccion=contacto&estado=error&campo=nombre");
    die();
endif;

if(empty($_GET["apellido"])):
    header("Location:index.php?seccion=contacto&estado=error&campo=apellido");
    die();
endif;

if(strpos($_GET["email"],"@") === false || empty($_GET["email"])):
    header("Location:index.php?seccion=contacto&estado=error&campo=email");
    die();
endif;

if(empty($_GET["comentario"])):
    header("Location:index.php?seccion=contacto&estado=error&campo=comentario");
    die();
endif;

 
header("Location:index.php?seccion=contacto&estado=ok");
    die();
   
echo "<pre>";
print_r($_GET);
echo "</pre>";
die();
?>


