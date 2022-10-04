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
        $direccionIp = "192.168.11.200";

        $numeros = explode(".", $direccionIp );

        echo"Direccion IP= ".$direccionIp."<br><br>";
        for($i=0;$i<sizeof($numeros);$i++){
            echo "Numero".($i+1)."=".$numeros[$i]."<br>";

        }


    ?>
</body>
</html>