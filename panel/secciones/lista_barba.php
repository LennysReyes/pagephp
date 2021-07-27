<?php
if(!empty($_GET["estado"])):
  $estado = $_GET["estado"] ?? "error";

    if($estado == "error"):
      $error = $_GET["error"] ?? "";
        if(array_key_exists($error, $erroresBarba)):

?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    <span class="sr-only">Close</span> 
  </button>
    <strong>Error!</strong> <?= $erroresBarba[$error] ?>.
</div>

<?php
        endif;
    elseif($estado == "ok"):
        $ok = $_GET["ok"] ?? "";
            if(array_key_exists($ok, $okBarba)):
?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                  <strong>Bien!</strong> <?= $okBarba[$ok] ?>.
            </div>
<?php
            elseif(array_key_exists($ok, $okBarba)):
?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                  <strong><?= $okBarba[$ok] ?>.</strong> 
                            </div>
<?php
            endif;              
    endif;
endif;
  
?>

<div class="container my-5">
    <h2 class="text-center text-white bg-dark" style="width: 18rem;"><strong>Tipos de Barba</strong></h2>
      <table class="table table-dark">
 
      <a href="index_panel.php?seccion=agregar_barba" class="btn btn-info  float-right my-1 ml-2 ">Agregar Barba</a>
    
          <thead>
            <tr>
              <th>Tipo</th>
              <th>Descripcion</th>
              <th>Precio</th>
              <th>Imagen</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>

<?php
  $carpetaBar = "../barbas";
  $dir = opendir($carpetaBar);

  while($barba = readdir($dir)):
    if($barba == "." || $barba == "..")
      continue;
    
$precio = file_get_contents("$carpetaBar/$barba/precio.txt");

?>
<tr>
      
      <td><?= ucfirst($barba); ?></td>
      <td><?= nl2br(file_get_contents("$carpetaBar/$barba/descripcion.txt")); ?></td>
      <td>$<?= calculaDescuento($precio);?></td>
      <td><img id="imgpanel" width="200" height="200" src="<?= "$carpetaBar/$barba/$barba.jpg" ?>" alt="<?= $barba; ?>"></td>
      
      <td>
          <form action="eliminar_barba.php" method="post" class="eliminar_barba">
            <input type="hidden" name="barba" value="<?= $barba; ?>">
            <button type="submit" class="btn btn-outline-info my-1">Eliminar Barbar </button>
          </form>

         <a href="index_panel.php?seccion=agregar_barba&barba=<?= $barba; ?>" class="btn btn-outline-info float-right my-1 ml-2 ">Editar Barba</a>   
      </td>
</tr>  
 
<?php  
  endwhile;
?>
  </div>
    </tbody>
    </table>
  