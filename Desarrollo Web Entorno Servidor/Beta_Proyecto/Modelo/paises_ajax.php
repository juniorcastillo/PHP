<?php
# conecta a la base de datos
require_once 'Contenido.php';
//si accion esta definido y no esta null coje el valor sino ponerlo vacio
$action = (isset($_REQUEST['action']) && $_REQUEST['action'] != NULL) ? $_REQUEST['action'] : '';
//si es igual a ajax
if ($action == 'ajax') {
  // Obtiene todas las propiedades
  $data['listado'] = Contenido::getListInmueble();
  include 'listadoPag.php'
  ?>

  <table  class="table table-bordered" id="tabladatos">
    <tr>
      <th>ID</th>
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
      <tr id="inmueble_<?= $casa->getId() ?>" align="center" data-idinmueble="<?= $casa->getId() ?>">

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
  <div class="table-pagination pull-right">
    <?php echo paginate($reload, $page, $total_pages, $adjacents); ?>
  </div>

  <?php
} else {
  ?>
  <div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4>Aviso!!!</h4> No hay datos para mostrar
  </div>
  <?php
}
?>

