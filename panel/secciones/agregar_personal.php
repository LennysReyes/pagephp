<?php

$seccion="lista_personal";


if(!empty($_GET["personal"])):
   
    
    $titulo = "Editar personal";
    $action = "editar_personal.php";
    $boton  = "Editar";
    
    $nombre = strtolower($_GET["personal"]);
    
  
    if(!is_dir("../personal/$nombre")):
        header("Location:index_panel.php?seccion=lista_personal&estado=error&error=personal_existe");
        die();
    endif;
  
    
    $descripcion = file_get_contents("../personal/$nombre/descripcion.txt");
    $sueldo = file_get_contents("../personal/$nombre/sueldo.txt");
    $anioIngreso = file_get_contents("../personal/$nombre/anioIngreso.txt");

    if(is_file("../personal/$nombre/$nombre.jpg")):
        $imagen = "../personal/$nombre/$nombre.jpg";
    endif;

else:
   
    $titulo = "Agregar personal";    
    $action = "agregar_personal.php";
    $boton = "Agregar";

endif;
?>
<?php

if(!empty($_GET["estado"])):
  $estado = $_GET["estado"] ?? "error";

    if($estado == "error"):
      $error = $_GET["error"] ?? "";
        if(array_key_exists($error, $erroresPersonal)):

?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    <span class="sr-only">Close</span> 
  </button>
    <strong>Error!</strong><?= $erroresPersonal[$error] ?>. 
</div>
<?php
        endif;
    elseif($estado == "ok"):
        $ok = $_GET["ok"] ?? "";
            if(array_key_exists($ok, $okPersonal)):
?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Bien!</strong><?= $okPersonal[$ok] ?>. 
            </div>
<?php
                                
            endif;
        endif;

    endif;
                          
?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <form class="form" action="<?=$action?>" method="post" enctype="multipart/form-data">
                    <div class="subtit">
                        <h2><?=$titulo?></h2>
                    </div> 
   
                        <?php
                            if(isset($nombre)):
                        ?>
                                <input type="hidden" name="personal" value="<?= $nombre; ?>">
                        <?php
                            endif;
                        ?>

                    <div class="d-flex justify-content-center mt-3">
                        <input type="text" class="form-control" name="nombre" id="nom-exc" placeholder="Nombre de Personal" value="<?= isset($nombre) ? $nombre : ""; ?>">                               
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <textarea  name="descripcion"  rows="3" placeholder="  Descripcion"><?= isset($descripcion) ? $descripcion : ""; ?></textarea>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <input type="text" class="form-control" name="sueldo" id="nom-exc" placeholder="Sueldo" value="<?= isset($sueldo) ? $sueldo : ""; ?>">
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <input type="text" class="form-control" name="anioIngreso" id="nom-exc" placeholder="año de ingreso" value="<?= isset($anioIngreso) ? $anioIngreso : ""; ?>">
                    </div>
                    <div class="d-flex justify-content-center mt-3" >
                        <div class="form-group">
                            <input type="file" class="form-control-file" name="imagen" id="imagen" aria-describedby="fileHelpId">
                            <small id="fileHelpId" class="form-text text-muted">El formato de la imágen debe ser <b>.jpg</b></small>
                        </div>
                    </div>
                    <div>
<?php
if(isset($imagen)):
?>
                        <div class="card">
                            <div class="card-body">
                                <img src="<?= $imagen; ?>" alt="<?= $nombre; ?>" class="img-fluid">
                            </div>
                        </div>
                                    <?php
                                    endif;
                                    ?>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-secondary float-right my-1 ml-2 " type="submit"><?=$boton;?></button>
                                <button class="btn btn-secondary float-right my-1 ml-2 " type="reset">Limpiar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

   
   <?php
