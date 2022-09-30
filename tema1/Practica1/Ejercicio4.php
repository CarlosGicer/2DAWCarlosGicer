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

        try {

            $a = 2;
            $b = -2;
            $c = -1;
            $operacion = pow($b,2) -4 * $a * $c;

            if($operacion < 0 || $a == 0){
                throw new Exception('ERROR detectado');
            }
            $positivo = (-$b + sqrt($operacion)) / (2 * $a);
            $negativo = (-$b - sqrt($operacion)) / (2 * $a);

            echo "Primer resultado: " . $positivo . "</br>"; 
            echo "Segundo resultado: " . $negativo;

        } catch (Exception $e){
            echo "Sin solucion";
        }

    ?>
</body>
</html>