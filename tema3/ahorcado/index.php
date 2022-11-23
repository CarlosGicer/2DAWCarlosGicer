<?php
include("lib.php");
//session_destroy();
?>

<body>
<?php
   if(!isset($_SESSION['palabra'])){
        
        $_SESSION['palabra'] = palabra();
        $_SESSION['palabraActual']= $_SESSION['palabra'];
        $_SESSION['contError'] = 0;

        palabraIncognita();
    }
        
    
    echo  $_SESSION['palabraActual'];
    echo "<br>";
    echo  $_SESSION['palabra']; 

    pintarLetras();

    echo"<p>Errores: ".$_SESSION['contError'];
    
    
    $_SESSION ['letrasUsadas'] =[];

    pintarFallos();
    echo "<h3 class='text-center '><a href='controlador.php?accion=nuevaPartida' class='btn btn-outline-danger' class='text-center'>Volver a Jugar</a></h3>";
?>

</body>
</html>

