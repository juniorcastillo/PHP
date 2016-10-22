<?php
session_start();
?>


<!DOCTYPE html>
<!--
Amplía el programa anterior de tal forma que se pueda ver el detalle de un producto. Para ello, cada
uno de los productos del catálogo deberá tener un botón Detalle que, al ser accionado, debe llevar
al usuario a la vista de detalle que contendrá una descripción exhaustiva del producto en cuestión.
Se podrán añadir productos al carrito tanto desde la vista de listado como desde la vista de detalle.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link href="CssTienda.css" rel="stylesheet">
    <style>


    </style>
  </head>
  <body>
    <?php
    if (isset($_REQUEST['accion'])) {
      $clave = $_REQUEST['compra'];

      // Muestrolos detalles de los productos

      echo '<div class="detalles"><h1>Detalle del producto</h1>';
      echo '<table>';
      foreach ($_SESSION['producto'] as $key => $value) {

        if ($key == $clave) {

          echo '<tr><td><img src="' . $value['imagen'];
          echo '" alt="Smiley face" height="100" width="100%"> </td>  </tr>';
          echo "<tr><td><b>Nombre del prodcuto:</b> " . $value['nombre'] . '.</td></tr>';
          echo "<tr><td><b>Tipo de producto:</b> Video Game. </td></tr>";
          echo "<tr><td><b>Estado del prodcuto:</b> Son nuevos de caja. </td></tr>";
          echo '<tr>
            <!-- hago la compra para añadirlo al carrito-->
             <td><form action="detalleproducto.php" method="get">


                <input type="hidden" name="accion" value="comprar">
                <input type="hidden" name="compra" value="' .$key .'">
                <button name="botondetalle" type="submit" value="ok">Comprar</button>
               </form></td></tr>';
        }
      }
       
        if (isset($_REQUEST['botondetalle'])) {

          $clave = $_REQUEST['compra'];
          $accion = $_REQUEST['accion'];

          // Inicializa el carrito la primera vez
          if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = array("ps1" => 0, "ps2" => 0, "ps3" => 0);
          }

          //Incremento las unidades del producto comprado
          if ($accion == "comprar") {
            $_SESSION['carrito'][$clave] ++;
          }
        }
   
      echo '</table></div>';
      //Agrego el carrito de la compra

      echo '<div id="capa3"><h1>Carrito</h1>';
      foreach ($_SESSION['producto'] as $key => $value) {

        if ($_SESSION['carrito'][$key] > 0) {
          echo '<table class="ordenar">';
          echo '<tr><td><img src="' . $value['imagen'];
          echo '" alt="Smiley face" height="100" width="150"> </td>  </tr>';
          echo '<tr><td>' . $value['nombre'] . '</td> </tr>';
          echo '<tr><td>Precio:' . $value['precio'] . '€</td> </tr>';
          echo '<tr><td>  Unidades: ' . $_SESSION['carrito'][$key] . '</td> </tr>';
          echo '</table>';
        }
      }
      echo '</div>';
    }
    ?>
    
    
      
  </body>
</html>
