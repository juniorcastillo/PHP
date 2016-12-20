<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Blogs</title>
  </head>
  <body>

    <header>
      <h1 id="tilulo">Animals blog</h1>

      <img src="../Vista/img/head_1.jpg" alt="Animales">
    </header>
    <section>
      <?php
      foreach ($data['listado'] as $articulo) {
        ?>
        <article>
          <h2><?= $articulo->getTitulo() ?></h2>
          <p><?= $articulo->getContenido() ?></p>

        </article>

        <?php
      }
      ?>
    </section>
    <aside>
      <h3>Titulo de contenido</h3>
      <p>contenido</p>
    </aside>
    <footer>
      Creado por mi el 2011
    </footer>
  </body>
</html>
