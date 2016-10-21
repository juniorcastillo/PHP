<!DOCTYPE html>
<!--
Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
muestra el contenido del array.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
        $numero = "";
        $contador = 0;
        $numeroTexto = "";
        $rotar = [];
        $posUtima = 0;



        if (isset($_REQUEST['numero'])) {

            $numero = $_REQUEST['numero']; //Tomo los numeros introducido
            $contador = $_REQUEST['contador']; //Cuento las veces que han introducido numeros
            echo "veces: $contador <br><br>";
            $numeroTexto = $_REQUEST['numeroTexto']; //Guardo la variable que pego los numeros y se le agrega un espacio de mas
          
            //El contador empieza desde 1
            if ($contador < 15) {//Cuento las veces 
                echo 'Los que pego ' . $numeroTexto . '<br>';
                echo 'El array ' . $guardar[$contador];
            } else {//Muestro el array
                 $guardar = explode(" ", $numeroTexto . " ". $numero); //Guardos los numeros en el arrray
                unset($guardar[0]);//Elimina el espacio que se guarda en la posicion 0
                $posUtima = array_pop($guardar); //Guardo el  valor de la ultima posicion del array y el array (es como si le eliminara ese valor)
              
                for ($i = 1; $i <= count($guardar); $i++) {//roto el array

                    $rotar[$i] = $guardar[$i];
                }
                $rotar[0] =$posUtima;//Guardo el numero de la ultima posicion en la primera
        
                 for ($i = 0; $i < count($rotar); $i++) {//mustro el array yah rotado

                   echo  $rotar[$i].  "  ";
                }
            }
        }
        ?>
    </head>
    <body>
        <?php
        if ($contador <15) {
            ?>
            <h1>Introduzca 15 numeros por teclado:</h1>
            <form action="#" method="get">


                <input type="number" name ="numero" autofocus>
                <input type="hidden" name="contador" value="<?= ++$contador ?>">
                <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $numero ?>">
                <input type="submit" value="OK">
            </form>
    <?php
}
?>           

    </body>
</html>
