<?php
  $seccion="contacto";
?>
<!--Titulo Contacto-->
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-4 mt-5">
        <div id="shadow" class="card-body text-white">
          <h2 class="text-center"><strong>Contactanos</strong></h2>
          <form action="pro_formulario.php" method="get" class="">

<!--Si el campo estado esta vacio dar error-->   
<?php    
if(!empty($_GET["estado"])):
  $estado = $_GET["estado"];

  if($estado == "error"):

    if(!empty($_GET["campo"]) && ($_GET["campo"] == "email" || $_GET["campo"] == "comentario" || $_GET["campo"] == "nombre"|| $_GET["campo"] == "apellido")):

  $campo = $_GET["campo"];   
?>

            <!--Alerta de error-->
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
              </button>
              <strong>Error!</strong> Algo salio mal en el <b><?= $campo ?>
            </div>
                
<?php
  endif;
    elseif($estado == "ok"): 

  $usuario = $_GET["usuario"] ?? "";
?>
            <!--Mensaje envio de formulario-->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
              </button>
                <strong>Genial.</strong> <?= $usuario ?> Tu comentario se ha enviado con exito!
            </div>

<?php                        
  endif;
    endif;
?> 
            <!--Nombre-->             
            <div class="form-group">
              <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Ingrese su Nombre">
            </div>
            <!--Apellido-->
            <div class="form-group">
              <label for="nombre">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido"  placeholder="Ingrese su Apellido">
            </div>
            <!--Email-->
            <div class="form-group">
              <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email"  placeholder="usuario@mail.com">
            </div>

            <label>¿Cómo nos conociste?</label>
            <!--Checkbox-->
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="descubrir[]" id="facebook" value="facebook">
                  Facebook
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="descubrir[]" id="Instagram" value="Instagram">
                  Instagram
              </label>
            </div>

            <div class="form-check">                       
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="descubrir[]" id="otros" value="otros">
                  Otros
              </label>
            </div>   
            <!--Cometario-->
            <div class="form-group">
              <label for="comentario">Comentario</label>
                <textarea class="form-control" name="comentario" id="comentario" rows="3"></textarea>
            </div>
            <!--boton de enviar formulario-->
            <button type="submit" class="btn btn-block btn-dark">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
