<?php

    class ControladorSongs {

        public static function mostrarSongs($token) {
            VistaSong::mostrarSongs($token);
        }

        public static function mostrarTop($token) {
            VistaTop::mostrarSongsTop($token);
        }

        public static function valorar($id,$valoracion,$token) {
            require_once('vendor/autoload.php');

            $client = new \GuzzleHttp\Client();
            $response = $client->request('PUT', 'http://MiIp:3000/api/song/valorar/'.$id, [
             'body' => '{"puntuacion":"'.$valoracion.'"}',
                'headers' => [
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                    'authorization' => $token
                ],
            ]);
     
            $respuesta = $response->getBody();
            $var = json_decode($respuesta, true);
            echo "<script>window.location='enrutador.php?accion=mostrar';</script>";
          
        }
    }