<!DOCTYPE html> <!--Abrir html-->
<html lang="en"> <!--Lenguaje en ingles-->
<head> <!--Abrir cabeza-->
    <meta charset="UTF-8"> <!-- Establece la codificación del documento en UTF-8-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Configura la ventana gráfica para que se ajuste al dispositivo en el que se está viendo-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!--Le dice a los navegadores que usen el motor de renderizado más reciente.-->
    <link rel="icon" type="image/png" href="./Matriculas/gorro-de-graduacion.png"> <!--Agrega un icono al sitio web.-->
    <title>Inscripción</title> <!--Establece el título del sitio web.--> 
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!--Agrega fuentes de Google Fonts al sitio web.-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Agrega fuentes de Google Fonts al sitio web.-->
    <link href="https://fonts.googleapis.com/css2?family=REM:wght@200&display=swap" rel="stylesheet"> <!--Agrega fuentes de Google Fonts al sitio web.-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!--Agrega fuentes de Google Fonts al sitio web.-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!--Agrega fuentes de Google Fonts al sitio web.-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Agrega fuentes de Google Fonts al sitio web.-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet"> <!--Agrega fuentes de Google Fonts al sitio web.-->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Agrega fuentes de Google Fonts al sitio web.-->
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> <!--Agrega fuentes de Google Fonts al sitio web.-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css"> <!--Agrega la hoja de estilos de Bootstrap Datepicker al sitio web-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css"> <!--Agrega la hoja de estilos de Bootstrap Datepicker al sitio web-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css"> <!--Agrega la hoja de estilos de Bootstrap Datepicker al sitio web-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script> <!--Agrega la biblioteca jQuery al sitio web.-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script> <!--Agrega la biblioteca jQuery al sitio web.-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script> <!--Agrega la biblioteca jQuery al sitio web.-->


    <link rel="stylesheet" href="./Matriculas/estilos.css"> <!-- Agrega la hoja de estilos estilos.css al sitio web.-->
    <script src="./funcionboton1.js"></script> <!-- Agrega el archivo JavaScript funcionboton1.js al sitio web.-->

    
   
</head> <!--Cerrar cabeza-->
<body> <!--Abrir cuerpo-->
  
    <section class="form_wrap"> <!--Etiqueta de apertura de la sección form_wrap-->

        <section class="cantact_info"> <!--etiqueta de apertura de la sección cantact_info. -->
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <img src="./imagenes/escudo csc.png" alt="" style="height: 250px;width: 250px;">
            </section> <!--Etiqueta de apertura y cierre de la sección info_title. En esta sección se encuentra el título del formulario y el escudo del colegio.--> 
            <section class="info_items">
               
                <img src="./imagenes/EducaProm Nuevo.png" alt="" style="height: 250px;width: 370px; margin-top: -80px;">
            </section> 
        </section> <!-- Etiqueta de apertura y cierre de la sección info_items. En esta sección se encuentra el logotipo del programa EducaProm.--> 

        <form action="./principal1.php" class="form_contact" method="post"> 
            <div class="container_form">  <!-- Etiqueta de apertura del formulario de inscripción. El formulario se enviará a la página principal1.php y el método de envío es post. Etiqueta de apertura de la sección container_form.-->
            <h2 style="margin-bottom: 25px;">Inscripción</h2>
            <div class="user_info"> <!--Etiqueta de encabezado h2 con el título del formulario. Etiqueta de apertura de la sección user_info.-->
                <label for="names" >Nombres y Apellidos *</label>
                <input type="text" name="nombre" id="nombre" required placeholder="Ingrese el nombre del estudiante" style="font-family: inherit; font-size: 15px;" class="fw-bold">

               <!-- Etiqueta label para el campo de nombre. Etiqueta de entrada input de tipo texto para el campo de nombre. El campo es requerido y tiene un marcador de posición que indica al usuario que debe ingresar el nombre del estudiante.-->

                <label style="margin-bottom: 15px ;" for="names" >Documento de identidad*</label>
          
            <input type="text" name="ti" id="ti" required placeholder="Hasta 10 dígitos" style="font-family: inherit; font-size: 15px;" class="fw-bold">
 <!--Etiqueta label para el campo de documento de identidad. Etiqueta de entrada input de tipo texto para el campo de documento de identidad. El campo es requerido y tiene un marcador de posición que indica al usuario que debe ingresar su documento de identidad.-->

            <label for="start">Fecha de nacimiento *</label>

<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" name="trip-start" style="font-family: inherit;"  required />
 <!--Etiqueta label para el campo de fecha de nacimiento. Etiqueta de entrada input de tipo fecha para el campo de fecha de nacimiento.-->
 
<label for="gender">Genero *</label> <!--Crea una etiqueta de texto para el campo de selección de género.-->
                <select name="genero" class="form-select" aria-label="Default select example" class="fw-bold" id= "genero" required> <!--Crea un campo de selección para el género del estudiante. -->
                  <option selected>Selecciones el genero del estudiante</option>
                  <option value="1" style="font-weight: bold;">Masculino </option>
                  <option value="2" style="font-weight: bold;">Femenino</option>
                  <option value="3" style="font-weight: bold;">Otro</option>
                </select>
<!--Crea las opciones del campo de selección. Cada opción tiene un valor y un texto. La primera opción está seleccionada por defecto.-->
 
                
                

               <button onclick="submitForm(event)" type="submit">    Siguiente  </button> <!--Crea un botón para enviar el formulario con el atributo onclick: El botón llama a la función submitForm() cuando se hace clic en él.-->
            </div> <!--Cerrar div-->
        </form> <!--Cerrar form-->

    </section><!--Cerrar section-->


</body><!--Cerrar body-->

</html><!--Cerrar html-->
