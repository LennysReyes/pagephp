
<?php
    $seccion="galeria";
?>
<!--Titulo--> 
<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center"><strong>Galeria</strong></h1>
            </div>
        </div>
    </div>
    
    <div id="imggaleria" class="row">         
        
        <?php
            foreach($galeria as $valor):       
        ?> 
<!--Template--> 
    <div class="col-lg-4">
        <div id="shadow" class="card m-3">          
            <div class="card-body-bottom">
                <img class="animate__animated animate__headShake" src="<?= $valor["img"] ?>" class="card-img-top" alt="img">
                <h5 class="card-title text-center text-white"><?= $valor["nombre"]?></h5>
                <p class="card-text text-center text-white"><?= $valor["Tipo"]?> </p>         
            </div> 
        </div>    
    </div>        
        <?php
            endforeach;
        ?>
    </div>
</section>

