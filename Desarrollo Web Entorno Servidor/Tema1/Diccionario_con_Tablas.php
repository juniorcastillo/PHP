<!DOCTYPE html>
<!--
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table{
                margin:auto;
            }
        </style>
    </head>
    <body>
        <?php
            echo "<table> <tr>";
            echo "<tr><td>Red</td> <td>Rojo</td> </tr>";
            echo "<tr><td>Blue</td> <td>Azul</td></tr>";
            echo "<tr><td>What</td> <td>Que</td></tr>";
            echo "<tr><td>Where</td> <td>Donde</td></tr>";
            echo "<tr><td>Go</td> <td>ir</td></tr>";
            echo "<tr><td>Went</td> <td>Fui</td></tr>";
            echo "<tr><td>Red</td> <td>Rojo</td></tr>";
            echo "<tr><td>Red</td> <td>Rojo</td></tr>";
            echo "<tr><td>Red</td> <td>Rojo</td></tr></table>";
            
        ?>
    </body>
</html>
