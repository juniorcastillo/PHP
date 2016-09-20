<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
	<style>
		html,body{
			margin:0px;
			padding:0px;
		}
		table,td{
 			border: 1px solid black;
 			margin-left:35%;
		}
	</style>
</head>


<body>
<?php

	$servidor = "localhost"; //el servidor que utilizaremos, en este caso será el localhost
	$usuario = "root"; //El usuario que acabamos de crear en la base de datos 
	$password = ""; //La contraseña del usuario que utilizaremos 
	$BD = "hospital"; //El nombre de la base de datos 
	
	$conexion = mysqli_connect($servidor, $usuario, $password,$BD); // SE conecta a la base de datos introducciendo los valores que podemos observar
	if(mysqli_connect_errno()){//Esto se utiliza para comprobar si hay un error al conectarte a la base de datos 
	  
		echo "No se ha podido conectar a la base de datos";
		exit();// Esta funcion se encarga de salir de los procesos 
	}
	//Con esta funcion podemos codificar la codificacion de los caracteres 
	 mysqli_set_charset($conexion,"utf8");
	
	$consulta="SELECT * FROM medico";
	//para ejecutar la consulta tenemosque utilizar la funcion mysqli_query
	$resultado=mysqli_query($conexion ,$consulta);
	
	$fila=mysqli_fetch_row($resultado);//Esto lo almacena los datos de la base de datos en un array
	echo"<table> ";
	
	while($fila=mysqli_fetch_row($resultado)){
	   echo"<tr>";
	   for($i=0;$i<count($fila);$i++){
	     
		  echo "<td>" . $fila[$i] . "</td>";
	      
	   }
	   echo "</tr>";
	}
	
	
    echo "</table>";

mysqli_close($conexion);
?>
</body>
</html>
