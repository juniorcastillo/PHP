<!DOCTYPE html>
<!--
Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
Los números que se han cambiado deben aparecer resaltados de un color diferente.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            
            span{
                
                color:red;
            }
        </style>
    </head>
    <body>
        <h1>Array aleatorio</h1>
        <?php
        for ($i = 0; $i < 100; $i++) {
            $numero[$i] = rand(0, 20);
            echo $numero[$i] . " ";
        }
        echo "<br><br> <h1>Array cambiado</h1>";
        if ((isset($_REQUEST['numero1'])) && (isset($_REQUEST['numero1']))) {
            $valor1 = $_REQUEST['numero1'];
            $valor2 = $_REQUEST['numero2'];


            for ($i = 0; $i < count($numero); $i++) {//Cambio el valor1 por el valor2
                if ($numero[$i] == $valor1) {
                    $numero[$i] = $valor2;
                    echo "<span>" .$numero[$i] . "</span> ";
                } else {
                    echo $numero[$i] . " ";
                }
            }
        } else {
            ?>

            <h1>Introduzca 2 numeros por teclado:</h1>
            <form action="cambiaOcurrecia.php" method="get">


                <input type="number" name ="numero1" autofocus required>
                <input type="number" name ="numero2"  required>
                <input type="submit" value="OK">
            </form>
        <?php } ?>
    </body>
</html>
