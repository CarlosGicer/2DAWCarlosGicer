<?php
session_start();
//session_destroy();

//AUTOLOAD
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

        if ($_REQUEST['accion'] == "inicio") {
            ControladorJuegos::mostrarInicio();
        }
        if ($_REQUEST['accion'] == "mostrarJuegos") {
            $id = filtrado($_GET['id']);
            ControladorJuegos::mostrarJuegos($id);
            ControladorJuegos::mostrarNoticias($id, "");
        }

        if ($_REQUEST['accion'] == "añadirComentario") {
            $idJuego = filtrado($_REQUEST['idJuego']);
            $nombre = filtrado($_REQUEST['nombre']);
            $comentario = filtrado($_REQUEST['comentario']);
            $idNoticia = filtrado($_REQUEST['idNoticia']);
            ControladorJuegos::mostraComentarios( $idJuego, $nombre,$comentario, $idNoticia);
            ControladorJuegos::mostrarJuegos($idJuego);
            ControladorJuegos::mostrarNoticias($idJuego);
          
        }
       
    }
}





?>