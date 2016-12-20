<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Inmueble</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin</title>
  </head>
  <body>
    <h1>Animals Blog</h1>
    <img src="../Vista/img/nuevo.png" width="20" height="20" id="nuevo" title="Nuevo Inmueble">

    <hr>
    <div class="container">
     <table class="table table-bordered" id="tabladatos">
  
      <tr>
        <th>Id Articulo</th>
        <th>Titulo</th>
        <th>Fecha</th>
        <th>Contenido</th>
        <th colspan="2">Funciones de Admin</th>

      </tr>
      <?php
      foreach ($data['listado'] as $articulo) {
        
        ?>
      
        <tr id="inmueble_<?= $articulo->getId() ?>">

          <td class="id"><?= $articulo->getId() ?></td>
          <td class="alta"><?= $articulo->getTitulo() ?></td>
          <td class="tipo"><?= $articulo->getFecha() ?></td>
          <td class="operacion"><?= $articulo->getContenido() ?></td>
          <td class="accion"> <a href="borrar.php?id=<?=$articulo->getId()?>"><img class="borrar" src="../Vista/img/borrar.png" width="20" height="20" alt="Borrar"></a>
            &nbsp;<img class="modificar" src="../Vista/img/lapiz.png" width="20" height="20" alt="Modificar"></td>

        </tr>


        <?php
      }
      ?>
    </table>
    </div>
  </body>
</html>
