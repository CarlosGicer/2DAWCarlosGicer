<?php

class VistaFormulario
{

    public static function pintarFormulario()
    {

?>


        <form action="enrutador.php" method="post">
            <div class="input-group">
                <span class="input-group-text">CHATGPT</span>
                <textarea class="form-control" aria-label="With textarea" rows="20" cols="50" name="articulo"></textarea>
            </div>
            <input type="hidden" name="accion" value="generarArticulo">
            <button type="submit" class="btn btn-primary mt-2 mb-3">GENERAR</button>
        </form>
<?php
    }
}
?>