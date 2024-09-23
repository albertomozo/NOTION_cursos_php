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

// lamada a la basedatos cursos filtrada por el campo web
$respuesta = minotion('https://api.notion.com/v1/databases/99fe4ba7a31745ac9c762c250ed5c003/query','POST',$postfield);

// Comenzamos la lista de cursos
$listacurso = '<h2>Lista cursos</h2><ul>';

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
//-------------otra llmada -----------------


$postfield = '{}';
// llamada a la basedatos  categoria
// catagorias = d75c7df2c27a49df89bac3d4fc1cc04f
$respuesta = minotion('https://api.notion.com/v1/databases/d75c7df2c27a49df89bac3d4fc1cc04f/query','POST',$postfield);

//print_r  ($respuesta);

// Comenzamos la lista de cursos
$listacurso = '<h2>Categorias</h2><ul>';

// Iteramos por los resultados
foreach ($respuesta['results'] as $valor) {
    // Accedemos directamente a la propiedad "Name" del objeto "properties"
    $nombrePropiedad = $valor['properties']['Nombre'];

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