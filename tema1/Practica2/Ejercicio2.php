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
        $direcionIp = "192.168.11.200";

        $numeros = explode(".", $direcionIp );
        for($i=0;$i<=strlen($direccionIp);$i++){
            echo $numeros." ";

        }


    ?>
</body>
</html>