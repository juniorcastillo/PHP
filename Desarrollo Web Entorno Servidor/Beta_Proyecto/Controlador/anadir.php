<?php
error_reporting(E_ALL ^ E_NOTICE);//Que me notifique de todos los errores menso de la notice
require_once '../Modelo/Contenido.php';

$inmueble_Anadir = new Contenido($_POST[idNuevo],$_POST[fechaAltaNuevo],$_POST[tipoNuevo],$_POST[operacionNuevo],$_POST[provinciaNuevo],$_POST[superficieNuevo],$_POST[precioNuevo],$_POST[vendedorNuevo],$_POST[imagenNuevo]);
$inmueble_Anadir->insert();

echo" Este es el id ". $_POST[superficieNuevo] ;

