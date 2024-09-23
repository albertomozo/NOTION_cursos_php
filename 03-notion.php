<?php
/* codigo de postma */


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.notion.com/v1/databases/99fe4ba7a31745ac9c762c250ed5c003/query',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    
    "sorts": [
        {
        "property": "Name",
        "direction": "ascending"
        }
    ]
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer secret_M0mZfsEal1vLmwfCGJJbgPKsBp7SRnKjMEonmtQMbAx',
    'Content-Type: application/json',
    'Notion-Version: 2022-02-22',
    'Cookie: __cf_bm=XQoB9e6v9LOgbHdUqiSyiFQ8dJnajmaPtwdGoUBCvCI-1726570270-1.0.1.1-Kyx0IIjmfHB7s9rXqgxdGphb1.ihMIt_H.mhpFXTQfAoVCr7a9YDHVpYmO0Q5CZs9om4oBoHluKWd2uiiRn2PA; _cfuvid=EwDrCJMEX8IAV6mnl042Nt4MOMIhgTjz.sXUR_neUhg-1726570270922-0.0.1.1-604800000'
  ),
));
$response = curl_exec($curl);

curl_close($curl);
// he solicitado una refactorizacion a chatgpt
$respuesta = json_decode($response, true);

// Comenzamos la lista de cursos
$listacurso = '<ul>';

// Iteramos por los resultados
foreach ($respuesta['results'] as $valor) {
    // Accedemos directamente a la propiedad "Name" del objeto "properties"
    $nombrePropiedad = $valor['properties']['Name'];

    // Verificamos si tiene títulos para procesar
    if (isset($nombrePropiedad['title'])) {
        // Concatenamos los títulos como un ítem de la lista
        foreach ($nombrePropiedad['title'] as $titulo) {
            $listacurso .= '<li>' . $titulo['plain_text'] . '</li>';
        }
    }
}

// Cerramos la lista
$listacurso .= '</ul>';

// Mostramos la lista generada
echo $listacurso;



?>