<?php
class VistaTop
{
    public static function mostrarSongsTop($token)
    {
        echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APIs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>';

      
        require_once('vendor/autoload.php');


        $guzzle = new GuzzleHttp\Client(['base_uri' => 'MiIp:3000']);
        $response = $guzzle->get('api/song/top/top10', [
            'headers' => ['Authorization' => $token]
        ])->getBody();

        $data = json_decode($response);
        echo '<a href="enrutador.php?accion=mostrar" class="btn btn-success mb-2">Ver Top</a><br>';
        
        echo "  <table class='table ms-2'>
        <thead class='table-dark'>
        <tr>
        <th scope='col'>Titulo</th>
        <th scope='col'>Grupo</th>
        <th scope='col'>Duracion</th>
        <th scope='col'>Año</th>
        <th scope='col'>Genero</th>
        <th scope='col'>Puntuacion</th>
        <th scope='col'>Valorar</th>
        <tr>    
        </thead>
        <tbody>";

        foreach ($data as $key) {
            echo '<form action="enrutador.php" method="post"> ';
            echo "<tr>";

            echo " <td>".$key->titulo."</td> ";
            echo " <td>".$key->grupo."</td> ";
            echo " <td>".$key->duracion." minutos</td> ";
            echo " <td>".$key->anio."</td> ";
            echo " <td>".$key->genero."</td> ";
            echo " <td>".$key->puntuacion."
            <button type='submit' class='btn btn-primary ms-5'>Valorar</button></td> ";
            echo '<td>'. '<input type="range" min=1 max=5 name="valoracion">' . '</td>';
           
            echo "<td> <input type='hidden' name='id' value='".$key->_id."'>";
            echo " <input type='hidden' name='accion' value='valorar'>";
            
            echo "<tr>";
            echo "</form>";
        };

       echo" </tbody>
        </table>";

      

        echo '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script>';
       
        echo '</script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>';
    }
}
