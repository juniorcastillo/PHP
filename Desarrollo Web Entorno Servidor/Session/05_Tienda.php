<?php
session_start();

if (!isset($_SESSION['producto'])) {


  $_SESSION['producto'] = array(
      "ps1" => array("imagen" => "imgTienda/p1.jpg", "nombre" => "Playstation 1", "precio" => 50),
      "ps2" => array("imagen" => "imgTienda/p2.jpg", "nombre" => "Playstation 2", "precio" => 100),
      "ps3" => array("imagen" => "imgTienda/p3.jpg", "nombre" => "Playstation vita", "precio" => 50),
  );

  $_SESSION['cuentacompra'] = 0;
}
?>
<!DOCTYPE html>
<!--
Crea una tienda on-line sencilla con un catálogo de productos y un carrito de la compra. Un
catálogo de cuatro o cinco productos será suficiente. De cada producto se debe conocer al menos
la descripción y el precio. Todos los productos deben tener una imagen que los identifique. Al lado
de cada producto del catálogo deberá aparecer un botón Comprar que permita añadirlo al carrito.
Si el usuario hace clic en el botón Comprar de un producto que ya estaba en el carrito, se deberá
incrementar el número de unidades de dicho producto. Para cada producto que aparece en el carrito,
habrá un botón Eliminar por si el usuario se arrepiente y quiere quitar un producto concreto del
carrito de la compra. A continuación se muestra una captura de pantalla de una posible solución.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link href="CssTienda.css" rel="stylesheet">
  </head>
  <body>



    <div id="capa1">  


      <h1>Tienda Playstation</h1>


      <table id="tabla1"> 
        <tr>
          <td>Producto </td>

        </tr>
        <?php
       
        
        foreach ($_SESSION['producto'] as $key => $value) {
          ?>
          <tr>
            <td><img src="<?= $value['imagen']; ?>" alt="Smiley face" height="100" width="150"> </td>

          </tr>
          <tr>
            <td> <?= $value['nombre']; ?></td>

          </tr>
          <tr>
            <td> <?= $value['precio']; ?> €</td>

          </tr>
          <tr>
            <!-- hago la compra para añadirlo al carrito-->
            <td><form action="05_Tienda.php" method="get">


                <a name="<?= $key ?>"><input type="hidden" name="accion" value="comprar"></a>
                
                <input type="hidden" name="compra" value="<?= $key ?>">
                <button name="boton" type="submit" value="ok">Comprar</button>
              </form>
            <!-- Expancion del ejercicio agregar le el botton detalle-->
            <form action="detalleproducto.php" method="get">
                <input type="hidden" name="accion" value="detalles">
                <input type="hidden" name="compra" value="<?= $key ?>">
                <button name="boton" type="submit" value="ok">Detalle</button>
              </form></td>

          </tr>
          <?php
        }
        ?>

      </table>
    </div>
    <div id="capa2">  
      <table id="tabla2"> 
        <tr>
          <td>Carrito </td>

        </tr>
        <?php
       if(!isset( $_REQUEST['compra'])){
          $_REQUEST['compra']="";
          $_REQUEST['accion']="";
       }
            
          $clave = $_REQUEST['compra'];
          $accion = $_REQUEST['accion'];

//-------------------Inicializa el carrito la primera vez-----------------------------------
          if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = array("ps1" => 0, "ps2" => 0, "ps3" => 0);
          }

//-------------Incremento las unidades del producto comprado-----------------
          if ($accion == "comprar") {
            $_SESSION['carrito'][$clave] ++;
          }
 //----------------------Elimino el producto comprado------------------------------

          if ($accion == "eliminar") {
            $_SESSION['carrito'][$clave] = 0;
          }
          if (isset($_REQUEST['cerrar'])) {
            session_destroy();
             echo '<script type="text/javascript">
           window.location="05_Tienda.php";
          </script>';
          }
          
 //---------------------Pinto los productos que estan en el carrito---------------------------------------
          $total = 0;
          foreach ($_SESSION['producto'] as $key => $value) {
            $total+= $value['precio'] * $_SESSION['carrito'][$key];//Calculo el total de los productos

            if (($_SESSION['carrito'][$key] > 0)) {

              echo '<tr><td><img src="' . $value['imagen'];
              echo '" alt="Smiley face" height="100" width="150"> </td>  </tr>';
              echo '<tr><td>' . $value['nombre'] . '</td> </tr>';
              echo '<tr><td>Precio:' . $value['precio'] . '€</td> </tr>';
              echo '<tr><td>  Unidades: ' . $_SESSION['carrito'][$key] . '</td> </tr>';
  //-----------------Creo el boton eliminar ------------------------------------------------------
              ?>
              <tr>

                <td><form action="05_Tienda.php" method="get">


                    <input type="hidden" name="accion" value="eliminar">
                    <input type="hidden" name="compra" value="<?= $key ?>">
                    <button name="boton" type="submit" value="ok">Eliminar</button>
                  </form></td>

              </tr>


              <?php
            }
          }
          //Vacio el carrito de la compra
          echo '<tr><td></td> </tr>';
          echo '<tr><td></td> </tr>';

          echo '<tr><td><b>Total:' . $total . '€</b></td> </tr>';
          echo '<tr><td><form action="05_Tienda.php" method="GET">  
                        <button name="cerrar" >Vaciar </button>     
                        </form></td> </tr>';
        
        ?>

      </table>
    </div>
  </body>
</html>
