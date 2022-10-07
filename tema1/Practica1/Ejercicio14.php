
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
        $notas = array(
            array("Nombre"=>"Ruben","Materia"=>"servidor","Nota"=>4),
            array("Nombre"=>"Emi","Materia"=>"cliente","Nota"=>10),
            array("Nombre"=>"Alex","Materia"=>"diseno","Nota"=>4),
            array("Nombre"=>"Luis","Materia"=>"empresa","Nota"=>6),
            array("Nombre"=>"David","Materia"=>"diseno","Nota"=>7),
            array("Nombre"=>"Carlos","Materia"=>"servidor","Nota"=>9),
            array("Nombre"=>"Felipe","Materia"=>"cliente","Nota"=>2),
            array("Nombre"=>"Pedro","Materia"=>"despliegue","Nota"=>6),
            array("Nombre"=>"Sergio","Materia"=>"empresa","Nota"=>8),
            array("Nombre"=>"Jose","Materia"=>"despliegue","Nota"=>10)
        );


        array_multisort(array_column($notas,"Nota"),SORT_DESC,$notas);

        foreach($notas as $clave => $valor){
            echo $valor["Nombre"] . " " . $valor["Materia"] . " " . $valor["Nota"] . "</br>"; 
        }


        echo "</br></br>";


        array_multisort(array_column($notas,"Nombre"),SORT_DESC,$notas);

        foreach($notas as $clave => $valor){
            echo $valor["Nombre"] . " " . $valor["Materia"] . " " . $valor["Nota"] . "</br>"; 
        }


        echo "</br></br>";



        $cont = 0;
        $media = 0;

        foreach($notas as $clave => $valor){
            $cont++;
            $media += $valor["Nota"];
        }

        echo "Media del curso: " . $media/$cont;


        echo "</br></br>";




        foreach($notas as $clave => $valor){
            if($valor["Nota"]<5){
                echo $valor["Nombre"] . " " . $valor["Materia"] . " " . $valor["Nota"] . "</br>"; 
            }
            
        }

        include_once($_SERVER["DOCUMENT_ROOT"] . "/pie.php");
    ?>
