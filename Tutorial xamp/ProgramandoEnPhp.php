<?php
//variables 
$nombre= 'Junior';
$nacionalidad= 'Dominicana';
$edad= 19;
$negativo= 'Quien eres, no lo conozco'; 
//Test de nombre y nacionalidad

	if ($nombre == 'Junior' && $nacionalidad == 'Dominicana' && $edad <= 18){
		echo 'Bienvenido joven. <br> En que puedo servirle';
	
	}else{
		echo $negativo;
	}
	
?>