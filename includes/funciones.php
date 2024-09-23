<?php 
////////////////////////////////////////////////////////
//         funciones comunes a la aplicaciones        //
////////////////////////////////////////////////////////


function minotion($url,$metodo,$postfield)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => $metodo,
    CURLOPT_POSTFIELDS => $postfield,
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
    return ($respuesta);
}
?>