<?php //Inicia el bloque de código PHP.

require_once("conexion2.php"); //Incluye el archivo conexion2.php, que contiene la conexión a la base de datos.

if (isset($_POST['telefono'], $_POST['correo'], $_POST['calle'], $_POST['barrio'], $_POST['ciudad'], $_POST['nivel'], $_POST['grado'])) { //Verifica que se hayan enviado los datos del formulario.


    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $calle = $_POST['calle'];
    $barrio = $_POST['barrio'];
    $ciudad = $_POST['ciudad'];
    $nivel = $_POST['nivel'];
    $grado= $_POST['grado'];
    //Asigna los valores de los campos del formulario a variables locales.

$con = conectar($telefono, $correo, $calle, $barrio, $ciudad, $nivel, $grado); //Llama a la función conectar() para conectarse a la base de datos y registrar los datos del formulario.


echo "<script>window.location.href ='./Inscripciones3 .php' </script>"; //Redirecciona al usuario a la página Inscripciones3.php.


} 
?>
