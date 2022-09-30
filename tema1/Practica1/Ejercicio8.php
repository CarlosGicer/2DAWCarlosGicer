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

        $combinacion = array(rand(1,49),rand(1,49),rand(1,49),rand(1,49),rand(1,49),rand(1,49));

        $reintegro = rand(1,9);

        foreach($combinacion as $valor){

        
            if($valor < 10){
                echo "0" . $valor . " ";
            }else{
                echo $valor . " ";
            }
            
        }

        echo "</br>Reintegro: " . $reintegro;

    ?>
</body>
</html>