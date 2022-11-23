<?php
include("lib.php");
//session_destroy();
?>
<?php

  
  if(isset($_GET["letra"])){

    $contiene=false;
    $letra=$_GET["letra"];

    for($i=0; $i < strlen($_SESSION['palabra']); $i++) {
      if ($_SESSION['palabra'][$i] == $letra) {
          $_SESSION['palabraActual'][$i] = $letra;
          $contiene=true;
      }
    } 
  
    if($contiene==false && $_SESSION['contError']<6){
      $_SESSION['contError']++;
    }

    echo '<script>window.location="'."index.php".'"</script>'; 
  }
  

  if (isset($_GET['accion'])) {
      if ($_GET['accion']=='nuevaPartida') {
          session_destroy();
          echo '<script>window.location="'."index.php".'"</script>'; 
      }
  }

?>
