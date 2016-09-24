<style>

.resultado{
	
	color:red;
	font-weight:bold;
	font-size:30px;
	
}
</style>


<?php
	//Prueba de array en PHP el isset se encarga de de saber cuando el bottom de enviar se push
	
	 
	 if (isset($_POST["dato"])){//programa de la calculadora 
	/* $Array = array($_POST["dato1"]);//Array de prueba 
		 echo $Array[0];*/
		 
		 
		 
		 $elemento1=$_POST["dato1"];
		 $elemento2=$_POST["dato2"];
		 $operacion=$_POST["operacion"];
		 calcular($operacion);
	 }
		 
		function calcular($operacion){
			global $elemento1;
			global $elemento2;

			switch ($operacion) {
				case "suma":
					echo "Resultado= <span class=\"resultado\"> " . ($elemento1 + $elemento2) . "</span>";
					break;
				case "resta":
					echo "Resultado= " . ($elemento1 - $elemento2);
					break;
				case "multiplicacion":
					echo "Resultado= " . ($elemento1 * $elemento2);
					break;
				default:
				echo "Lo sentimos la operacion que a elegido no esta en funcion";
            }
			
		}
		   
			 
		 
	?>