<?php
function conectar($telefono, $correo, $calle, $barrio, $ciudad, $nivel, $grado) { //Declara una función llamada conectar() La función conectar() devuelve un objeto mysqli que representa la conexión a la base de datos.


    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "nuevo educaprom";
    //Estas líneas establecen las variables user, pass, server y db con la información de conexión a la base de datos.



    $con = new mysqli($server, $user, $pass, $db);
    //Esta línea crea una nueva conexión a la base de datos utilizando la información de conexión establecida en las líneas anteriores.


    $sql = "INSERT INTO inscripciones2 (telefono, correo, calle, barrio, ciudad, nivel, grado) VALUES ('$telefono', '$correo', '$calle',' $barrio', '$ciudad', '$nivel', '$grado')";
//Esta línea establece la variable sql con la consulta SQL para insertar los datos del estudiante en la base de datos.


    if ($con->query($sql) === TRUE) {
        //Esta línea comprueba si la consulta SQL se ejecutó correctamente. Si se ejecutó correctamente, se devuelve el valor TRUE.


    } else { //Si la consulta SQL no se ejecutó correctamente, se muestra un mensaje de error.


        echo "Error al insertar datos: " . $con->error;
        //Esta línea comprueba si hubo un error al conectar a la base de datos. Si hubo un error, se muestra un mensaje de error y se detiene la ejecución del script.


    }

    if ($con->connect_error) {
        die("Error al conectar a la base de datos: " . $con->connect_error);
    }

    return $con;
            //Esta línea devuelve la conexión a la base de datos.

}
?>