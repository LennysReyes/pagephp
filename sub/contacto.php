
 
 <?php
    $seccion="contacto";
  ?>
<!--Titulo Contacto-->
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <br>
          <h1 class="text-center text-white"><strong>Contactanos</strong></h1>
        </div>
      <div class="col-4 mt-5">
    <div class="card-body text-white bg-dark">

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
<button type="submit" class="btn btn-block btn-secondary">Enviar</button>


            </form>
          </div>
        </div>
      </div>
    <br>
  <br>
</div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>