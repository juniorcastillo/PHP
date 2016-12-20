<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../Vista/Style/css.css">
    <title>Animals JR</title>
    
  </head>
  <body>
      <?php
    require_once '../Modelo/Articulo.php';

// Obtiene todas las 
   $data['listado']= Articulo::getArticulo();

    // Carga la vista de listado
    ?>
    <div id="contenedor">
     <?php include '../Vista/blog.php'; ?>
    </div>
    
  </body>
</html>
