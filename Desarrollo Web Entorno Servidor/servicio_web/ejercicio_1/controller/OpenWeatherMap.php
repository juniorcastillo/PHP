<!DOCTYPE html>
<!--
Utilizando la API de OpenWeatherMap, realiza una aplicación que muestre la información
meteorológica de una determinada ciudad. Para la selección de la ciudad se puede utilizar un mapa,
una o varias listas desplegables, un buscador o combinaciones de los métodos anteriores.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
  <?php
   $ciudad= $_GET['city'];
$datos = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=$ciudad,\
Spain&units=metric&appid=38fd29cde36821e89b3eb66e063f6179");
echo "<h3>Datos en bruto (en formato JSON): </h3>$datos<hr>";
$tiempo = json_decode($datos);
echo "<h3>Datos en un objeto: </h3>";
print_r($tiempo);
echo "<hr>";
echo "<h3>Datos sueltos: </h3>";
echo "Temperatura: ".$tiempo->{"main"}->{"temp"}."ºC<br>";
echo "Humedad: ".$tiempo->{"main"}->{"humidity"}."%<br>";
echo "Presión: ".$tiempo->{"main"}->{"pressure"}."mb<br>";
?>
  </body>
</html>
