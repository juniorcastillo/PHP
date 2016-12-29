<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="../View/css/estilos.css" rel="stylesheet" type="text/css">
        <title>Formulario modificar artículo</title>
    </head>
    <body>
        <form action="../Controller/modificaArticulo.php" method="POST">
      <h3 class="h3form">Título</h3>
      <input type="text" size="40" name="titulo" value="<?=$datosArticulo->getTitulo()?>">
      
      <br><h3 class="h3form">Contenido</h3>
      <textarea name="contenido" cols="60" rows="6"><?=$datosArticulo->getContenido()?></textarea><hr>
      <input type="hidden" name="id" value="<?=$datosArticulo->getId()?>">
      <input type="submit" value="Aceptar">
    </form>
  </body>
</html>
