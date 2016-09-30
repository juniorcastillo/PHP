<!DOCTYPE html>
<!--
Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="Saludos.php">
            <p> Que hora es:</p>
            <input type="number" name="hora"><br>
            <input type="submit" name="dato" value="Aceptar">
        </form>
        
        
        
        <?php
       
        if((isset($_POST["hora"])==True)){
          $hora=$_REQUEST["hora"];
     //  
            switch ($hora){

                case (($hora >=6) && ($hora <=12)):
                  echo "Buenos dias"; 
                  break;

                case (($hora >=13) && ($hora <=20)):
                  echo "Buenas tardes"; 
                  break;


                case (($hora >=21) && ($hora <=5) && ($hora <=24)):
                  echo "Buenas noches"; 
                  break;
              default :

            }
        }
        ?>
        
    </body>
</html>
