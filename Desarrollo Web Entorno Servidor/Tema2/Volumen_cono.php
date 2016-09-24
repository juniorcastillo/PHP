<!DOCTYPE html>
<!--
Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 1
3r2h.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Volumen de un cono</h1>
        <form method="post" action="Volumen_cono.php">
            <p> Por favor, introduce la base y la atura:</p>
            <input type="number" name="altura"><br>
            <input type="number" name="radio"><br>
            <input type="submit" name="dato" value="Aceptar">
        </form>
        <?php
        if((isset($_POST["dato"])==True)){
            $pi=3.14;
            $radio=$_POST["radio"];
            $altura=$_POST["altura"];
            $volumen=(($pi * ($radio*$radio)*$altura) /$radio);
            echo "El volumen de un cono es: " . $volumen;
        }
        ?>
    </body>
</html>
