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
    <link rel="stylesheet" type="text/css" href="Style/personal.css">
        <title>Mi Blog</title>
  </head>
  <body >

    <form action="../controller/OpenWeatherMap.php" method="get" id="carform">

      <select name="city" form="carform">
        <option value="Malaga">Malaga</option>
        <option value="Sevilla">Sevilla</option>
        <option value="Granada">Granada</option>
        <option value="Madrid">Madrid</option>
      </select>
      <input type="submit">
    </form>

  </body>
</html>
