
    
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
        for($i= 0;$i<5;$i++){
            $a = rand(100,255);
            $b = rand(100,255);
            $c = rand(100,255);

            $color = 'rgb('.$a.','.$b.','.$c.')';
            echo '<svg height="100" width="100">  
                <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="'.$color.'" />
                </svg>';

        }
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pie.php");
    ?>



