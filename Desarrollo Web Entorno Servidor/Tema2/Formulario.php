<!DOCTYPE html>
<html lang="es">
<head>
 <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
</head>
<body>

	<form action="#" method="post">
        <label for="dato1"></label>	
		<input type="text" name="dato1" id="dato1"> <span>y</span>
		 <label for="dato2"></label>
		<input type="text" name="dato2" id="dato2">
		<select name="operacion">
		

		  <option value="suma">Suma</option>
		  <option value="resta">Resta</option>
		  <option value="multiplicacion">Multiplicacion</option>
		  <option value="divicion">Division</option>

		</select>
		<br><br>
		<input type="submit" name="dato" value="enviar" onClick="prueba">

	</form>
	
	<?php
	//Prueba de array en PHP
	
	 
	 if (isset($_POST["dato"])){//programa de la calculadora 
	 $Array = array($_POST["dato1"]);//Array de prueba 
	 
	 
		 echo $Array[0];
		 
		 $elemento1=$_POST["dato1"];
		 $elemento2=$_POST["dato2"];
		 $operacion=$_POST["operacion"];
		 
		    switch ($operacion) {
				case "suma":
					echo "Resultado= " . ($elemento1 + $elemento2);
					break;
				case "resta":
					echo "Resultado= " . ($elemento1 - $elemento2);
					break;
				case "multiplicacion":
					echo "Resultado= " . ($elemento1 * $elemento2);
				default:
				echo "Lo sentimos la operacion que a elegido no esta en funcion";
            }
			 
		 }
	?>
</body>
</html>