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

        $array = array(2,3,4,5,6);

        foreach($array as $valor){

            for($i = 1; $i < 11; $i++){

                echo $valor . " * " . $i . " = " . $valor*$i . "</br>";

            }

            echo "</br>";

        }

    ?>
</body>
</html>