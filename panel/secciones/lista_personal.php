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
    <strong><?= $erroresPersonal[$error] ?>.</strong> 
</div>

<?php
        endif;
    elseif($estado == "ok"):
        $ok = $_GET["ok"] ?? "";
           
    endif;
endif;
?>

<div class="container my-5">
  <h2 class="text-center text-white bg-dark" style="width: 18rem;"><strong>Tipos de Barba</strong></h2>
  <table class="table table-dark">
             
    <a href="index_panel.php?seccion=agregar_personal" class="btn btn-info float-right my-1 ml-2 ">Agregar Personal</a>
    
      <thead>
        <tr>
          <th>Personal</th>
          <th>Descripcion</th>
          <th>Sueldo</th>
          <th>Imagen</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
<?php

  $carpetaPer = "../personal";
  $dir = opendir($carpetaPer);

  while($personal = readdir($dir)):
    if($personal == "." || $personal == "..")
    continue;
    
  $sueldo = file_get_contents("$carpetaPer/$personal/sueldo.txt");
  $anioIngreso = file_get_contents("$carpetaPer/$personal/anioIngreso.txt");
 
?>
      <tr>
        <td ><?= ucfirst($personal); ?></td>
        <td><?= nl2br(file_get_contents("$carpetaPer/$personal/descripcion.txt")); ?></td>
        <td>$<?= calculaAntiguedad($sueldo,$anioIngreso);?></td>
        <td><img width="200" height="200" src="<?= "$carpetaPer/$personal/$personal.jpg" ?>" alt="<?= $personal; ?>"></td>
        <td>
            <form action="eliminar_personal.php" method="post" class="eliminar_persona">
              <input type="hidden" name="personal" value="<?= $personal; ?>">
              <button type="submit" class="btn btn-outline-info my-1">Eliminar personal </button>
            </form>
           
           <a href="index_panel.php?seccion=agregar_personal&personal=<?= $personal; ?>" class="btn btn-outline-info  float-right my-1 ml-2 ">Editar personal</a>
            
        </td>
      </tr>
      
      <?php
      endwhile;
      ?>
    </tbody>
  </table>
</div>