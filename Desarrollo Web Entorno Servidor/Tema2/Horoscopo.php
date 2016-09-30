<!DOCTYPE html>
<!--
Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0).
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <h1>Horoscopo</h1>
       <form method="POST" action="Horoscopo.php">
            <p> Por favor, introduce el dia y el mes:</p>
            <input type="number" name="dia" step="1"><br>
            <input type="number" name="mes" step="1"><br>
            <input type="submit" name="dato" value="Aceptar">
        </form>
        <?php
        
        if((isset($_POST["dato"])==True)){
            $horoscopo;
            $dia=$_REQUEST["dia"];
            $mes=$_REQUEST["dia"];
           switch($mes) {
      case 1:
        if ($dia < 21) {
          $horoscopo = "capricornio";
        } else {
          $horoscopo = "acuario";
        }
        break;
      case 2:
        if ($dia < 20) {
          $horoscopo = "acuario";
        } else {
          $horoscopo = "piscis";
        }
        break;
      case 3:
        if ($dia < 21) {
          $horoscopo = "piscis";
        } else {
          $horoscopo = "aries";
        }
        break;
      case 4:
        if ($dia < 21) {
          $horoscopo = "aries";
        } else {
          $horoscopo = "tauro";
        }
        break;
      case 5:
        if ($dia < 20) {
          $horoscopo = "tauro";
        } else {
          $horoscopo = "géminis";
        }
        break;
      case 6:
        if ($dia < 22) {
          $horoscopo = "géminis";
        } else {
          $horoscopo = "cáncer";
        }
        break;
      case 7:
        if ($dia < 22) {
          $horoscopo = "cáncer";
        } else {
          $horoscopo = "Leo";
        }
        break;
      case 8:
        if ($dia < 24) {
          $horoscopo = "leo";
        } else {
          $horoscopo = "virgo";
        }
        break;
      case 9:
        if ($dia < 23) {
          $horoscopo = "virgo";
        } else {
          $horoscopo = "libra";
        }
        break;
      case 10:
        if ($dia < 23) {
          $horoscopo = "libra";
        } else {
          $horoscopo = "escorpio";
        }
        break;
      case 11:
        if ($dia < 23) {
          $horoscopo = "escorpio";
        } else {
          $horoscopo = "sagitario";
        }
        break;
      case 12:
        if ($dia < 21) {
          $horoscopo = "sagitario";
        } else {
          $horoscopo = "capricornio";
        }
        break;
      default:
    }

    echo "Su horóscopo es " . $horoscopo;


        }
        ?>
    </body>
</html>
