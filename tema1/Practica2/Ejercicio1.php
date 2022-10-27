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

    function convertirClientes($nombres, $opcion){

        for($i=0;$i<sizeof($nombres);$i++){
            switch($opcion){
                case "L":
                    echo strtolower($nombres[$i]."&nbsp;");
                    break;
                case "U":
                    echo strtoupper($nombres[$i]."&nbsp;");
                    break;
                case "M":
                    echo strtolower( ucfirst($nombres[$i]."&nbsp;") );
                    break;
            }
        }

    }


    $nombres = array("Cosentino", "Garciden", "Deretil", "Makito", "Globomatik");

    $opcion1 = "L";
    $opcion2 = "U";
    $opcion3 = "M";
    echo"Con la L<br>";
    convertirClientes($nombres, $opcion1);
    echo"<br>Con la U<br>";
    convertirClientes($nombres, $opcion2);
    echo"<br>Con la M<br>";
    convertirClientes($nombres, $opcion3);

    ?>
</body>
</html>