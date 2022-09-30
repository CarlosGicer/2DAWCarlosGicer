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

        function anadir(&$array,$valor,$n){
            for($i = 0;$i < $n; $i++){
                array_push($array,$valor);
            }  
        
        }


        function pintar($array){
            for($i = 0;$i < count($array); $i++){
                echo $array[$i]. " ";
            }  
        
        }

        function borrar(&$array,$n){
            for($i = 0;$i < $n; $i++){
                array_shift($array);
            } 
            
        }

        function vaciar(&$array){

            $array = array();

        }

        $array = array();

        anadir($array,2,4);
        borrar($array,3);
        pintar($array);

    ?>
</body>
</html>