

    <?php
        include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
        $array = array(2,3,4,5,6);

        foreach($array as $valor){

            for($i = 1; $i < 11; $i++){

                echo $valor . " * " . $i . " = " . $valor*$i . "</br>";

            }

            echo "</br>";

        }
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pie.php");
    ?>
