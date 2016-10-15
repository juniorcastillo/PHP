<?php
session_start();

if (!isset($_SESSION['contador'])) {

    $_SESSION['suma'] = 0;
    $_SESSION['contador'] = 0;
    $_SESSION['comprueba'] = true;
} else {
    ?>
    <!DOCTYPE html>
    <!--
     Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras
     su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
     el contador de los números introducidos y la media. Utiliza sesiones.
    -->

    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <?php
            $numero = $_GET['numero']; //Tomo el valor de los numeros introducidos
            echo "<br>" .$_SESSION['suma']+=$numero;
            // Suma los valores y el contador lo aumenta
            if ($_SESSION['suma'] < 10000) {


                        echo "contador " . $_SESSION['contador'] +=1 ;
                        
                     
                        
            } else if($_SESSION['suma'] > 10000){
                $_SESSION['comprueba']=false;
                echo "<br>" .$_SESSION['suma']-=$numero;
                   echo '<h1>Entra aqui: </h1> ';
                        //Divide el resultado de la suma y saca la media y la muestra
                      
                       $media= $_SESSION['suma'] / $_SESSION['contador'];
                       echo '<h1>Esta es el total acumulado: </h1> ' .  $_SESSION['suma'] . "<br>";
                       echo '<h1>Esta es la media del total: </h1> ' .  $media . "<br>";
                 

            }
            //Cuando push el boton close session se inicia
            if (isset($_REQUEST['cerrar'])) {


                session_destroy();
                header("refresh: 0;"); // refresca la página
            }
        }
        ?>
        <?php
        if ($_SESSION['comprueba']) {//Mientas el numero introducido es mayor o igual que 0 just do it
            ?>
            <h1>please, introducir numeros cuando la suma de los numero sea mayor que 10000 se detiene </h1>
            <form action="#" method="GET">
                <input type="number" name="numero" autofocus >     
                <input type="submit" value="Aceptar">

            </form>   
            <?php
        }
//Este es el boton que cierra la sesion creada
        ?>

        <br><form action="#" method="GET">  

            <button name="cerrar" > close session</button>     

        </form>


    </body>
</html>
