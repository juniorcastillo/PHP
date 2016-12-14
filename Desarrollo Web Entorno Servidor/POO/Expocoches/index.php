<!--Queremos gestionar la venta de entradas (no numeradas) de Expocoches Campanillas que tiene
3 zonas, la sala principal con 1000 entradas disponibles, la zona de compra-venta con 200 entradas
disponibles y la zona vip con 25 entradas disponibles. Hay que controlar que existen entradas
antes de venderlas. Define las clase Zona con sus atributos y métodos correspondientes y crea
un programa que permita vender las entradas. En la pantalla principal debe aparecer información
sobre las entradas disponibles y un formulario para vender entradas. Debemos indicar para qué
zona queremos las entradas y la cantidad de ellas. Lógicamente, el programa debe controlar que no
se puedan vender más entradas de la cuenta.-->
<?php
session_start();
include_once 'Zona.php';

//Sino existen las zonas las creo y las serializo para poder hacer un código más estandar
if(!isset($_SESSION['principal'])){
  $_SESSION['principal'] = serialize(new Zona("Principal",1000,20));
  $_SESSION['compraVenta'] = serialize(new Zona("Compra-Venta",200,50));
  $_SESSION['vip'] = serialize(new Zona("vip",25,100));
} 
//Deserializo los objetos
  $_SESSION['principal'] = unserialize($_SESSION['principal']);
  $_SESSION['compraVenta'] = unserialize($_SESSION['compraVenta']);
  $_SESSION['vip'] = unserialize($_SESSION['vip']);

//Venta entradas
if(isset($_POST['zona'])){
  $entradas = $_POST['numEntradas'];
  /*Controlar que no se venden más entradas de las que hay*/
  if($entradas <= $_SESSION[$_POST['zona']]->getAforo()){
    $_SESSION[$_POST['zona']]->ventaEntradas($entradas);
    $color = "green";
    $texto = "Se han vendido ".$entradas." entradas de la sala ".$_POST['zona'].".";
  } else {
    $color = "red";
    $texto = "No hay suficientes entradas para esa sala, gracias.";
  }
} 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Aprende PHP con ejercicios- Capiturlo VII</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--<link type="text/css" rel="stylesheet" href="css/style.css"/>-->
    
    <script>
        function desaparecer(elem){
          elem.parentNode.removeChild(elem);
        }
    </script>
  </head>
  <body class="container blue">
      <header class="center-align white-text"><h1><strong>Expocoches</strong></h1></header>
    <section class="card row valign-wrapper white">
      <article class="col s4 white">
        <?php
          echo $_SESSION['principal'];
          echo $_SESSION['compraVenta'];
          echo $_SESSION['vip'];
         
          $_SESSION['principal'] = serialize($_SESSION['principal']);
          $_SESSION['compraVenta'] = serialize($_SESSION['compraVenta']);
          $_SESSION['vip'] = serialize($_SESSION['vip']);
        ?>
      </article>
      <article class ="col s4 z-depth-3 <?=$color?>">
          <div class="container  white-text flow-text center-align">
              <p onclick="desaparecer(this)"><?=$texto?></p>
          </div>
      </article>
      <article class="col s4">
        <form class="white" action="#" method="POST">
            <label>Zona de Expocoches</label>
            <select class="browser-default" name="zona">
              <option value="" disabled selected>Elige Zona</option>
              <option value="principal">Sala Principal 20€</option>
              <option value="compraVenta">Sala Compra-Venta 50€</option>
              <option value="vip">Sala V.I.P. 100€</option>
            </select>
            <label>Número de Entradas</label>
            <input type="number" min=1 name = "numEntradas">
            <input type="submit" value="COMPRAR" class="btn">
            <input type="reset" value="RESET" class="btn red">
          </form>
      </article>      
    </section>
    <section></section>
  </body>
</html>

