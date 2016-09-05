<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
	/* declarar constante, la funcion define  se 
	puede poner true para reconzca como igual la mayuscula y la miniscula
	*/
	define("AUTOR","Junior" , true);
	echo "El autor es: " . AUTOR . "<br>";
    // El punto siver para concatenar los valores string, enteros y boleana
	
	echo "la linea donde esta esta instruccion es: " . __LINE__;
?>
</body>
</html>
