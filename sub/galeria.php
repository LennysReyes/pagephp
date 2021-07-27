
<?php
    $seccion="galeria";
?> 
<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-light text-center"  id="galeria">Galeria</h1>
            </div>
        </div>
    </div>
    
    <div id="imggaleria" class="row">         
        
<?php
    foreach($galeria as $valor):       
?> 

            <div  class="col-lg-4">
                <div class="card border- m-3">          
                    <div class="card-body-bottom">
                        <img class="animate__animated animate__pulse" src="<?= $valor["img"] ?>" class="card-img-top" alt="img"  >
                        <h5 class="card-title text-center text-black"><?= $valor["nombre"]?></h5>
                        <p class="card-text text-center text-black"><?= $valor["Tipo"]?> </p>         
                    </div> 
                </div>    
            </div>
        
<?php
    endforeach;
?>
    </div>
</section>

