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

        $array = array(1,2,3,4,5,6,7,8,9,10);
        $cont = 0;

        for($i = 1; $i < 11; $i++){
            if($i % 2 == 0){
                $cont+=$array[$i-1];
            }else{
                echo $array[$i-1] . " ";
            }
        }

    echo "</br>" . $cont;
    ?>
</body>
</html>