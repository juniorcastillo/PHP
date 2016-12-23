
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
   
    //las variables de paginación
    $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page'])) ? $_REQUEST['page'] : 1;
    $per_page = 5; //la cantidad de registros que desea mostrar
    $adjacents = 4; //brecha entre páginas después de varios adyacentes
    $offset = ($page - 1) * $per_page;
    //Cuenta el número total de filas de la tabla*/
     $numrows=Contenido::cuenta();
    $total_pages = ceil($numrows / $per_page);
    $reload = 'index.php'; //parametro que envio a el metodo 
    // consulta principal para recuperar los datos
    // $query = $con->query("SELECT * FROM propiedad ORDER BY Referencia LIMIT $offset,$per_page");
    ?>
  </body>
</html>
