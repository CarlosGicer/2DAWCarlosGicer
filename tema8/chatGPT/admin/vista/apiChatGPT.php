<?php
class apiChatGPT
{

  public static function chatGPT($texto)
  {


    require_once('./admin/vendor/autoload.php');

    $client = new \GuzzleHttp\Client();

    //Vendría del textarea
    $textoArticulo = "Escribe un artículo sobre " . $texto;

    $response = $client->request('POST', 'https://api.openai.com/v1/completions', [
      'body' => '{"model": "text-davinci-003", "prompt": "' . $textoArticulo . '", "temperature": 0, "max_tokens": 1000, "n": 1}',
      'headers' => [
        'Authorization' => 'Bearer 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',
        'accept' => 'application/json',
        'content-type' => 'application/json',
      ],
    ]);

    $respuesta = $response->getBody();

    $respuestaJSON = json_decode($respuesta);

    echo $respuestaJSON->choices[0]->text;
    echo "<br>";

    $textoImagen = $texto;
    $response = $client->request('POST', 'https://api.openai.com/v1/images/generations', [
      'body' => '{"prompt": "' . $textoImagen . '", "size": "1024x1024", "n": 1}',
      'headers' => [
        'Authorization' => 'Bearer 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',
        'accept' => 'application/json',
        'content-type' => 'application/json',
      ],
    ]);

    $respuesta = $response->getBody();

    $respuestaJSON = json_decode($respuesta);

    echo $respuestaJSON->data[0]->url;
  }
}
