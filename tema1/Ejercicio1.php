

    <?php
        include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");

        $n = rand(1,30);
        $n2 = rand(1,30);

        $resta = $n - $n2;
        $division = $n / $n2;

        echo "Los numeros generados son: " . $n . " y " . $n2 . "</br>";
        echo "Resta: " . $resta . ", Division: " . $division;

        include_once($_SERVER["DOCUMENT_ROOT"] . "/pie.php");
    ?>

