<!--Se abre PHP-->
<?php

if (!empty($_POST["btnregistar"])) {//Se pone una condicion
    if (!empty($_POST["nombre"]) and !empty($_POST["ti"]) and !empty($_POST["fecha_nacimiento"]) and !empty($_POST["genero"])) {//Se pone una condicion verificando que los campos no estan vacios
 
        $nombre = $_POST["nombre"];//Se define la variable
        $ti = $_POST["ti"];//Se define la variable
        $fecha_nacimiento = $_POST["fecha_nacimiento"];//Se define la variable
        $genero = $_POST["genero"];//Se define la variable


        $conexion = new mysqli("localhost", "root", "", "crud_educaprom");//Se hdefine la variable

        $sql = mysqli_query($conexion,"INSERT INTO usuarios(nombre, ti, fecha_nacimiento, genero) VALUES ('$nombre', '$ti', '$fecha_nacimiento', '$genero')");//Se hace la conexion con la base de datos subiendolo a la base de datos segun sus valores
        
        if ($sql == 1) { //Se pone una condicion
            echo "<div class='alert alert-success'>El usuario ha sido registrado correctamente</div>";////Imprime la informacion
            
            
        } else {//Si no cumple la condicion
            echo "<div class='alert alert-danger'>Error al registrar al usuario</div>";//Imprime la informacion
        }
    } else {//Si no cumple las dos condicion
        echo "<div class='alert alert-warning'>Alguno de los campos están vacío</div>";//Imprime la informacion
    }//Cierra el else
}//Cierra el If

?><!--Se cierra PHP-->
