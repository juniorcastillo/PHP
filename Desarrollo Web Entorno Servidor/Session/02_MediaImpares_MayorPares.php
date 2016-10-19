
<?php
session_start();
$_SESSION['pagina2'] = true;
if ($_SESSION['accesopermitido'] == true) {
    if (!isset($_SESSION['contador02'])) {

        $_SESSION['sumaImpares'] = 0;
        $_SESSION['contador02'] = 0;
        $_SESSION['contadorImpares'] = 0;
        $_SESSION["pares"] = [];
    } else {
        ?>
        <!DOCTYPE html>
        <!--
          Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
          nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
          número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
          en el cómputo. Utiliza sesiones.
        -->

        <html>
            <head>
                <meta charset="UTF-8">
                <title></title>
            </head>
            <body>
                <?php
                $numero = $_GET['numero']; //Tomo el valor de los numeros introducidos
                // Suma los valorees y el contador lo incremento y guardo en un array los pares y en otro los impares
                if ($_GET['numero'] >= 0) {


                    echo "contador " . $_SESSION['contador02'] +=1;


                    if (($numero % 2) == 0) {
                        //los pares 
                        $_SESSION['pares'][] = $numero;
                    } else {
                        //impare
                        $_SESSION['sumaImpares']+=$numero;
                        $_SESSION['contadorImpares'] +=1;
                    }
                } else {//si haz introducido el numero negativo entra aqui
                    //Divide el resultado de la suma y saca la media y la muestra
                    $resultadoImpares = $_SESSION['sumaImpares'] / $_SESSION['contadorImpares'];
                    echo '<h1>Esta es la media de los numeros impares : </h1> ' . $resultadoImpares . "<br>";
                    echo '<h1>Este es el mayor de los pares </h1> ' . max($_SESSION['pares']);
                }
                //Cuando push el boton close session se inicia
                if (isset($_REQUEST['cerrar'])) {


                    session_destroy();
                    header("refresh: 0;"); // refresca la página
                }
            }
            ?>
            <?php
            if ($_GET['numero'] >= 0) {//Mientas el numero introducido es mayor o igual que 0 just do it
                ?>
                <h1>please, introducir numeros cuando quiera que pare, solo introducir un numero negativo </h1>
                <form action="02_MediaImpares_MayorPares.php" method="GET">
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
    <?php
} else {

    echo '<script type="text/javascript">
           alert("iniciar sesion");
           window.location="04_ControlDeUsuario.php";
          </script>';
}?>