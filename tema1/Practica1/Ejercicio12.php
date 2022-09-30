<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $diccionario = array();

        $diccionario["hola"] = "hello";
        $diccionario["rojo"] = "red";
        $diccionario["verde"] = "green";
        $diccionario["madera"] = "wood";
        $diccionario["teclado"] = "keyboard";
        $diccionario["portatil"] = "laptop";

        $diccionario["caja"] = "box";
        $diccionario["juego"] = "game";
        $diccionario["jugar"] = "play";
        $diccionario["mesa"] = "table";
        $diccionario["amigo"] = "friend";

        $diccionario["raton"] = "mouse";
        $diccionario["pantalla"] = "screen";
        $diccionario["movil"] = "phone";
        $diccionario["casa"] = "house";
        $diccionario["calle"] = "street";

        $diccionario["libro"] = "book";
        $diccionario["tienda"] = "shop";
        $diccionario["coche"] = "car";
        $diccionario["pelicula"] = "film";
        $diccionario["adios"] = "bye";

        echo "Escribe una palabra: ";
        $palabra = "bye";
        $buscar = 4;
        foreach($diccionario as $clave => $valor){
          
            
            if(strcmp($palabra, $clave) === 0 || strcmp($palabra,$valor) === 0){
                $buscar = 0;
                echo "Palabra encontrada";
                echo "</br>" . $clave . " : " .  $valor;
            }
        
        }

        if($buscar != 0){
            echo "Palabra no encontrada";
        }

        echo "</br>";
        echo "</br>";

        foreach($diccionario as $clave => $valor){

                echo $clave . " : " .  $valor;
                echo "</br>";
            
        }

    ?>
</body>
</html>