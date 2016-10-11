<!DOCTYPE html>
<!--
Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una
tabla. Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto
de números (los que no son primos) de tal forma que no se pierda ninguno. Al final se debe mostrar
el array resultante.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 8</title>
        <style>

            table,tr,td{
                border:greenyellow 2px outset;
            }
        </style>

    </head>
    <body>

        <h1>Array normal</h1>
        <?php
        $aux = [];
        $numero = "";
        $contador = 1;
        $numeroTexto = "";
        $posUtima = 0;
        $presentar;
        $posicion = 0;



        if (isset($_REQUEST['numero'])) {
            //Tomo los numeros introducido
            $numero = $_REQUEST['numero'];

            //Cuento las veces que han introducido numeros
            $contador = $_REQUEST['contador'];
            $presentar = $contador;


            //Guardo la variable que pego los numeros (se le agrega un espacio de mas delante que se lo elimino mas abajo)
            $numeroTexto = $_REQUEST['numeroTexto'];

            //Guardos los numeros en el arrray que su division es un espacio (esta en el formulario)
            $guardar = explode(" ", $numeroTexto);

            //El contador empieza desde 1

            if (!($contador <= 10)) {//Cuento las veces 
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
             
//------------------------------------ Cambio el array------------------------------------------------------------------------
               
                 
                foreach ($guardar as $valor){
                    
                    if(esPrimo($valor)){
                      $aux[]=$valor;
                    }
                }


                foreach ($guardar as $valor){
                    
                    if(!(esPrimo($valor))){
                        $aux[]=$valor;
                    }
                }

//------------------------Muentro el array ordenado---------------------------------------------
                echo '<br><br> <h1>Array resultado</h1>';
                  echo '<table><tr>'; //abro el tr delcontador
                //Muestro el contador
                for ($i = 0; $i < count($aux); $i++) {
                    //Muestro los numeros que se van guardando en el array


                    echo '<td>' . $i . '</td>';
                }

                echo ' </tr>'; //cierro el tr del contador

                echo '<tr>'; //abro el tr del array
                //
                //Muestro el array con un blucle
                for ($i = 0; $i < count($aux); $i++) {
                    //Muestro los numeros que se van guardando en el array

                    echo '<td>' . $aux[$i] . '</td>';
                }

                echo ' </tr>'; //cierro el tr del contador
                echo '</table>';
            
            }
        }








        // Funciones ///////////////////////////////////////////////

        /**
         * PRIMO
         * Comprueba si un número entero positivo es primo o no.
         * Un número es primo cuando únicamente es divisible entre
         * él mismo y la unidad.
         * 
         * @param x un número entero positivo
         * @return  <code>true</code> si el número es primo
         */
        function esPrimo($x) {

            for ($i = 2; $i < $x; $i++) {
                $calcula=  floatval($x % $i);
                if ( $calcula== 0) {
                    return false;
                }
            }

            return true;
        }

        if ($contador <= 10) {
            ?>


            <h1>Introduzca 10 numero por teclado</h1>
            <form action="#" method="get">    

                <input type="number" name ="numero" autofocus>
                <input type="hidden" name="contador" value="<?= ++$contador ?>"><!--Mando el contador y lo guardo-->
                <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $numero ?>">
                <input type="submit" value="OK">
            </form>
<?php } //cierro el if 
?>
    </body>
</html>
