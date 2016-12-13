<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Vehículos</title>
    </head>
    <body>
		<?php
			/*
			 *
			 * @author Junior miguel Castillo
			 * 
			 */
			 
			 include_once 'Bicicleta.php';
			 include_once 'Coche.php';
			 
			 // crea una bicicleta con 21 marchas
			 $bicicleta = new Bicicleta("10");
			 
			 // crea un coche con 1900cc de cilindrada
			 $carro = new Coche(500);
			 
			 $bicicleta->recorre(60);
			 $carro->recorre(1000);
			 $bicicleta->recorre(60);
			 echo "<div>He paseado con mi bicicleta: ".$bicicleta->getKilometrosRodados()." Km</div>";
			 echo "<div>El carro a recorrido: ".$carro->getKilometrosRodados()." Km</div>";
			 echo "<div>Total de carros: ".Vehiculo::getVehiculosCreados()." vehículos</div>";
			 echo "<div>Todos los kilometros que han recorrido: ".Vehiculo::getkilometros_Totales()." Km</div>";
		?>
    </body>
</html>
