<?php
include("cabecera.php");
?>
<style>
    h2 {
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        padding: 40px;
    }
</style>

<h2>Nuevo Proyecto</h2>

<form class="user" action="controlador.php" method="post">
    <div class="form-group">
        <input type="hidden" class="form-control form-control-user" name="accion" id="exampleInputPassword" value="nuevo">
    </div>

    <div class="form-group">
        <input type="text" class="form-control form-control-user" name="name" id="exampleInputPassword" placeholder="Nombre del proyecto...">
    </div>


    <div class="form-group">
        <input type="text" class="form-control form-control-user" name="inicio" id="exampleInputPassword" placeholder="Fecha inicio">
    </div>


    <div class="form-group">
        <input type="text" class="form-control form-control-user" name="final" id="exampleInputPassword" placeholder="Fecha fin">
    </div>


    <div class="form-group">
        <input type="text" class="form-control form-control-user" name="dia" id="exampleInputPassword" placeholder="Dias">
    </div>


    <div class="form-group">
        <input type="text" class="form-control form-control-user" name="porcentaje" id="exampleInputPassword" placeholder="Progreso">
    </div>


    <div class="form-group">
        <input type="text" class="form-control form-control-user" name="importancia" id="exampleInputPassword" placeholder="Importancia(1-5)">
    </div>


    <button type="submit" class="btn btn-primary btn-user btn-block">
        Guardar
    </button>
</form>






<?php


include("pie.php");

?>