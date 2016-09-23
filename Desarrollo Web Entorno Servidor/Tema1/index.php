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
    </head>
    <body>
        <?php
       echo "Hola mundo"; 
       $var1=5;
       $var2="Esta 1";
       //Esta funcion muestra los valores de un variable o de un array.
             // print_r();
       
       //get_defined_vars esatfuncion muestra todos los valores de todas las variables definidas se entra en un array y luego las muestra.
       print_r(get_defined_vars()); 
        ?>
    </body>
</html>
