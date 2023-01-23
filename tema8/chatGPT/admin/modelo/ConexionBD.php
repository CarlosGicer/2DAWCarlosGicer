
<?php

require_once './admin/vendor/autoload.php';

use MongoDB\Client;

class ConexionBD {

    private static $conexion;


    public static function conectar($bd="chatGPT") {

        try {
            //CONEXIÓN A MONGODB CLOUD ATLAS.
           $host = "mongodb+srv://CarlosGicer:gicer666@cluster0.t2cczmv.mongodb.net/chatGPT"; //MongoDB 
            self::$conexion = (new Client($host))->{$bd};
        } catch (Exception $e){
            echo $e->getMessage();
        }
        return self::$conexion;

    }

    public static function cerrar() {
        self::$conexion = null; 
    }


}













?>