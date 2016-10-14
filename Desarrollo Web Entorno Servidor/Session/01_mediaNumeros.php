
<?php
session_start();

if (!isset($_SESSION['suma'])) {

    $_SESSION['suma'] = 0;
    $_SESSION['contador'] = 0;
} else {
    ?>
    <!DOCTYPE html>
    <!--
    Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
    teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
    terminado de introducir los datos cuando meta un número negativo. Utiliza sesiones.
    -->

    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <?php
            $numero = $_GET['numero'];


            if ($_GET['numero'] >= 0) {
                $_SESSION['suma']+=$numero;
                echo "contador " . $_SESSION['contador'] ++;
            } else {
                $resultado = $_SESSION['suma'] / $_SESSION['contador'];
                echo '<h1>Esta es la media de los numeros</h1> ' . $resultado;
            }
            if (isset($_REQUEST['cerrar'])) {


                session_destroy();
                header("refresh: 0;"); // refresca la página
            }
        }
        ?>
        <?php
        if ($numero >= 0) {
            ?>
            <form action="#" method="GET">
                <input type="number" name="numero" autofocus >     
                <input type="submit" value="Aceptar">

            </form>   
            <?php
        }
        ?>

        <br><form action="#" method="GET">  

            <button name="cerrar" > close session</button>     

        </form>


    </body>
</html>
