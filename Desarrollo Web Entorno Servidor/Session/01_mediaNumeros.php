
<?php
session_start();
$_SESSION['pagina1'] = true;
if ($_SESSION['accesopermitido'] == true) {
      
    
    if (!isset($_SESSION['suma'])) {

        $_SESSION['suma'] = 0;
        $_SESSION['pagina1'] = true;
        $_SESSION['contador01'] = 0;
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
                    echo "contador " . $_SESSION['contador01'] ++;
                } else {
                    $resultado = $_SESSION['suma'] / $_SESSION['contador01'];
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
                <form action="01_mediaNumeros.php" method="GET">
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
    <?php
} else {
  
    echo '<script type="text/javascript">
           alert("iniciar sesion");
           window.location="04_ControlDeUsuario.php";
          </script>';
}?>