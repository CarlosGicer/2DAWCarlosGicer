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

    $producto= array(
        array("nombre"=>"Pantalon running", "imagen"=>"img/pantalones.png", "Precio"=>80 , "Categoria"=>"Pantalones running", "Descripcion"=>"Los mejores pantalones de running"),
        array("nombre"=>"Tenis ", "imagen"=>"img/tenis.png", "Precio"=>120 , "Categoria"=>"tenis running", "Descripcion"=>"Los mejores tenis de running"),
        array("nombre"=>"camisa", "imagen"=>"img/camisa.png", "Precio"=>10 , "Categoria"=>"Camisetas", "Descripcion"=>"Increible camisa"),
        array("nombre"=>"algo running", "imagen"=>"img/algo.png", "Precio"=>20 , "Categoria"=>"algo running", "Descripcion"=>"algo de running")
    );


    echo "<table>";
    echo "<thead>";
    echo "  <tr>";
    foreach(array_keys($producto[0]) as $valor)
        echo "<td>".strtoupper($valor)."</td>";
    echo "  </tr>" ;
    echo "</thead>";
    echo "<tbody>";
    foreach($producto as $valor){
        echo "<tr>";

        foreach($valor as $campo){
            echo "<td>";
            echo $campo;
            echo "</td>";

        }
    }   
    ?>
</body>
</html>