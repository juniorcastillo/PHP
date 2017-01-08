<?php
  require_once '../Model/Articulo.php';
  $datosArticulo = Articulo::getOfertaById($_GET['id']);
  include '../View/formularioModificaArticulo.php';
