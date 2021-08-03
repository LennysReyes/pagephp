<?php
$secction = "contenido";
?>
<!--Titulo-->
<section>
  <div class="container col-12">
    <div class="row justify-content-center" >
      <div class="col-12">
        <h1 class="text-center"><strong>Nosotros</strong></h1>
      </div>
    </div>
  </div>
  
<?php
    foreach($contenido as $valor):       
?>
<!--Template-->      
  <div id="shadow" class="card mb-3 my-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img width="280" height="220" src="<?= $valor["img"] ?>" class="card-img-top" alt="img" >
      </div>
      <div class="col-md-8">
        <div class="card-body text-white">
          <h5 class="card-title"><?= $valor["titulo"]?></h5>
          <p class="animate__animated animate__pulse" class="card-text"><?= $valor["Texto"]?> </p>
        </div>
      </div>
    </div>
  </div>

<?php
  endforeach;
?>  
</section>


