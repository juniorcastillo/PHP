<!DOCTYPE html>
<html>
    <head>
        <title>Practica MVC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../View/Style/css.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
      <h1 id="tilulo">Water blog</h1>

      <img src="../View/img/head_1.jpg" alt="Animales">
    </header>
        <p class="boton2"><a href="../Controller/nuevoArticulo.php">Nuevo Artículo</a></p>
        <section>
          
          
      
        <?php
          foreach($datosArticulos['articulos'] as $articulo)  {
        ?>
        
        <article> 
            <h2><?=$articulo->getTitulo()?></h2>
            <p><?=$articulo->getContenido()?></p>
            <p class="boton"><a href="../Controller/borraArticulo.php?id=<?=$articulo->getId()?>">Borrar Artículo</a></p>
            <br> <p class="boton"><a href="../Controller/modificacionArticulo.php?id=<?=$articulo->getId()?>">Modificar Artículo</a></p>
            <p class="fecha">
              <?php
                $fecha=$articulo->getFecha();
                echo date("d-m-Y H:i",strtotime($fecha));
              ?>
            </p>
        </article>
        <?php
          }
        ?>
            </section>
        <footer>
            &copy;JUNIOR CASTILLO
        </footer>
    </body>
</html>