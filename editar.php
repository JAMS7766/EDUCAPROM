<!--Se abre PHP-->
<?php
if (!empty($_POST["btnregistar"])) {//Se pone una condicion
    if (!empty($_POST["nombre"]) and !empty($_POST["ti"]) and !empty($_POST["fecha_nacimiento"]) and !empty($_POST["genero"])) {//Se pone una condicion verificando que los campos no estan vacios

        $id = $_POST["id"]; //Se define la variable
        $nombre = $_POST["nombre"];//Se define la variable
        $ti = $_POST["ti"];//Se define la variable
        $fecha_nacimiento = $_POST["fecha_nacimiento"];//Se define la variable
        $genero = $_POST["genero"];//Se define la variable

        $conexion = new mysqli("localhost", "root", "", "crud_educaprom");//Se hdefine la variable

        $sql = mysqli_query($conexion,"UPDATE usuarios SET nombre= '$nombre', ti='$ti' , fecha_nacimiento='$fecha_nacimiento', genero='$genero' where id_registro= $id ") ;//Se hace la actualizacion de datos junto con la base de datos
        
        if ($sql == 1) { //Se pone una condicion
            echo "<script> window.location.href='secretaria2.php'</script>";//Lo lleva al link adjuntado
            
        } else {//Si no cumple la condicion
            echo "<div class='alert alert-danger'>Error al modificar el usuario</div>";//Imprime la informacion
        }
    } else { //Si no cumple las dos condicion
        echo "<div class='alert alert-warning'>Alguno de los campos están vacíos</div>";//Imprime la informacion
    }//Cierra el primer else
}//Cierra la condicion If

?><!--Se cierra PHP-->