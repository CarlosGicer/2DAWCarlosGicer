<?php
session_start();
//session_destroy();
?>
<?php

function autocarga($clase)
{

    $ruta = "./controlador/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./modelo/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }
    $ruta = "./vista/login/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }
}

function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

spl_autoload_register("autocarga");
if ($_REQUEST) {

    if (isset($_REQUEST["accion"])) {

        //Inicio
        if ($_REQUEST['accion'] == "inicio") {

            ControladorLogin::mostrarFormularioLogin();
        }

        if ($_REQUEST['accion'] == "comprobarLogin") {

            $email = filtrado($_REQUEST["email"]);
            $password = filtrado($_REQUEST["password"]);
            ControladorLogin::comprobarLogin($email, $password);
        }

        if ($_REQUEST['accion'] == "mostrarPartidos") {

        }
    }
}
