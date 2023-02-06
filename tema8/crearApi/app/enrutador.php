<?php
session_start();
//session_destroy();

//AUTOLOAD
function autocarga($clase)
{
    $ruta = "./controller/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./modelo/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }
}
spl_autoload_register("autocarga");


//Función para filtrar los campos del formulario
function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

if ($_REQUEST) {
    if (isset($_REQUEST['accion'])) {

        //Inicio 
        if ($_REQUEST['accion'] == "login") {
            ControladorLogin::mostrarLogin();
        }

           //CheckLogin
           if ($_REQUEST['accion'] == "checkLogin") {
            $email = filtrado($_REQUEST['email']);
            $password = filtrado($_REQUEST['password']);
            ControladorLogin::chequearLogin($email, $password);
           }

           //Inicio - error de login
           if ($_REQUEST['accion'] == "error") {
            ControladorLogin::mostrarFormularioLoginError();
        }

        if ($_REQUEST['accion'] == "mostrar") {

           $token = implode($_SESSION['token']) ;
            ControladorSongs::mostrarSongs( $token);
        }
        if ($_REQUEST['accion'] == "mostrarTop") {

            $token = implode($_SESSION['token']) ;
             ControladorSongs::mostrarTop( $token);
         }

        if ($_REQUEST['accion'] == "valorar") {
            $id= filtrado($_REQUEST['id']);
            $valoracion = filtrado($_REQUEST['valoracion']);
            $token = implode($_SESSION['token']) ;
           ControladorSongs::valorar($id,$valoracion,$token);
         }
    }
}
