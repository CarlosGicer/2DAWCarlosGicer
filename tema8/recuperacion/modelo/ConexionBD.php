<?php

    require_once './vendor/autoload.php';

    use MongoDB\Client;

    class ConexionBD {

        private static $conexion;


        public static function conectar($bd="Steam") {

            try {
               
                $host = "mongodb+srv://CarlosGicer:gicer666@cluster0.t2cczmv.mongodb.net/Steam"; //MongoDB 
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