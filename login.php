<?php
// iniciar la sesion
session_start();

// procesa el login

// chequeo de datos obligarios
if(empty($_POST["email"]) || empty($_POST["password"])):
    header("Location:index.php?seccion=login&estado=error&error=camposObligatoriosRegistro");
    die();
endif;


$email = $_POST["email"];
$password = $_POST["password"];

// Chequeo si la carpeta está creada o sea si el usuario ya está creado
if(!is_dir("usuarios/$email")):
    header("Location:index.php?seccion=login&estado=error&error=usuarioNoRegistrado");
    die();
endif;

// Acá sabemos que el usuario existe en nuestro sitio
$passwordUsuario = file_get_contents("usuarios/$email/password.txt");

if(!password_verify($password,$passwordUsuario)):
    header("Location:index.php?seccion=login&estado=error&error=contrasenaIncorrecta");
    die();
endif;

// Ya el usuario puede ingresar al sistema
$_SESSION["usuario"] = [
    "nombre" => file_get_contents("usuarios/$email/nombre.txt"),
    "apellido" => file_get_contents("usuarios/$email/apellido.txt"),
    "email" => $email,
    "usuario" => file_get_contents("usuarios/$email/usuario.txt"),
    "perfil" => file_get_contents("usuarios/$email/perfil.txt")
];


// SI ENTRA UN USUARIO ADMIN... REDIRECCIONAR A PANEL SINO AL INDEX
if($_SESSION["usuario"]["perfil"] == "admin"):
    header("Location:panel/index_panel.php");
    die();
else:
    header("Location:index.php");
    die();
endif;

// Para redimensionar a la pagina anterior:
// $pagAnt = $_SERVER["HTTP_REFERER"];
// header("Location:$pagAnt");
