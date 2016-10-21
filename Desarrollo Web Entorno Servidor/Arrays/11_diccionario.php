<!DOCTYPE html>
<!--
Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
en español y dará la correspondiente traducción en inglés.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    if (isset($_REQUEST['palabra'])) {
      $palabra = $_REQUEST['palabra'];
      $diccionario = ['agua' => 'water', 'rojo' => 'red', 'rosado' => 'pink', 'cerdo' => 'pig',
          'eso' => 'it', 'mirar' => 'look', 'leer' => 'read', 'computadora' => 'computer',
          'cosa' => 'thing', 'nada' => 'nothing'];

      foreach ($diccionario as $key => $valor) {
        if ($palabra == $key) {
          echo '<b>Palabra: </b>' . $key . " <b>val:</b> " . $valor . "<br>";
        }
      }
    }
    ?>

    <h1>Introduzca la palabra que quiere traducir</h1>
    <form action="#" method="get">    

      <input type="text" name ="palabra" autofocus required>
      <input type="submit" value="OK">
    </form>
  </body>
</html>
