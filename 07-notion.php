<?php
include 'includes/funciones.php';
// ----------  generar un array de nombre de cursos -----------
$postfield = '{}';
// llamada a la basedatos  cursos
// cursos = 99fe4ba7a31745ac9c762c250ed5c003
$respuesta2 = minotion('https://api.notion.com/v1/databases/99fe4ba7a31745ac9c762c250ed5c003/query','POST',$postfield);
// Decodificar la respuesta JSON
//print_r ($respuesta2);
$data = $respuesta2;

// Recorrer los resultados para obtener el ID de cada registro
$arrayCursos = [];
if (isset($data['results'])) {
    foreach ($data['results'] as $result) {
        $recordId = $result['id']; // ID generado por Notion
        $recordTitle = $result['properties']['Name']['title'][0]['text']['content']; // Nombre o título del registro

        // Mostrar el ID y el título del registro
        //echo "ID: $recordId, Título: $recordTitle\n";
        $arrayCursos[ $recordId] = $recordTitle;
    }
} else {
    echo "No se encontraron resultados.";
}

//-------------Llama a a categorias -----------------


$postfield = '{}';
// llamada a la basedatos  categoria
// catagorias = d75c7df2c27a49df89bac3d4fc1cc04f
$respuesta = minotion('https://api.notion.com/v1/databases/d75c7df2c27a49df89bac3d4fc1cc04f/query','POST',$postfield);

//print_r  ($respuesta);

// Comenzamos la lista de cursos
$listacurso = '<h2>Categorias</h2><ul>';

// Iteramos por los resultados
foreach ($respuesta['results'] as $valor) {
    // Accedemos directamente a la propiedad "Name" "Nombre"  del objeto "properties"
    $nombrePropiedad = $valor['properties']['Nombre'];

    
    //print_r ($cursos);
    // Verificamos si tiene títulos para procesar
    if (isset($nombrePropiedad['title'])) {
        // Concatenamos los títulos como un ítem de la lista
        foreach ($nombrePropiedad['title'] as $titulo) {
            $listacurso .= '<li>' . $titulo['plain_text'] . '</li>';
        }
         // Vamos a buscar los cursos relacionados
        $cursos =  $valor['properties']['✔️ CURSOS ']['relation'];
        //print_r ($valor['properties']['✔️ CURSOS ']['relation']);
        $listacurso .= '<ul>';
        foreach ($valor['properties']['✔️ CURSOS ']['relation'] as $key => $valor){
          $listacurso .=  "<li> " . $arrayCursos[$valor['id']]  . " </li>";
          
          

        }
        $listacurso .= '</ul>';


    }
}

// Cerramos la lista
$listacurso .= '</ul>';

// Mostramos la lista generada
echo $listacurso;

?>