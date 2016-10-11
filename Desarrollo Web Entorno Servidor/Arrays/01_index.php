<!DOCTYPE html>
<!--
Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
los tres arrays dispuesto en tres columnas.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Definir 20 array</title>
    </head>
    <body>
        <?php
        for ($i = 0; $i < 20; $i++) {
            $numero[$i] = rand(5, 15);
            $cuadrado[$i] = pow($numero[$i], 2);
            $cubo [$i] = pow($numero[$i], 3);
        }
        echo '<h1> Array numero</h1>';


        for ($i = 0; $i < 20; $i++) {


            echo $numero[$i] . ",";
        }


        echo '<br><h1> Array cuadrado</h1>';


        for ($i = 0; $i < 20; $i++) {


            echo $cuadrado[$i] . ",";
        }
        echo '<h1> Array cubo</h1>';


        for ($i = 0; $i < 20; $i++) {


            echo $cubo[$i] . ",";
        }
        ?>
    </body>
</html>
