<?php //Abrir php

function conectar($nombre, $ti, $fecha_nacimiento, $genero) { //Declara la función conectar(), que acepta cuatro parámetros
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "nuevo educaprom";
//Asigna valores a las variables que se utilizarán para conectarse a la base de datos.
    $con = new mysqli($server, $user, $pass, $db); //Crea una nueva conexión a la base de datos.

    $sql = "INSERT INTO inscripciones (nombre, ti, fecha_nacimiento, genero) VALUES ('$nombre', '$ti', '$fecha_nacimiento', '$genero')"; //Crea una consulta SQL para insertar los datos del estudiante en la base de datos.

    if ($con->query($sql) === TRUE) { //Ejecuta la consulta SQL.
       
    } else { //Si la consulta SQL falla, muestra un mensaje de error.
        echo "Error al insertar datos: " . $con->error; //Muestra un mensaje de error con la descripción del error.
    }

    if ($con->connect_error) { //Comprueba si la conexión a la base de datos falló
        die("Error al conectar a la base de datos: " . $con->connect_error); //Si la conexión a la base de datos falló, detiene el script.
    }

    return $con; // Devuelve la conexión a la base de datos.
}
?> <!--Cerrar php-->

