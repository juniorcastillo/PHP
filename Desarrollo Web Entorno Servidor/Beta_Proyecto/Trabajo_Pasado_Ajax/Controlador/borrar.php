<?php

require_once '../Modelo/Contenido.php';
$inmueble_borrar = new Contenido($_GET['idinmueble']);
$inmueble_borrar->delete();
