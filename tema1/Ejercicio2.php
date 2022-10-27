
    <?php
         include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");

        $cadena1 = "Hola a todos ";
        $cadena2 = "mi nombre es Carlos";
        $cadena3 = $cadena1 . $cadena2;

        $cadena1 = $cadena1 . $cadena1 . $cadena2;

        echo $cadena3 . "</br>";
        echo $cadena1;

        include_once($_SERVER["DOCUMENT_ROOT"] . "/pie.php");
    ?>



