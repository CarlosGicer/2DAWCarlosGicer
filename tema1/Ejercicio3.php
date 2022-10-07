
    <?php
        
        include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
        
        $radio = rand(100,500)/100;

        echo "El radio es " . $radio;

        $cubo = pow($radio, 3);
        $volumen = (4/3) * pi() * $cubo;
        echo "</br>" . "El volumen es de " . $volumen;

        include_once($_SERVER["DOCUMENT_ROOT"] . "/pie.php");

    ?>