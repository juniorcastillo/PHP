<?php
  require_once '../Model/Articulo.php';
  
  $datosArticulos['articulos'] = Articulo::getArticulos();
  
  include '../View/listadoArticulos.php';
