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

        $radio = rand(100,500)/100;

        echo "El radio es " . $radio;

        $cubo = pow($radio, 3);
        $volumen = (4/3) * pi() * $cubo;
        echo "</br>" . "El volumen es de " . $volumen;

    ?>
</body>
</html>