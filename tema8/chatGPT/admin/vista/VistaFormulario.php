<?php

class VistaFormulario
{

    public static function pintarFormulario()
    {
        include('./blog/vista/cabecera.php');
?>

        <center class="mt-5">
            <form action="enrutador.php" method="post">
                <div class="input-group">
                    <h2 class="input-group-text me-3">CHATGPT</h2>
                    <textarea class="form-control" aria-label="With textarea" rows="20" cols="50" name="articulo"></textarea>
                </div>
                <input type="hidden" name="accion" value="generarArticulo">
                <button type="submit" class="btn btn-primary mt-5 mb-3">GENERAR</button>
                
            </form>
        </center>

<?php
       
    }
}
?>