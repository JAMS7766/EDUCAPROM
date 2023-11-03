<!--Se abre PHP-->
<?php

include "modelo/conexion_crud.php"; //Se incluye el archivo correspondiente

$id = $_GET ["id"];//Se definde variable


?><!--Se cierra PHP-->

<!DOCTYPE html><!-- Se abre el documento HTML -->
<html lang="en"><!-- Se deja el luenguaje en Ingles para HTML -->
<head><!-- Se abre cabeza -->
    <meta charset="UTF-8"> <!--Especificar el conjunto de caracteres-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Adaptacion para dispoitivos moviles-->
    <title>Crud en PHP</title><!--Se crea el titulo de la pagina-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><!--Se hace vinculo con Boobstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /><!--Se hace vinculo con CSS-->
</head><!-- Se cierra cabeza -->
<body><!-- Se abre cuerpo -->
<form class="col-4 p-3 m-auto" method="POST"><!-- Se abre formuario -->
          <h3 class = "text-center text-secondary"> Modificacion de Usuario</h3><!-- Se agrega texto tipo subtitulo -->
          <input type="hidden" name= "id" value = "<?= $_GET ["id"] ?>"><!-- Se muestra el campo de texo digitado -->

          <?php //Se abre PHP
          include "controlador/editar.php";//Se incluye el archivo correspondiente
          $sql= mysqli_query($conexion, "SELECT * FROM usuarios where id_registro= $id" ); //Se hace relacion con la base de datos
           while ($datos=$sql->fetch_object()){//Busca el dato segun la base de datos
          ?> <!--Se cierra PHP-->
          <div class="mb-3"><!--Se abre div-->
            <label for="exampleInputEmail1" class="form-label">Nombre del Usuario</label><!-- Se abre label para dar descripcion al campo de texto -->
            <input type="text" class="form-control" name="nombre" value="<?= $datos-> nombre?>"><!-- Se muestra el campo de formulario digitado -->
          </div><!--Se cierra div-->
          <div class="mb-3"><!--Se abre div-->
            <label for="exampleInputEmail1" class="form-label">TI del Usuario</label><!-- Se abre label para dar descripcion al campo de texto -->
            <input type="text" class="form-control" name="ti" value="<?= $datos-> ti?>"><!-- Se muestra el campo de formulario digitado -->
          </div><!--Se abre div-->
          <div class="mb-3"><!--Se abre div-->
            <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label><!-- Se abre label para dar descripcion al campo de texto -->
            <input type="date" class="form-control" name="fecha_nacimiento" value="<?= $datos-> fecha_nacimiento?>"><!-- Se muestra el campo de formulario digitado -->
          </div><!--Se cierra div-->
          <div class="mb-3"><!--Se abre div-->
          <label for="gender">Genero </label><!-- Se abre label para dar descripcion al campo de texto -->
                <select name="genero" value="<?= $datos-> genero?>" class="form-select" aria-label="Default select example" class="fw-bold" id= "genero" required><!-- Se muestra la opcion que se escogio en el menu desplegable -->

                  <option value="1" style="font-weight: bold;">Masculino </option><!-- Una opcion del menu -->
                  <option value="2" style="font-weight: bold;">Femenino</option><!-- Una opcion del menu -->
                  <option value="3" style="font-weight: bold;">Otro</option><!-- Una opcion del menu -->
                </select><!-- Se cierra el menu de opciones -->
            
          </div><!--Se cierra div-->
          <button type="submit" class="btn btn-primary" name="btnregistar" value="OK" >Modificar</button><!-- Se crea un boton para Modificar -->
            
          <?php // Se abre PHP
           } // Se cierra la condicion while
          ?><!-- Se cierra PHP -->
       </form><!--Se cierra formulario-->
</body><!--Se cierra cuerpo-->
</html><!--Se cierra HTML-->