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

        $cadena1 = "Hola a todos ";
        $cadena2 = "mi nombre es Carlos";
        $cadena3 = $cadena1 . $cadena2;

        $cadena1 = $cadena1 . $cadena1 . $cadena2;

        echo $cadena3 . "</br>";
        echo $cadena1;

    ?>
</body>
</html>


