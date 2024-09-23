<?php
include 'includes/funciones.php';

$postfield = '{

    "filter": {
        "property": "Web",
        "checkbox": {
        "equals": true
        }
    },
    
    "sorts": [
        {
        "property": "Name",
        "direction": "ascending"
        }
    ]
  
}';

$respuesta = minotion('https://api.notion.com/v1/databases/99fe4ba7a31745ac9c762c250ed5c003/query','POST',$postfield);

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