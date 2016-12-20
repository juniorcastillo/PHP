<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Inmueble</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Listado Inmuebles</title>


  </head>
  <body>
    <h1>Inmobiliaria Castillo</h1>
    <img src="../Vista/img/nuevo.png" width="20" height="20" id="nuevo" title="Nuevo Inmueble">
 
    <hr>
    <table border="1" id="tabladatos">
      <tr>
        <th>Referencia</th>
        <th>Fecha Alta</th>
        <th>Tipo</th>
        <th>Operacion</th>
        <th>Provincia</th>
        <th>Superficie</th> 
        <th>Precio</th>
       
        <th><a href="Vendedor.php">Vendedor</a></th>
        <th>Imagen</th>
        <th colspan="2">Funciones de Admin</th>

      </tr>
      <?php
      foreach ($data['listado'] as $casa) {
        ?>
        <tr id="inmueble_<?=$casa->getId()?>" align="center" data-idinmueble="<?= $casa->getId()?>">
         
          <td class="id"><?= $casa->getId() ?></td>
          <td class="alta"><?= $casa->getFechaAlta() ?></td>
          <td class="tipo"><?= $casa->getTipo() ?></td>
          <td class="operacion"><?= $casa->getOperacion() ?></td>
          <td class="provincia"><?= $casa->getProvincia() ?></td>
          <td class="superficie"><?= $casa->getSuperficie() ?></td>
          <td class="precio"><?= $casa->getPrecio() ?></td>
          <td class="vendedor"><?= $casa->getVendedor() ?></td>
          <td class="imagen"><?= $casa->getImagen() ?></td>
          <td class="accion"> <img class="borrar" src="../Vista/img/borrar.png" width="20" height="20" alt="Borrar">
          &nbsp;<img class="modificar" src="../Vista/img/lapiz.png" width="20" height="20" alt="Modificar"></td>

        </tr>


        <?php
      }
      ?>
    </table>
  </body>
</html>
