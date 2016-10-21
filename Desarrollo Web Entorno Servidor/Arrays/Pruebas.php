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
$stack = array("naranja", "plátano", "manzana", "frambuesa");
$fruit = array_shift($stack);
echo count($stack)  . ' Este es el largo';

print_r($stack);
?>
    </body>
</html>
