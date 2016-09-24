<!DOCTYPE html>
<!--
Escribe un programa que calcule el área de un rectángulo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <h1>Area de un triangulo</h1>
         <form method="post" action="Area_rectangulo.php">
            <p> Por favor, introduce la base y la atura:</p>
            <input type="number" name="base"><br>
            <input type="number" name="altura"><br>
            <input type="submit" name="dato" value="Aceptar">
        </form>
        <?php
        if((isset($_POST["dato"])==True)){
            
            $base=$_POST["base"];
            $altura=$_POST["altura"];
            $area=$base*$altura;
            echo "Esta es el area del triangulo " . $area;
        }
        ?>
    </body>
</html>
