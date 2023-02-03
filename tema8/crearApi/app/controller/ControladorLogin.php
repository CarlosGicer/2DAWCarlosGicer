
<?php
    class ControladorLogin {

        public static function mostrarLogin() {
            VistaLogin::pintarLogin("");
        }

        public static function mostrarFormularioLoginError() {
            VistaLogin::pintarLogin("Error de login, prueba otra vez");
        }


        public static function chequearLogin($email, $password) {

            require_once('vendor/autoload.php');

            $client = new \GuzzleHttp\Client();
     
     
            $response = $client->request('POST', 'http://localhost:3000/crear-api/login', [
                'body' => '{"email":"'.$email.'","password":"'.$password.'"}',
                'headers' => [
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                ],
            ]);
     
            $respuesta = $response->getBody();

            //Error login
            if ($respuesta == "Email o password incorrectos") {
                echo "<script>window.location='enrutador.php?accion=error';</script>";
            }else {
                echo "<script>window.location='enrutador.php?accion=mostrar';</script>";
            }


        }


    }

?>