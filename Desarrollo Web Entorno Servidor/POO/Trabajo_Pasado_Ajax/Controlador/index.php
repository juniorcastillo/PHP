<html>
  <head>
    <meta charset="UTF-8">
    <title>Inmobiliaria AJAX</title>
    <style>
      .dialogo{ display: none; }
    </style>
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="ajax.js"></script>
    <style>
      table{text-align: center;}
      
    </style>
  </head>
  <body>
    <?php
    require_once '../Modelo/Contenido.php';

// Obtiene todas las propiedades
    $data['listado'] = Contenido::getListInmueble();



    // Carga la vista de listado
    ?>
    <div id="contenedor">
      <?php include '../Vista/listado.php'; ?>
    </div>
    <!-- CAPA DE DIALOGO ELIMINAR INMUEBLE -->
    <div id="dialogoborrar" class="dialogo" title="Eliminar Inmueble">
      <p>¿Esta seguro que desea eliminar el inmueble?</p>
    </div>

    <!-- CAPA DE DIALOGO MODIFICAR INMUEBLE -->
    <div id="dialogomodificar" class="dialogo" title="Modificar Inmueble">
      <?php include "../Vista/inmueble_formulario_modificar.php" ?>
    </div>
  </body>
</html>









