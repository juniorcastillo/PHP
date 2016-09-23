<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            h1,p{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
        if (isset($_POST["dato"])) {//Toma los datos de las variables del fromulario
            $pesetas = $_POST["peseta"];
            $euros = (int) ( $pesetas / 166.38);
            
            echo "<h1> Resultado del conversor </h1> <p>";
            echo $pesetas . " Pesetas son: " . $euros . " euros. </p>";
        }
        ?>
    </body>
</html>
