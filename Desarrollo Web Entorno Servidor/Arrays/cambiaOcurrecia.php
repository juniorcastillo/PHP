<!DOCTYPE html>
<!--
Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
Los números que se han cambiado deben aparecer resaltados de un color diferente.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Array aleatorio</h1>
        <?php
         for ($i = 0; $i < 100; $i++) {
            $numero[$i] = rand(0, 20);
            echo $numero[$i] . " " ;
         }
         
        if((isset($_REQUEST['numero1'])) && (isset($_REQUEST['numero1']))){
            
            
            
        }else{ 
         
        ?>
        
         <h1>Introduzca 2 numeros por teclado:</h1>
         <form action="cambiaOcurrecia.php" method="get">


                <input type="number" name ="numero1" autofocus>
                <input type="number" name ="numero2" autofocus>
                <input type="submit" value="OK">
            </form>
        <?php }?>
    </body>
</html>
