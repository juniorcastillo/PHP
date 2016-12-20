<?php

require_once '../Modelo/Articulo.php';
$borrar = new Articulo($_REQUEST['id']);
$borrar->delete();
