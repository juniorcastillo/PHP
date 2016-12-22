<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paginación con PHP, Mysql, jQuery, Ajax y Bootstrap </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../Controlador/ajax.js"></script>
  </head>
  <body>
 
  
    <h1>Inmobiliaria Castillo</h1>
    <img src="../Vista/img/nuevo.png" width="20" height="20" id="nuevo" title="Nuevo Inmueble">

    <hr>
    <div class="container-fluid">.
    
        
      <div class="row">
        <div class="col-xs-12">

          <div id="loader" class="text-center"> </div>
          <div class="outer_div"></div><!-- Datos ajax Final -->
        </div>

      </div>


    <div id="dialogoborrar" class="dialogo" title="Eliminar Inmueble">
      <p>¿Esta seguro que desea eliminar el inmueble?</p>
    </div>
    <!-- CAPA DE DIALOGO MODIFICAR INMUEBLE -->
    <div id="dialogomodificar" class="dialogo" title="Modificar Inmueble">
      <?php include "../Vista/inmueble_formulario_modificar.php";
      ?>
    </div>
       
     </div>
    <script>



    </script>
  </body>
</html>
