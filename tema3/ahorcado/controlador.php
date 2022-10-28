<?php
include("lib.php");
//session_destroy();
?>

<?php

  $contiene=false;
  $letra=$_GET["letra"];

  for($i=0; $i < strlen($_SESSION['palabra']); $i++) {
    if ($_SESSION['palabra'][$i] == $letra) {
        $_SESSION['palabraActual'][$i] = $letra;
        $contiene=true;
    }
  }

  if($contiene==false){
    $_SESSION['contError']++;
  }

  /*if(isset($_POST["repetir"])){
    session_destroy();
  }*/
  echo '<script>window.location="'."index.php".'"</script>'; 
?>
