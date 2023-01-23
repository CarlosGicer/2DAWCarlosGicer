<?php
session_start();
//session_destroy();

//AUTOLOAD
function autocarga($clase)
{
    $ruta = "./admin/controlador/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./admin/modelo/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./admin/vista/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./blog/controlador/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./blog/modelo/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./blog/vista/$clase.php";
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
        if ($_REQUEST['accion'] == "inicio") {
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

        //Mostrar 
       /* if ($_REQUEST['accion'] == "mostrarN") {
            ControladorNoticia::mostrarNoticias();
        }*/

        if ($_REQUEST['accion'] == "generarArticulo") {
            $articulo = filtrado($_REQUEST['articulo']);
            ControladorArticulos::mostrarchatGPT($articulo);
        }

        
        if ($_REQUEST['accion'] == "mostrarFormulario") {
            ControladorFormulario::mostrarFormulario();
        }

        if ($_REQUEST['accion'] == "mostrarArticulo") {
            ControladorArticulo::mostrarArticulo();
        }

    }
}





?>