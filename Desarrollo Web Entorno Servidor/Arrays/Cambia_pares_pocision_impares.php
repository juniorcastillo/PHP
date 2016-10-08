<!DOCTYPE html>
<!--
Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en
un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
si es necesario.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 7</title>
    </head>
    <body>

        <h1>Array aleatorio</h1>
        <?php
        
        $aux=[];
        $posicion=0;
        for ($i = 0; $i < 100; $i++) {//Muestro el array
            $numero[$i] = rand(0, 20);
            echo $numero[$i] . " ";
        }

        echo "<br><br><h1>Array ordenado </h1>";
        for ($i = 0; $i < count($numero); $i++) {//Agrego los pares adelante
            if (($numero[$i] % 2) == 0) {
            
                 $aux[$posicion]=$numero[$i];
                $posicion++;
            } 
            
        }
         for ($i = 0; $i < count($numero); $i++) {//Agrego los impares en lo que sobran
            if (!(($numero[$i] % 2) == 0)) {
                //los pares son agua
               // echo '<span id="impar">' . $guardar[$i] . "</span>  ";
                 $aux[$posicion]=$numero[$i];
                  $posicion++;
            } 
            
        }
   
         for ($i = 0; $i < count($aux); $i++) {//Muestro el array
         
            
                 echo $aux[$i] . " ";
            } 
            
        
        
        
        ?>
    </body>
</html>
