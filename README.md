# Aplicación conectada a NOTION

[![notion](https://img.shields.io/badge/notion-000000?style=for-the-badge&logo=notion&logoColor=white)](https://pretty-streetcar-ee4.notion.site/99fe4ba7a31745ac9c762c250ed5c003?v=bfb15a01426d46bab38c82535b0b590d)

Ejemplos de codigo en PHP y Phyton para usar la API de Notion. Son los ejercicos de la presentación Notion-Developer https://docs.google.com/presentation/d/1v1USzbwEwoH0-Iz-hUi6vXPtWIH9meBNFXwxdlacf78/edit?usp=sharing


Como el Bearen token, sólo tiene permisos de lectura, no se puede modificar la Base de datos, solo modificar.

Por lo tantop eres libre de probar los accesos y obtener la información como desees. Si quieres puede compartir el codigo conmigo.


## 01-notion.php
Obtención de los datos en bruto  a través de POSTMAN usando CURL

## 02-notion.php

Sacamos los nombres de los cursos

## 03-notion.php

Refactorizamos el codigo anterior para que sea más claro

## 04-notion.php

Vamos a mostrar solo los que tengan la marca web activa,para ello cambiamos el filtro como sigue

```{
    "filter": {
        "property": "Web",
        "checkbox": {
        "equals": true
        }
    }
}
```
## 05-notion.php

En este ejercicio hemos creado un fichero includes/funciones.php en el que vamos a incluir los  codigo  que se van a repetir habitualmente.

```php
    function minotion($url,$metodo,$postfield)
    {
        ....
    }
```
## 06-notion.php

Llamadas multiples a la funcion. El codigo de mostrar solo el titulo es el mismo, salvo que hay que campiar el nombre del campo (Name -> Nombre)

## 07-notion.php

Vamos a obtener los cursos relacionados. En este ejercicio obtenemod el id de las categorias y lo asociamos a un array en el que previamente hemos guardado los nombres de todos los cursos.


## <a href="http://sistemasinformacion.free.nf/" target="_blank">ver en web</a>








## 10-notion-http.py

Codigo copiado de POSTMAN usando http

## 10-notion.py

Codigo copiado de POSTMAN usando request.
No funciona por que la instalación  de mi equipo no lo permite.

## 11-notion-cursos.py

Visializacion de cursos


