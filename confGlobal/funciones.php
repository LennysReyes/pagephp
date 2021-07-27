
<?php

    function limpiar_string($string){
        return nl2br(htmlentities(trim($string)));

}  
    function caracterm_string($string){
        return nl2br(ucwords(trim($string)));
}        
    function contacto($espacio_vacio) {
        if(empty($_POST["$espacio_vacio"]));
            header("location:index.php?seccion=contacto&estado=error&campo=$espacio_vacio");
}
    function error($form){
        if (empty($_POST[$form])&&($seccion="contacto")) {
            header("Location:index.php?seccion=contacto&estado=error&campo=$form");
            die();
}
}

?>
 <?php 
 
  function calculaAntiguedad($s,$a){
    if($a < 2016 && $a >= 2012){
        return $s * 1.20;
}   else if($a < 2012 && $a >= 2008){
        return $s * 1.30;
}   else if($a < 2008 ){
        return $s * 1.40;
}
        return $s;
}
 
function calculaDescuento($j){

    $j = $j * 0.75;

    return $j;

};

