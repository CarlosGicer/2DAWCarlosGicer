<?php
include("lib.php");
//session_destroy();
?>

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

?>
<!--<form action="controlador.php">
    <button type="submit" name="repetir">Jugar Otra Vez</button>
</form>-->
