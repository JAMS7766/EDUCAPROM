<!DOCTYPE html> <!--Abrir html-->
<html lang="en"> <!--Lenguaje en ingles-->
<head>  <!--Abrir cabeza-->
    <meta charset="UTF-8"> <!-- Establece la codificación del documento en UTF-8-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Configura la ventana gráfica para que se ajuste al dispositivo en el que se está viendo-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!--Le dice a los navegadores que usen el motor de renderizado más reciente.-->
    <link rel="icon" type="image/png" href="./Matriculas/gorro-de-graduacion.png">  <!--Agrega un icono al sitio web.-->
    <title>Inscripción</title> <!--Establece el título del sitio web.--> 
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!--Agrega fuentes de Google Fonts al sitio web.-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Agrega fuentes de Google Fonts al sitio web.-->
    <link href="https://fonts.googleapis.com/css2?family=REM:wght@200&display=swap" rel="stylesheet">  <!--Agrega fuentes de Google Fonts al sitio web.-->
    <link rel="preconnect" href="https://fonts.googleapis.com"><!--Agrega fuentes de Google Fonts al sitio web.-->
    <link rel="preconnect" href="https://fonts.googleapis.com"><!--Agrega fuentes de Google Fonts al sitio web.-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><!--Agrega fuentes de Google Fonts al sitio web.-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet"> <!--Agrega fuentes de Google Fonts al sitio web.-->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Agrega fuentes de Google Fonts al sitio web.-->
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> <!--Agrega fuentes de Google Fonts al sitio web.-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <!--Agrega la hoja de estilos de Bootstrap Datepicker al sitio web--> 
    
<link rel="stylesheet" href="./Matriculas/estilos.css"> <!-- Agrega la hoja de estilos estilos.css al sitio web.-->
<script src="./funcionboton2.js"></script> <!-- Agrega el archivo JavaScript funcionboton1.js al sitio web.-->
 

   

</head> <!-- Cerrar cabeza -->



<body> <!-- Abrir cuerpo -->

    <section class="form_wrap"> <!--Etiqueta de apertura de la sección form_wrap-->

        <section class="cantact_info"> <!--etiqueta de apertura de la sección cantact_info. -->
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <img src="./imagenes/escudo csc.png" alt="" style="height: 250px;width: 250px;">
            </section>
            <!--Esta sección contiene el título de la información de contacto y el logotipo de la escuela.-->
            
            <section class="info_items">
                <img src="./imagenes/EducaProm Nuevo.png" alt="" style="height: 250px;width: 370px; margin-top: -80px;">
            </section>
            <!--Esta sección contiene una imagen de EducaProm.-->


        </section> <!--Cierra la sección cantact_info.-->

        <form action="./principal2.php" class="form_contact" method="post"> <!--Esta línea abre un formulario con la acción ./principal2.php, la clase form_contact y el método post. Este formulario se utilizará para inscribir a los estudiantes.-->
       
            <label for="phone" style="font-family: inherit;" >Telefono / Celular *</label>
            <input type="text" name="telefono" id="telefono" required style="padding: 3px; font-family: inherit;">

            <label for="email" style="font-family: inherit;">Correo electronico *</label>
            <input type="text" name="correo" id="correo" required style="padding: 3px; font-family: inherit;">
               <!--Estas líneas crean dos campos de formulario, uno para el teléfono y otro para el correo electrónico. Los campos son obligatorios, lo que significa que el usuario debe ingresar un valor para cada campo antes de enviar el formulario.-->
<br>
                <div class="input-box address">
                    <label for="names" style="font-family: inherit;">Dirección *</label>
                    <input name="calle" id="calle" type="text" placeholder="Calle # (# de casa o apto opcional)" required style="font-family: inherit;"/>
                    <input name="barrio" id="barrio" type="text" placeholder="Barrio/Conjunto" required style="font-family: inherit;" />
                    <input name="ciudad" id="ciudad" type="text" placeholder="Ciudad" required style="font-family: inherit;" />
                    </div>
                   <!-- Esta sección crea un campo de formulario para la dirección del estudiante. El campo de formulario es obligatorio, lo que significa que el usuario debe ingresar un valor para el campo antes de enviar el formulario.-->


                    <label for="names" style="font-family: inherit;">Nivel Académico*</label> <!-- Esta línea crea una etiqueta label para el campo de formulario de nivel académico.-->
                    <select name="nivel"id="nivel" class="form-select" aria-label="Default select example" style="margin-bottom: 10px ;"> <!-- Esta línea crea un campo de formulario de selección para el nivel académico. El campo de formulario es obligatorio, lo que significa que el usuario debe seleccionar un valor antes de enviar el formulario.-->
                      <option selected>Seleccione nivel academico a ingresar</option>
                      <option value="1">Primaria</option>
                      <option value="2">Bachillerato</option>
                      <!--Estas líneas crean tres opciones para el campo de formulario de nivel académico: seleccionar nivel académico a ingresar, primaria y bachillerato.-->
                     <br>
                    </select> <!--Cierra el campo de formulario de selección de nivel académico.-->
                    <label for="names">Grado a Ingresar*</label> <!--Esta línea crea una etiqueta label para el campo de formulario de grado a ingresar.-->
                    <select name="grado" id="grado" class="form-select" aria-label="Default select example" style=" margin-top:5px;"> <!--Esta línea crea un campo de formulario de selección para el grado a ingresar. El campo de formulario es obligatorio, lo que significa que el usuario debe seleccionar un valor antes de enviar el formulario.-->
                      <option selected>Seleccione grado a ingresar</option> 
                      <option value="1">Primero</option>
                      <option value="2">Segundo</option>
                      <option value="3">Tercero</option>
                      <option value="4">Cuarto</option>
                      <option value="5">Quinto</option>
                      <option value="6">Sexto</option>
                      <option value="7">Septimo</option>
                      <option value="8">Octavo</option>
                      <option value="9">Noveno</option>
                      <option value="10">Decimo</option>
                      <option value="11">Once</option>
                     <br>
                    </select>
                    <!--Estas líneas crean once opciones para el campo de formulario de grado a ingresar: seleccionar grado a ingresar, primero, segundo, tercero, cuarto, quinto, sexto, séptimo, octavo, noveno, décimo y undécimo.-->
                    <button  onclick="submitForm(event)" type="submit">   Siguiente</button><!-- Esta línea crea un botón de envío para el formulario. El botón de envío tiene un atributo onclick que llama a la función submitForm() cuando se hace clic en él.-->


            </div>
            </div>
        </form>
        <!--Estas líneas cierran el formulario y las etiquetas div que lo contienen.-->
<div id="error"></div> <!--Esta línea crea una etiqueta div con el identificador error. Esta etiqueta se utilizará para mostrar cualquier mensaje de error que ocurra al enviar el formulario.-->
    </section> <!--Cierra la sección cantact_info-->

</body>
<style>
    /*Formulario Incripciones 2*/

    form.form_contact{
        width: 62%;
        padding: 30px 40px;
    }
    
    form.form_contact h4{
        font-size: 15px;
        font-weight: 600;
        color: #303030;
        margin-bottom: 30px;
        font-family: 'Varela Round', sans-serif;
    }
    
    form.form_contact.input-box address{
        display: flex;
        flex-direction: column;
        
    }
    
    form.form_contact label{
        font-weight: 600;
    }
    
    form.form_contact input,
    form.form_contact textarea{
        width: 100%;
        padding: 8px 0px 5px;
        margin-bottom: 10px;
    
        border: none;
        border-bottom: 2px solid #D1D1D1;
    
        font-family: 'inhedit';
        color: #5A5A5A;
        font-size: 14px;
        font-weight: 400;
    }
    
    form.form_contact textarea{
        max-width: 100%;
        min-width: 100%;
        max-height: 90px;
}
.grade{
 
 font-family: 'Varela Round', sans-serif;
 font-size: 20px;
 margin-top: 2px;
}
form.form_contact button[type="submit"]{
    width: 150px;
	background: #4091EC;
	padding: 8px;
	border: none;
    
	border-radius: 25px;
   
    margin-bottom: 15px;
   

    color: #fff;
	font-family: 'REM', sans-serif;
	font-size: 16px;
	font-weight: 600;
	cursor: pointer;
    
   
}
.form-select{
    margin-bottom: 20px ; 
    margin-top: 2px;
    font-weight: bold; 
    border-radius: 20px; 
}

/*Media*/
@media (max-width:1300px){
    .form-select{
    max-width: 720px;
    height: 35px;
    border-radius: 20px;
}



}


</style>
</html>


