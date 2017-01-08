<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="../View/css/estilos.css" rel="stylesheet" type="text/css">
        <title>Formulario nuevo artículo</title>
    </head>
    <body>
    <form action="../Controller/grabaArticulo.php" method="POST">
      <h3 class="h3form">Título</h3>
      <input type="text" size="40" name="titulo">
      
      <br><h3 class="h3form">Contenido</h3>
      <textarea name="contenido" cols="60" rows="6"></textarea><hr>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
