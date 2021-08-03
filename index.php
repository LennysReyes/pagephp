<!DOCTYPE html>

<?php

session_start();
include_once("confGlobal/confi.php");
include_once("confGlobal/arrays.php");
include_once("confGlobal/funciones.php");
 
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Barber Shop</title>
<head>
  
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS --> 
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/normalize.css">
  <!-- <link rel="stylesheet" href="css/font-awesome.css"> --> 
  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
</head>

<body >

<header>
<!--barra de navegacion-->  
  <nav class="navbar navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
    </button>
<!--menu sandwich-->        
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <a class="navbar-brand" href="index.php">
      <img id="logo" src="img/bigote.png" alt="" width="30" height="24">
    </a>
      <ul class="navbar-nav mr-auto">
          <?php
            foreach($navbar as $nombre => $url):
          ?>
          
      <li class="nav-item <?= !empty($_GET["seccion"]) && $_GET["seccion"] == $url ? "active" : "";  ?>">
        <a class="nav-link" href="index.php?seccion=<?= $url; ?>"><?= $nombre; ?></a>
      </li>

          <?php
            endforeach;
          ?>
      
      </ul>
      
      <ul class="navbar-nav mr-0">
        
          <?php
            if(empty($_SESSION["usuario"])):
          ?>

          <?php
            foreach($navbarR as $nombreR => $urlR):
          ?>

        <li class="nav-item <?=!empty($_GET["seccion"]) && $_GET["seccion"] == $urlR ? "active" : "";  ?>">
            <a class="nav-link" href="index.php?seccion=<?= $urlR; ?>"><?= $nombreR; ?></a>
        </li>

          <?php
            endforeach;    
            else:
          ?>
      
        <li class="nav-item">
          <span class="nav-link"><?= $_SESSION["usuario"]["usuario"]; ?></span>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="nav-link">CERRAR SESION</a>
        </li>

            <?php
              if($_SESSION["usuario"]["perfil"] == "admin"):
            ?>

        <li class="nav-item">
          <a href="panel/index_panel.php" class="nav-link">PANEL</a>
        </li>

            <?php
              endif;
            ?>
      </ul>
          
          <?php
            endif;
          ?>
  </div>
</nav>
      
       <!--carrusel-->  
<section>
  <div class="con">
    <div class="row justify-content-center">
      <div class="col-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/carrusel1.jpg" class="d-block w-100" alt="barbershop1">
            </div>
            <div class="carousel-item">
              <img src="img/carrusel2.jpg" class="d-block w-100" alt="barbershop2">
            </div>
            <div class="carousel-item">
              <img src="img/carrusel3.jpg" class="d-block w-100" alt="barbershop3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>  
</section>
</header>

<?php
   // Chequeo de errores 
   if(!empty($_GET["estado"])):
       $estado = $_GET["estado"] ?? "error";

       if($estado == "error"):
           $error = $_GET["error"] ?? "";
               if(array_key_exists($error, $erroresLogin)):
?>
<!--Mensajes de alerta-->
  <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
    <strong>Error!</strong> <?= $erroresLogin[$error] ?>.
  </div>

<?php
  endif;
    elseif($estado == "ok"):
      $ok = $_GET["ok"] ?? "";
          if(array_key_exists($ok, $okLogin)):
?>
<!--Mensajes de alerta-->
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>¡Bien!</strong> <?= $okLogin[$ok] ?>.
  </div>
<?php   
           endif;
       endif;
   endif;
   
?>

<div class="container my-5">
  <main>

    <?php   

    // chequeo sobre la variable que paso en GET -> seccion
      
    if(!empty($_GET["seccion"])): // si toqué uno de los botones
      $seccion = $_GET["seccion"];
      
      if(file_exists("sub/$seccion.php")):
          require_once("sub/$seccion.php");
      else:
          require_once("sub/contenido.php");
      endif;

    else: // si el usuario entra al index por primera vez
      require_once("sub/contenido.php");
    endif;

    ?>
    </div>
  </main>       
  
<footer>
  <div class="row mx-0 navbar navbar-expand-lg">
    <div class="col-12 px-0">
      <h4 class="text-white text-center">Barber Shop</h4>
      <div class="container d-flex justify-content-center">
        <div class="social">
          <a href="https://es-la.facebook.com/barbershop.com.ar/"><img src="img/social/facebook.png" alt="facebook"></a>
          <a href="https://www.youtube.com/results?search_query=barber+shop"><img src="img/social/youtube.png" alt="youtube"></a>
		      <a href="https://www.instagram.com/barbershop.com.ar/"><img src="img/social/instagram.png" alt="instagram"></a>
          <small class="text-center">Copyright © Lennys Reyes</small>
        </div>
      </div>
    </div>
  </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="lib/jquery/jquery-3.3.1.min.js"></script>
<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>