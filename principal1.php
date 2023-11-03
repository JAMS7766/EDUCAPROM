<?php /*Inicia el bloque de código PHP. */
require_once("conexion1.php"); /*Incluye el archivo conexion1.php, que contiene la conexión a la base de datos. */

if (isset($_POST['nombre'], $_POST['ti'], $_POST['fecha_nacimiento'], $_POST['genero'])) //Verifica que se hayan enviado los datos del formulario.


    $nombre = $_POST['nombre'];
    $ti = $_POST['ti'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
//Asigna los valores de los campos del formulario a variables locales.
    $con = conectar($nombre, $ti, $fecha_nacimiento, $genero); //Llama a la función conectar() para conectarse a la base de datos y registrar el nuevo usuario.
    echo "<script>window.location.href ='./Inscripciones2.php' </script>"; //Redirecciona al usuario a la página Inscripciones2.php.

    
 
?>
