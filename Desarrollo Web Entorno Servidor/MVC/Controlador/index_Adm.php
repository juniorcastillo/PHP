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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  </head>
  <body style="background-color: papayawhip;">
     <?php
    require_once '../Modelo/Articulo.php';

// Obtiene todas las 
   $data['listado']= Articulo::getArticulo();

    // Carga la vista de listado
    ?>
    <div id="contenedor">
     <?php include '../Vista/listado.php'; ?>
    </div>
    
   
  </body>
</html>
