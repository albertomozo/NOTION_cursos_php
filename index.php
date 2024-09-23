<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integración con Notion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Integración con Notion</h1>

<ul>
    <?php
    for ($i = 1; $i <= 7; $i++) {
        $pageNumber = str_pad($i, 2, "0", STR_PAD_LEFT);
        echo "<li><a href='{$pageNumber}-notion.php'>Página {$pageNumber} - Integración con Notion</a></li>";
    }
    ?>
    <a href="README.md">README.md</a>
</ul>

</body>
</html>
