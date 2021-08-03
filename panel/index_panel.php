<!DOCTYPE html>
<?php
        session_start();
        include_once("../confGlobal/confi.php");
        include_once("../confGlobal/arrays.php");
        include_once("../confGlobal/funciones.php");
?>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Barber Shop</title>

    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/estilo.css">
        <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
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
                <a class="navbar-brand" href="../index.php">
                <img id="logo" src="../img/bigote.png" alt="" width="30" height="24">
            </a>
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav mr-0">

        <?php
            if(empty($_SESSION["usuario"])):
        ?>

        <?php
            foreach($navbarR as $nombreR => $urlR):
        ?>
        <li class="nav-item <?=!empty($_GET["seccion"]) && $_GET["seccion"] == $urlR ? "active" : "";  ?>">
            <a class="nav-link" href="index_panel.php?seccion=<?= $urlR; ?>"><?= $nombreR; ?></a>
        </li>

        <?php
            endforeach;
        header("location:../index.php");         
            else:
        ?>
        
            </ul>
            <ul class="navbar-nav mr-0">
                <li class="nav-item">
                    <span class="nav-link"><?= $_SESSION["usuario"]["usuario"]; ?></span>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">CERRAR SESION</a>
                </li>

                        <?php
                            if($_SESSION["usuario"]["perfil"] == "admin"):
                        ?>
                <li class="nav-item <?=!empty($_GET["seccion"]) && $_GET["seccion"] == "PANEL" ? "active" : "";  ?>">
                    <a href="index_panel.php" class="nav-link">PANEL</a>
                </li>

                        <?php
                            endif;
                        ?>
                    </ul>   
        <?php
            endif;
        ?>
                </div><!-- /.navbar-collapse -->
                
            </nav>
        </header>
    <main>
        <section>
            <?php
        if(!empty($_GET["seccion"])):
            $seccion = $_GET["seccion"];

            if(file_exists("secciones/$seccion.php")):
                require_once("secciones/$seccion.php");
            
            endif;
        else:
        require_once("secciones/lista_barba.php");
        require_once("secciones/lista_personal.php");
        endif;

        ?>
        </section>
    </main>

    <footer>
        <div class="row mx-0 navbar navbar-expand-lg">
            <div class="col-12 px-0">
                <h4 class="text-white text-center">Barber Shop</h4>
                <div class="d-flex justify-content-center">
                <small class="text-center">Copyright © Lennys Reyes</small>
                </div>
            </div>
        </div>
    </footer>  

<!-- JavaScript -->
<script src="../lib/jquery/jquery-3.3.1.min.js"></script>
<script src="../lib/popper/popper.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>