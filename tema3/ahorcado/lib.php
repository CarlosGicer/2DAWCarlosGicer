<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
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

  function pintarFallos(){
    if ($_SESSION['contError'] == 0) {
      echo '<img src="./img/0.png" alt="">';
    } else if ($_SESSION['contError'] == 1) {
        echo '<img src="./img/1.png" alt="">';
    } else if ($_SESSION['contError'] == 2) {
        echo '<img src="./img/2.png" alt="">';
    } else if ($_SESSION['contError'] == 3) {      
        echo '<img src="./img/3.png" alt="">';
    } else if ($_SESSION['contError'] == 4) {
        echo '<img src="./img/4.png" alt="">';
    } else if ($_SESSION['contError'] == 5) {
        echo '<img src="./img/5.png" alt="">';
    } else if ($_SESSION['contError'] == 6) {
        echo '<img src="./img/6.png" alt="">';
        echo "<br>";
    }
  }
?>
