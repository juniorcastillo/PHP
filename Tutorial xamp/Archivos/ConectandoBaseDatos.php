<?php 
echo "CONECTANDO BASE DE DATOS"; 
$conexion_bdd=mysqli_connect("localhost","root","","hospital");
if (!($conexion_bdd)) 
{ 
echo "Error conectando a la base de datos.".mysql_error(); 
exit(); 
} else{
session_start(); 
echo "CONEXION REALIZADA";}   
?>
<html> 
    <head> 
        <title>Conexión a la Base de Datos</title> 
    </head> 
<body> 
<?php


$consulta="SELECT * FROM medico";
//para ejecutar la consulta tenemosque utilizar la funcion mysqli_query
$resultado=mysqli_query($conexion_bdd ,$consulta);

$fila=mysqli_fetch_row($resultado);

echo var_dump($fila);

?>
</body> 
</html>