<!--Se abre PHP-->
<?php
        $id = $_GET["id"];//Se define la variable

        $conexion = new mysqli("localhost", "root", "", "crud_educaprom");//Se define la variable

        $sql = mysqli_query($conexion, "DELETE FROM usuarios WHERE id_registro = $id"); //Se hace la conexion con la base de datos con la condicion de elimiar

        if ($sql) {//Se crea una condicion
            echo "<script>window.location.href='../secretaria2.php'</script>";//Lo lleva al link adjuntado
        } else {//Si no cumple la condicion
            echo "<div class='alert alert-danger'>Error al eliminar el usuario</div>";//Imprime la informacion
        }//Cierra la condicion
?><!--Se cierra PHP-->


