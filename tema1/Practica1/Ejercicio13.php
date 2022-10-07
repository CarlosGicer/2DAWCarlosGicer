
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
        function add(&$array,$valor,$n){
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

        add($array,2,4);
        borrar($array,3);
        pintar($array);
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pie.php");
    ?>
