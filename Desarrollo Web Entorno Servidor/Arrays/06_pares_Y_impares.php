<!DOCTYPE html>
<!--
Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
pares de un color y los impares de otro.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #impar{color:green;}
            #par{color:aqua;}
            p{font-size: 30px;}
        </style>
    </head>
    <body>
        <?php
        $numero = "";
        $contador = 0;
        $numeroTexto = "";
        $posUtima = 0;
        $presentar;



        if (isset($_REQUEST['numero'])) {
            //Tomo los numeros introducido
            $numero = $_REQUEST['numero'];

            //Cuento las veces que han introducido numeros
            $contador = $_REQUEST['contador'];
            $presentar=$contador;
           

            //Guardo la variable que pego los numeros (se le agrega un espacio de mas delante que se lo elimino mas abajo)
            $numeroTexto = $_REQUEST['numeroTexto'];

            //Guardos los numeros en el arrray que su division es un espacio (esta en el formulario)
            $guardar = explode(" ", $numeroTexto);

            //El contador empieza desde 1
            if ($contador <8) {//Cuento las veces 
                // 
                //Muestro como se van pegadolos numeros
                echo 'Los que pego ' . $numeroTexto . '<br>';
                //Muestro los numeros que se van guardando en el array
                echo 'El array ' . $guardar[$contador];
            } else {
                //Creo el array 
                 $guardar = explode(" ", $numeroTexto . " ".  $numero );
                //Elimina el espacio que se guarda en la posicion 0
                array_shift($guardar);
               

                for ($i = 0; $i < count($guardar); $i++) {//Muestro el array
                    if (($guardar[$i] % 2) == 0) {
                        //los pares son agua
                        echo '<span id="par">' . $guardar[$i] . "</span>  ";
                    } else {
                        //Los impars son de color verde
                        echo '<span id="impar">' . $guardar[$i] . "</span>  ";
                    }
                }
                 
            }
        }

        if ($contador <8) {
            ?>
            <h1>Introduzca 8 numero por teclado</h1>
            <form action="#" method="get">    

                <input type="number" name ="numero" autofocus>
                <input type="hidden" name="contador" value="<?= ++$contador ?>">
                <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $numero ?>">
                <input type="submit" value="OK">
            </form>

    <?php
}else{
    echo '<p> Los pares son <span id="par">aqua</span> y los impares son <span id="impar">verdes</span></p> ';
}
 

?>     
    </body>
</html>
