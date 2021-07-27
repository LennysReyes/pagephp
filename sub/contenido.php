<?php
$secction = "contenido";
?>
<section>
  <div class="container">
    <div class="row justify-content-center" >
      <div class="col-12">
        <br>
        <h1 class="text-center text-white"><strong>Nosotros</strong></h1>
        <br>
      </div>
    </div>
  </div>
  
<?php
    foreach($contenido as $valor):       
?>
<div class="container1">         
  <div class="card border-dark mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img width="300" height="200" src="<?= $valor["img"] ?>" class="card-img-top" alt="img" >
      </div>
      <div class="col-md-8">
        <div class="card-body text-dark">
          <h5 class="card-title"><?= $valor["titulo"]?></h5>
          <p class="animate__animated animate__pulse" class="card-text"><?= $valor["Texto"]?> </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  endforeach;
?>  

</section>


