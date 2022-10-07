
    <?php

        include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
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

        include_once($_SERVER["DOCUMENT_ROOT"] . "/pie.php");
    ?>
