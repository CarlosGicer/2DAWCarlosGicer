
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


        $n = rand(1,30);
        $n2 = rand(1,30);

        $resta = $n - $n2;
        $division = $n / $n2;

        echo "Los numeros generados son: " . $n . " y " . $n2 . "</br>";
        echo "Resta: " . $resta . ", Division: " . $division;

    ?>
</body>
</html>
