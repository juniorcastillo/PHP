<?php
error_reporting(E_ALL ^ E_NOTICE);//Que me notifique de todos los errores menso de la notice
// Conexión a la base de datos
require_once '../Modelo/Contenido.php';
  $img = $_FILES["imagen"]["name"];
  move_uploaded_file($_FILES["imagen"]["tmp_name"], "interfaz_usuario/imagen/" . $img);

$inmueble_Modificar = new Contenido($_POST[idModificar],$_POST[fechaAltaModificar],$_POST[tipoModificar],$_POST[operacionModificar],$_POST[provinciaModificar],$_POST[superficieModificar],$_POST[precioModificar],$_POST[$img],$_POST[vendedorModificar]);

$inmueble_Modificar->update();


