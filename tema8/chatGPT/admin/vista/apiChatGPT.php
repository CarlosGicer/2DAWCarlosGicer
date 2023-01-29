<?php
class apiChatGPT
{

  public static function chatGPT($texto)
  {

    include('cabecera.php');
    require_once('./admin/vendor/autoload.php');

    $client = new \GuzzleHttp\Client();

    //Vendría del textarea
    $textoArticulo = "Escribe un artículo sobre " . $texto;

    $response = $client->request('POST', 'https://api.openai.com/v1/completions', [
      'body' => '{"model": "text-davinci-003", "prompt": "' . $textoArticulo . '", "temperature": 0, "max_tokens": 1000, "n": 1}',
      'headers' => [
        'Authorization' => 'Bearer sk-5fjE2iQsRsg8CFqi-----wXgnT3BlbkFJ7cQjF4JuN4Wh2QpxDNa4',
        'accept' => 'application/json',
        'content-type' => 'application/json',
      ],
    ]);

    $respuesta = $response->getBody();

    $respuestaJSON = json_decode($respuesta);

    $articuloTxt= $respuestaJSON->choices[0]->text;
    echo "<br>";

    $textoImagen = $texto;
    $response = $client->request('POST', 'https://api.openai.com/v1/images/generations', [
      'body' => '{"prompt": "' . $textoImagen . '", "size": "1024x1024", "n": 1}',
      'headers' => [
        'Authorization' => 'Bearer sk-5fjE2iQsRsg8CFqi-----wXgnT3BlbkFJ7cQjF4JuN4Wh2QpxDNa4',
        'accept' => 'application/json',
        'content-type' => 'application/json',
      ],
    ]);

    $respuesta = $response->getBody();

    $respuestaJSON = json_decode($respuesta);

   $articuloImg= $respuestaJSON->data[0]->url;
   echo"<center>
   <img src='".$articuloImg."' height='500' widht='500'></img>
   <p>".$articuloTxt."</p>
  <a class='btn btn-outline-success text-decoration-none me-5' href='enrutador.php?accion=guardarArticulo&titulo=".$texto."&texto=".$articuloTxt."&imagen=".urlencode($articuloImg)."'>Save</a>
  <a class='btn btn-outline-primary text-decoration-none me-5' href='enrutador.php?accion=mostrarFormulario'>Otro</a>
   </center>";

   

  }
}
