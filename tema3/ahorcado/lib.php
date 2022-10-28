<?php
session_start();
?>
<?php

function pintarLetras(){
  echo "<br>";

  echo "<a href='controlador.php?letra=a'>A &nbsp;</a>";
  echo "<a href='controlador.php?letra=b'>B &nbsp;</a>";
  echo "<a href='controlador.php?letra=c'>C &nbsp;</a>";
  echo "<a href='controlador.php?letra=d'>D &nbsp;</a>";

  echo "<a href='controlador.php?letra=e'>E &nbsp;</a>";
  echo "<a href='controlador.php?letra=f'>F &nbsp;</a>";
  echo "<a href='controlador.php?letra=g'>G &nbsp;</a>";
  echo "<a href='controlador.php?letra=h'>H &nbsp;</a>";

  echo "<a href='controlador.php?letra=i'>I &nbsp;</a>";
  echo "<a href='controlador.php?letra=j'>J &nbsp;</a>";
  echo "<a href='controlador.php?letra=k'>K &nbsp;</a>";
  echo "<a href='controlador.php?letra=l'>L &nbsp;</a>";

  echo "<a href='controlador.php?letra=m'>M &nbsp;</a><br>";
  echo "<a href='controlador.php?letra=n'>N &nbsp;</a>";
  echo "<a href='controlador.php?letra=o'>O &nbsp;</a>";
  echo "<a href='controlador.php?letra=p'>P &nbsp;</a>";

  echo "<a href='controlador.php?letra=q'>Q &nbsp;</a>";
  echo "<a href='controlador.php?letra=r'>R &nbsp;</a>";
  echo "<a href='controlador.php?letra=s'>S &nbsp;</a>";
  echo "<a href='controlador.php?letra=t'>T &nbsp;</a>";

  echo "<a href='controlador.php?letra=u'>U &nbsp;</a>";
  echo "<a href='controlador.php?letra=v'>V &nbsp;</a>";
  echo "<a href='controlador.php?letra=w'>W &nbsp;</a>";
  echo "<a href='controlador.php?letra=x'>X &nbsp;</a>";

  echo "<a href='controlador.php?letra=y'>Y &nbsp;</a>";
  echo "<a href='controlador.php?letra=z'>Z &nbsp;</a>";
}

function palabra(){
  
    $arrayPalabras=["casa","pelota","juego","pez","coche", "saco","cine","pato","loco","secador","ordenador"];
    $palabra=$arrayPalabras[rand(0,sizeof($arrayPalabras)-1)];
    return $palabra;
}

function palabraIncognita(){
  for($i=0; $i<=strlen($_SESSION['palabra'])-1; $i++ ){
    $_SESSION['palabraActual'][$i] = "*";
  }
}

?>
