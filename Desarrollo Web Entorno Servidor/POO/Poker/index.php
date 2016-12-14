<?php
session_start();
  include_once 'DadoPoker.php';
  //Si no se ha inicializado ningún dado. Creamos los dados e inicializamos las tiradas  a 0.
  if(!isset($_SESSION['dado1'])){
    for ($i = 1; $i <= 5 ; $i++){
      $_SESSION["dado".$i] = serialize(new Dados());
    }//Fin for
    $_SESSION['tir'] = 0;
  }//Fin if
  //Deserializamos los dados.
  for ($i = 1; $i <= 5 ; $i++){
      $_SESSION["dado".$i] = unserialize( $_SESSION["dado".$i]);
      //${'dado'.$i} =  $_SESSION["dado".$i];
  }//Fin for
  //Si se ha realizado una tirada de dados
  if(isset($_POST['tirada'])){
    for ($i = 1; $i <= 5 ; $i++){
      $_SESSION["dado".$i]->tira();
      $_SESSION['tir']++;
    }//Fin for
  }//Fin if
  //Introducimos en la clase las tiradas
  Dados::setTiradastotales($_SESSION['tir']);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
      <header><h1>Jugadas de POKER</h1></header>
      <section>
          <article>
              
    <?php
    //Si se ha realizado las tiradas se imprimen los dados.
    if($_SESSION['tir'] > 0){
      for ($i = 1; $i <= 5 ; $i++){
          echo $_SESSION["dado".$i]->nombreFigura()."<br>";
      }//Fin for
      echo "Tiradas Totales: ". Dados::getTiradastotales();
    } //Fin if
    //Serializamos los objetos en variables de sesión.
    for ($i = 1; $i <= 5 ; $i++){
          $_SESSION["dado".$i] = serialize( $_SESSION["dado".$i]);
      }//Fin for
    ?>
              <form action="#" method="POST">
                  <button type="submit" name="tirada">TIRAR DADOS</button>
              </form>
          </article>
      </section>
  </body>
</html>