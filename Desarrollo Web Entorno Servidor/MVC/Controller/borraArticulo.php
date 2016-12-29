<?php
require_once '../Model/Articulo.php';
  $articuloAux = new Articulo($_GET['id']);
  $articuloAux->delete();
  header("Location: index.php");
