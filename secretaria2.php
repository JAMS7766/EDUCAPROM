<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><!--Se hace vinculo con Boobstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /><!--Se hace vinculo con CSS-->
    <link rel="icon" type="image/png" href="../imagenes/usuario.png">
    <title>Secretaria </title>

    <link rel="stylesheet" href="../css/estilos secretaria.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    <div class="general">
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
           <img src="../Matriculas/gorro-de-graduacion.png" alt="">
           
        </div>

        <div class="options__menu">	

            <a href="../secretaria1.html"  style="text-decoration:none">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="#" style="text-decoration:none">
                <div class="option">
                    <i class="fa-solid fa-cloud-arrow-down" title="Portafolio"></i>
                    <h4>Portafolio</h4>
                </div>
            </a>
            
            <a href="#"  class="selected" style="text-decoration:none">
                <div class="option">
                    <i class="fa-solid fa-table-columns" title="Cursos"></i>
                    <h4>Datos</h4>
                </div>
            </a>

            <a href="#" style="text-decoration:none">
                <div class="option">
                    <i class="fa-solid fa-gauge" title="Blog"></i>
                    <h4>Dashboard</h4>
                </div>
            </a>

      

            <a href="#" >
                <div class="option">
                    <i class="fa-solid fa-arrow-right-from-bracket" title="Nosotros"></i>
                  <a href="http://localhost/EducaProm/Inicio%20educaprom.html" style="text-decoration:none">  <h4>Salir</h4> </a>
                </div>
            </a>

        </div>

    </div>

    <main>
<div class="crud">
   
    <div class= "container-fluid row" ><!-- Se abre div -->
       <form class="col-4 p-3" method="POST"><!-- Se crea formulario-->
          

          <?php //Se abre PHP
          include ("controlador/registro_persona.php"); //Se incluye el archivo correspondiente
          ?><!-- Se cierra PHP -->

          <div class="mb-3"><!-- Se abre div -->
            <label for="exampleInputEmail1" class="form-label">Nombre del Usuario</label><!-- Se abre label para dar descripcion al campo de texto -->
            <input type="text" class="form-control" name="nombre"><!-- Se crea un campo de formulario para ingresar el texto -->
          </div><!-- Se cierra div -->
          <div class="mb-3"><!-- Se abre div -->
            <label for="exampleInputEmail1" class="form-label">TI del Usuario</label><!-- Se abre label para dar descripcion al campo de texto -->
            <input type="text" class="form-control" name="ti"><!-- Se crea un campo de formulario para ingresar el texto -->
          </div><!-- Se cierra div -->
          <div class="mb-3"><!-- Se abre div -->
            <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label><!-- Se abre label para dar descripcion al campo de texto -->
            <input type="date" class="form-control" name="fecha_nacimiento"><!-- Se crea un campo de formulario para ingresar el texto -->
          </div><!-- Se cierra div -->
          <div class="mb-3"><!-- Se abre div -->
          <label class="form-label">Genero </label><!-- Se abre label para dar descripcion al campo de texto -->
                <select name="genero" class="form-select" aria-label="Default select example" class="fw-bold" id= "genero" required><!-- Se crea un pequeño menu desplegable -->
                  <option selected>Selecciones el genero </option><!-- Se pone la opcion selecionar con nombre Genero -->
                  <option class= "optiong" value="1" style="font-weight: bold;">Masculino </option><!-- Una opcion del menu -->
                  <option class= "optiong" value="2" style="font-weight: bold;">Femenino</option><!-- Una opcion del menu -->
                  <option class= "optiong" value="3" style="font-weight: bold;">Otro</option><!-- Una opcion del menu -->
                </select><!-- Se cierra el menu de opciones -->
            
          </div><!-- Se cierra div -->
          
          <button type="submit" class="btn btn-primary" name="btnregistar" value="OK" >Registrar</button><!-- Se crea un boton para Registar -->
       </form><!-- Se cierra el formulario -->
       <div class= "col-8 p-4"><!-- Se abre div -->
               <table class="table table-striped table-primary" style="border-radius: 30px;"><!-- Se crea una tabla con base de Bobstrap -->
                 <thead class="bg-success"><!-- Se crea un encabezado -->
                     <tr><!-- Se crea una fila -->
                      <th class= "tablea" scope="col">Id</th><!-- Se define la celda en el encabezado -->
                      <th class= "tablea" scope="col">Nombre</th><!-- Se define la celda en el encabezado -->
                      <th class= "tablea" scope="col">TI</th><!-- Se define la celda en el encabezado -->
                      <th class= "tablea" scope="col">Fecha_nacimiento</th><!-- Se define la celda en el encabezado -->
                      <th class= "tablea" scope="col">Genero</th><!-- Se define la celda en el encabezado -->
                      <th class= "tablea"scope="col"></th><!-- Se define la celda en el encabezado -->
                     </tr><!-- Se cierra la fila -->
                 </thead><!-- Se cierra el encabezado -->
                 <tbody><!-- Se abre cuerpo de la tabla -->
                 <?php //Se abre PHP

                 include "modelo/conexion_crud.php"; //Se incluye el archivo correspondiente
                 //include "controlador/eliminar.php";

                 $sql= mysqli_query($conexion, "SELECT * FROM usuarios");//Se hace conexion con la base de datos

                  while ($datos=$sql->fetch_object()){?><!-- Se cierra PHP -->
                   <tr><!-- Se crea una fila -->
                     <td class= "tableb"><?= $datos-> id_registro ?> </td><!-- Se agrega el dato en la celda -->
                     <td class= "tableb"><?= $datos-> nombre ?></td><!-- Se agrega el dato en la celda -->
                     <td class= "tableb"><?= $datos-> ti ?></td><!-- Se agrega el dato en la celda -->
                     <td class= "tableb"><?= $datos-> fecha_nacimiento?></td>
                     <td class= "tableb"> <?= $datos-> genero ?></td><!-- Se agrega el dato en la celda -->
                     <td> <!-- Se abre td para la celda -->
                        <a href="edicion.php?id=<?= $datos-> id_registro ?>" class="btn btn small btn-info"><i class="fa-solid fa-pen-to-square"></i></a> <!-- Se pone un boto en la celda -->
                        <a href="controlador/eliminar.php?id= <?=$datos-> id_registro ?> " class="btn btn small btn-danger"><i class="fa-solid fa-trash"></i></a><!-- Se pone un boto en la celda -->
                     </td><!-- Se cierra td para la celda -->
                   </tr><!-- Se cierra la fila -->
                   <?php // Se abre PHP
                   } // Se cierra la condicion while
                   ?><!-- Se cierra PHP -->
                 </tbody><!-- Se cierra cuerpo de la tabla -->
               </table><!-- Se cierra tabla -->
        </div><!-- Se cierra div -->
    </div><!-- Se cierra div -->
                </main>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script><!--Se hace vinculo con Boobstrap-->
</body><!--Se cierra cuerpo-->
</html><!--Se cierra HTML-->
</div>
<script src="../js/script.js"></script>