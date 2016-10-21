<!DOCTYPE html>
<!--
Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos comprendidos
entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede
repetir ninguno. Muestra a continuación por pantalla el contenido del array de tal forma que se
cumplan los siguientes requisitos:
• Los números de las dos diagonales donde está el mínimo deben aparecer en color verde.
• El mínimo debe aparecer en color azul.
• El resto de números debe aparecer en color negro.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $contador = 0;
        $arrayBidimencional = []; //El array bidi se inicializa 
        $aux = [];
        $posI=0;
        $posX=0;
        
        $n = 0;
        $minimo=9999;
        //relleno el array y veo queno se repita

        do {
            $aletorio = rand(100, 999);

            if (!in_array($aletorio, $aux)) {
                $aux[$n] = $aletorio;
                $n++;
            }
        } while ($n < 54);



        //relleno el array bidimensional
        $n = 0;
       
        for ($i = 0; $i < 9; $i++) {//columnas
            for ($x = 0; $x < 6; $x++) {//filas

                $arrayBidi[$i][$x] = $aux[$n];
                echo $arrayBidi[$i][$x] . " ";
                $n++;
                //Guardo la posicion donde esta en minimo
                if($minimo>  $arrayBidi[$i][$x]){
                    $posI=$i;
                    $posX=$x; 
                    
                }
            }
            echo '<br>';
        }


        // put your code here
        ?>
    </body>
</html>
