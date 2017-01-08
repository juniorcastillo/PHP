<?php
require_once '../Model/Articulo.php';
  $articuloAux = new Articulo($_POST['id'], $_POST['titulo'], "" , $_POST['contenido'] );
  $articuloAux->update();
  header("Location: index.php");
