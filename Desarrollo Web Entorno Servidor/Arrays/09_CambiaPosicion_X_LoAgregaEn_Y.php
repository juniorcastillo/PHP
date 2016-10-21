<!DOCTYPE html>
<!--
Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
continuación se mostrará el contenido de ese array junto al índice (0 – 9). Seguidamente el programa
pedirá dos posiciones a las que llamaremos “inicial” y “final”. Se debe comprobar que inicial es
menor que final y que ambos números están entre 0 y 9. El programa deberá colocar el número de
la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno.
Al final se debe mostrar el array resultante.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>

            table,tr,td{
                border:greenyellow 2px outset;
            }
        </style>
    </head>
    <body>
        <h1>Array normal</h1>
        <?php
        $guardar = [];
        $numero = "";
        $contador = 1;
        $numeroTexto = "";
        $posUtima = 0;
        $cambia = 0;
        $posicion = 0;




        if (isset($_REQUEST['numero'])) {
            //Tomo los numeros introducido
            $numero = $_REQUEST['numero'];

            //Cuento las veces que han introducido numeros
            $contador = $_REQUEST['contador'];

            //Guardo la variable que pego los numeros (se le agrega un espacio de mas delante que se lo elimino mas abajo)
            $numeroTexto = $_REQUEST['numeroTexto'];

            //Guardos los numeros en el arrray que su division es un espacio (esta en el formulario)
            //El contador empieza desde 1
        }
        if (!($contador <= 4)) {//Cuento las veces 
            //Pego elultimo valor que mando por teclado
            $guardar = explode(" ", $numeroTexto . " " . $_REQUEST['numero']);
            //Elimina el espacio que se guarda en la posicion 0y1
            array_shift($guardar);
            array_shift($guardar);

            echo '<table><tr>'; //abro el tr delcontador
            //Muestro el contador
            for ($i = 0; $i < count($guardar); $i++) {
                //Muestro los numeros que se van guardando en el array


                echo '<td>' . $i . '</td>';
            }

            echo ' </tr>'; //cierro el tr del contador

            echo '<tr>'; //abro el tr del array
            //
                //Muestro el array con un blucle
            for ($i = 0; $i < count($guardar); $i++) {
                //Muestro los numeros que se van guardando en el array

                echo '<td>' . $guardar[$i] . '</td>';
            }

            echo ' </tr>'; //cierro el tr del contador
            echo '</table>';
        




        //----------------------------Cambio el valor -----------------------------------------------------------------
   
             $guardar = explode(" ", $numeroTexto . " " . $_REQUEST['numero']);
            $pos1 = $_REQUEST['valor1'];
            $pos2 = $_REQUEST['valor2'];

            for ($i = 0; $i < count($guardar); $i++) {
                //Guardo el valor que esta en la posicion 2 y le pongo el valor de la posicion 1
                if ($i == $pos2) {
                    $cambia = $guardar[$i];
                    $guardar[$pos2] = $guardar[$pos1];
                }
            }
            //Guardo el valor de la posicion 2
            $guardar[$pos1] = $cambia;

            echo '<h1>Array cambiado </h1>';


            //--------------------Muestro el array cambiado---------------------------------------------------------------------------
            echo '<table><tr>'; //abro el tr delcontador
            //Muestro el contador
            for ($i = 0; $i < count($guardar) ; $i++) {
                //Muestro los numeros que se van guardando en el array


                echo '<td>' . $i . '</td>';
            }

            echo ' </tr>'; //cierro el tr del contador
         
           echo '<tr>'; //abro el tr del array
            //
                //Muestro el array con un blucle
            for ($i = 0; $i < count($guardar); $i++) {
                //Muestro los numeros que se van guardando en el array

                echo '<td>' . $guardar[$i] . '</td>';
            }

            echo ' </tr>'; //cierro el tr del contador
            echo '</table>';
        }


        if ($contador <= 4) {
            ?>


            <h1>Introduzca 10 numero por teclado</h1>
            <form action="#" method="get">    

                <input type="number" name ="numero" autofocus>
                <input type="hidden" name="contador" value="<?= ++$contador ?>"><!--Mando el contador y lo guardo-->
                <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $numero ?>">
                <input type="submit" value="OK">
            </form>
            <br><br><br>
            <?php
        } 
         

            echo '
            <form action="#" method="get">
                <input type="number" name ="valor1" autofocus required>
                 <input type="hidden" name="contador" value="<?= ++$contador ?>"><!--Mando el contador y lo guardo-->
                <input type="number" name ="valor2"  required>
                <input type="submit" value="OK">
            </form>';
        
        ?>
    </body>
</html>
