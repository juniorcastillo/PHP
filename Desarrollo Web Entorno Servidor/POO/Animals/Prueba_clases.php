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
      div.gato{

        border:solid 2px black;
        width: 50%;
        color:red;
      }

      div.pajaro{
        margin:10px 0px 10px 0px;
        border:solid 2px yellowgreen;
        width: 50%;

      }


    </style>
  </head>
  <body>
    <h1 style="text-align: center;">Pruebas de class</h1>
    <div class="pajaro">
    <?php
    require_once 'Ave.php';
    require_once './Canario.php';
    require_once './Gato.php';
    $raza = "pelicano";
    $sexo = "macho";
    $edad = 5;
    $colorPluma = "Azul";
    //Pruebo la class Ave y pido la edad
    $piolin = new Canario($raza, $sexo, $edad, $colorPluma ,10);
    echo $piolin->imagenCanario() .  "<b>Esta es la edad de piolin:</b> " . $piolin->getedad();

    $galfil = new Gato($raza, $sexo, $edad);
    ?>
    </div>
    <div class="gato"> 

      <?php
      $galfil->imagenGato();
      echo $galfil->maulla() . " Dice el gato. <b>!Loco por comerselo¡</b> ";
      ?></div>
    <div class="pajaro">
      <?php
       echo $piolin->verGato();
      ?>      
      
    </div>
  </body>
</html>
