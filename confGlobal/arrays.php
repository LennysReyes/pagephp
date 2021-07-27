<?php
 $navbar = [
    "Inicio" => "contenido",
    "Galeria" => "galeria",
    "Contactanos" => "contacto",
];
$navbarR = [
    "Registrate" => "registro",
    "Ingresa" => "login",
];
//Galeria
$galeria= []; 

$galeria[] = ["img" => "img/galeria/barba9.jpg", "nombre" => "Barba Van Dyke", "Tipo" => "Se trata de una barba de chivo combinada con un bigote."];

$galeria[] = ["img" => "img/galeria/barba7.jpg", "nombre" => "Barba Balbao", "Tipo" =>"Una barba sin patillas y un bigote separado y recortado."];

$galeria[] = ["img" => "img/galeria/barba5.jpg", "nombre" => "Barba Corta Cuadrada", "Tipo" =>"Una barba corta con los lados delgados nítidamente recortados."];

$galeria[] = ["img" => "img/galeria/barba6.png", "nombre" => "Barba Perilla Ampliada", "Tipo" =>"Es una barba que debe estar muy cuidada, deben cuidarse sus líneas y perfiles para que no pierda la forma y se mantenga perfecta."];

$galeria[] = ["img" => "img/galeria/barba2.jpg", "nombre" => "Barba Bandholz", "Tipo" => "Denominada así por ser el apellido de su fundador. Se debe dejar crecer en todo la zona de la barba, se presta especial atención a la forma del bigote."];

$galeria[] = ["img" => "img/galeria/barba1.jpg", "nombre" => "Barba Garibaldi", "Tipo" => "Parecida a la hípster pero que no tiene tendencia a ser demasiado largaSe trata de una barba ancha y completa con un fondo redondeado que además integra un bigote"];

$galeria[] = ["img" => "img/galeria/barba10.jpg", "nombre" => "Barba Goatee", "Tipo" => "Se trata de un tipo de afeitado que solo deja crecer barba por debajo del labio inferior."];

$galeria[] = ["img" => "img/galeria/barba13.jpg", "nombre" => "Barba Zappa", "Tipo" =>"Mantiene una pequeña perilla en la parte de abajo del labio inferior, consiguiendo un aspecto más serio y profesional."];

$galeria[] = ["img" => "img/galeria/barba12.jpg", "nombre" => "Barba Mutton Chops", "Tipo" => "Consiste en dejar crecer libremente las patillas que están unidas normalmente gracias a la presencia del bigote."];

$galeria[] = ["img" => "img/galeria/barba11.jpg", "nombre" => "Barba French Pork", "Tipo" => "Cuenta con la peculiaridad de extenderse más allá de la barbilla de una forma prominente y dividirse en dos, consiguiendo un aspecto único y original."];


//Contenido
$contenido =[];

$contenido[]=["img" => "img/contenido/historiaa", "titulo" => "Historia","Texto" => "Este oficio nace en el siglo XIII y es denominado Cirujano-Barbero porque en esa época hacían de todo, lo mismo te sacaban una muela, te hacían una sangría o te cortaban el pelo y afeitaban. Los barberos normalmente aprendían el oficio de sus padres, cirujanos eran gente con estudios, los barberos cobraban menos que los cirujanos y estaban mejor vistos en la sociedad porque contaban con la confianza de los nobles."];

$contenido[]=["img" => "img/contenido/mision", "titulo" => "Mision","Texto" => "Para nosotros, la apariencia no se trata solo de cómo te ves, sino cómo te sentis. Se trata de sentirse cómodo, probar cosas nuevas y dar forma a tu imagen. Creamos Barber Shop para dar a las personas la inspiración y los productos adecuados para probar algo diferente y sentirse completamente a gusto haciéndolo. Bienvenido a Barber Shop."];

$contenido[]=["img" => "img/contenido/vision", "titulo" => "Vision","Texto" => "Convertirnos en una empresa líder en la zona. Obtener una presencia importante y desarrollarnos en el mercado nacional con un alto nivel de satisfacción de nuestros clientes."];

//Acciones login

$erroresLogin =[
    "camposObligatoriosRegistro" => "Los campos e-mail y contraseña son obligatorios",
    "usuarioExiste" => "El usuario ya está registrado en nuestra web",
    "usuarioNoRegistrado"=>"El usuario NO está registrado en nuestra web",
    "contrasenaIncorrecta"=>"El correo o contraseña ingresada no coinciden con nuestros registros"
];


$okLogin = [
    "altaUsuario"    => "Te registraste correctamente",
];

//Acciones panel

$erroresBarba = [
    "sin_tipo"   => "El tipo de barba que quiere borrar no existe",
    "formato_imagen_barba" => "La imágen debe tener un formato .JPG",
    "barba_existe"=> "El tipo de barbar que desea agregar ya existe",
    "camposObligatoriosBarba" => "Los campos nombre, apellido, correo y descripcion son obligatorios",
    "sin_carpeta_excursion" => "No existe la carpeta",
];

$okBarba = [
    "barba_borrada" => "El tipo de barba se borro correctamente",
    "alta_barba" => "El tipo de barba se dio de alta correctamente",
    "barba_editada" => "El tipo de barba se edito correctamente",
];
$erroresPersonal = [
    "sin_personal"   => "El personal que quiere borrar no existe",
    "formato_imagen_personal" => "La imágen debe tener un formato .JPG",
    "personal_existe"=> "El personal ya existe",
    "camposObligatoriosPersonal" => "Los campos nombre, descripción, sueldo y año de ingreso son obligatorios",
];

$okPersonal = [
    "personal_borrado" => "El personal se borro correctamente",
    "alta_personal" => "El personal se dio de alta correctamente",
    "personal_editado" => "El personal se edito correctamente",
];
?>

