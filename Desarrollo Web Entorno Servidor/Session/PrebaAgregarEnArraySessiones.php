
<?php
session_start();
$_SESSION['veces']+=1;
?>

<!DOCTYPE html>
<!--
Realiza un programa que escoja al azar 5 palabras en inglés de un mini-diccionario. El programa
pedirá que el usuario teclee la traducción al español de cada una de las palabras y comprobará si son
correctas. Al final, el programa deberá mostrar cuántas respuestas son válidas y cuántas erróneas.
La aplicación debe tener una opción para introducir los pares de palabras (inglés - español) que se
deben guardar en cookies; de esta forma, si de vez en cuando se dan de alta nuevas palabras, la
aplicación puede llegar a contar con un número considerable de entradas en el mini-diccionario.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>    
  </head>
  <body>
    <?php
  
     if(isset($_REQUEST['espanol'])){
       
       $_SESSION['diccionario'][$_REQUEST['espanol']]=$_REQUEST['ingles'];
       
     }
     if($_SESSION['veces']<2){
       
          $_SESSION['diccionario'] = array (
        'rojo' => 'red', 
        'puerta' => 'door', 
        'perro' => 'dog', 
        'ventana' => 'windows', 
        'verde' => 'green',
        'gato' => 'cat', 
        'lapiz' => 'pencil', 
        'futbol' => 'soccer', 
        'caballo' => 'horse', 
        'casa' => 'house', 
        'arbol' => 'tree', 
        'año' => 'year',
        'hombre' => 'men', 
        'mujer' => 'woman', 
        'lugar' => 'place', 
        'libro' => 'book', 
        'cara' => 'face', 
        'ciudad' => 'city', 
        'profesor' => 'teacher',
        'guerra' => 'war', ); 
       
       
     }
     
        foreach ($_SESSION['diccionario'] as $clave => $valor) {
          echo $clave . ' -> ' . $valor  ."<br>";
        }
      ?>
    
      <form action="#" method="GET">

                    <input type="text" name="espanol" placeholder="Palabra en español" required><br> 
                    <input type="text" name="ingles" placeholder="Palabra en ingles" required><br>   
                    <input type="submit" value="Añadir">

        </form>   
  </body>
</html>
