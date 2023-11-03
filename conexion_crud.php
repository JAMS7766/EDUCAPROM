<!--Se abre PHP-->
<?php
$conexion = new mysqli("localhost", "root", "", "crud_educaprom"); //Se crea la conexion con la base de datos

if ($conexion->connect_error) { //Se pone una condicion
    die("Connection failed: " . $conexion->connect_error);//Se muestra mensaje segun la condicion
}//Se cierra la condicion
?><!--Se cierra PHP-->