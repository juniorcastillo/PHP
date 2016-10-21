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


        <?php
        $contador = 0;


        $numeroTexto = "";
        if (!isset($_REQUEST['numero1'])) {//Primero creo el array
            echo '  <h1>Array aleatorio</h1>';
    

            for ($i = 0; $i < 100; $i++) {
                $numero[$i] = rand(0, 20);

                echo $numero[$i] . " ";
            }
        }
        
        if ((isset($_REQUEST['numero1'])) && (isset($_REQUEST['numero1']))) {//Cambio el valor
            $numeroTexto = $_REQUEST['texto']; //recupero el valor de text( es el valor del array`para que no se borre el array antiguo)
            $numero = explode(" ", $numeroTexto);//El array creado para que no se borre lo guardo aqui
            $valor1 = $_REQUEST['numero1'];
            $valor2 = $_REQUEST['numero2'];
            echo '<h1>Array antiguo</h1>';
             for ($i = 0; $i < count($numero); $i++) {
                 
                 echo $numero[$i] . " ";
             }
            echo "<br><br> <h1>Array cambiado</h1>";
            for ($i = 0; $i < count($numero); $i++) {//Cambio el valor1 por el valor2
                if ($numero[$i] == $valor1) {
                    $numero[$i] = $valor2;
                    echo "<span>" . $numero[$i] . "</span> ";
                } else {
                    echo $numero[$i] . " ";
                }
            }
        } else {
            ?>

            <h1>Introduzca 2 numeros por teclado:</h1>
            <form action="#" method="get">
                <input type="hidden"  name="texto" value="<?= $numeroTexto = implode(" ", $numero) ?>" >
                <input type="number" name ="numero1" autofocus required>
                <input type="number" name ="numero2"  required>
                <input type="submit" value="OK">
            </form>
        <?php } ?>
    </body>
</html>
