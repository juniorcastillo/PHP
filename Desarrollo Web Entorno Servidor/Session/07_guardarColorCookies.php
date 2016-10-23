<?php
// Si se envían datos desde el formulario de actores,
// se actualizan las cookies
if (isset($_POST["color"])) {
  $colordefondo = $_POST["color"];
  //Las paina  se tienen que actualizar para que las cookies se actualizen
  echo '<script type="text/javascript">
           window.location="07_guardarColorCookies.php";
          </script>';
  setcookie("colores", $colordefondo, time() + 3 * 24 * 3600);
} else if (isset($_COOKIE["color"])) {
  $colordefondo = $_COOKIE["colores"];
}
// Borrado de cookies y variables
if (isset($_POST["borraCookies"])) {
  setcookie("colores", NULL, -1);
  unset($colordefondo);
}
?>

<!DOCTYPE html>
<!--
Ejercicio 7

Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color) de
una página. Esta página debe tener únicamente algo de texto y un formulario para cambiar el color.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>

      body{
        background-color: <?= $_COOKIE["colores"] ?>;
      }
      



    </style>
  </head>
  <body>
<?php
echo 'El color guardado en la cookies es: ' . $_COOKIE["colores"];
?>

    <form action="07_guardarColorCookies.php" method="post">
      Color de fondo: <input type="color" name ="color"><br>
      <input type="submit" value="Aceptar">
    </form>

    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <p>
      Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
    </p>
    <p>
      Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
    </p>
    <p>
      Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.
    </p>



  </body>
</html>


