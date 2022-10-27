

    <?php
            include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
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
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pie.php");
    ?>
