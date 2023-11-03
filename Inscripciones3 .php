<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="./">
    <title>Inscripción</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=REM:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://fontawesome.com/icons/file-doc?f=sharp&s=solid" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<link rel="stylesheet" href="./Estilo Inscripciones3.css">
<script src="./funcionboton3.js"></script>


 
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
   
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif; 
   }

   
</style>
</head>
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
               
                <img src="./imagenes/escudo csc.png" alt="" style="height: 250px;width: 250px;">
            </section>
            <section class="info_items">
               
                <img src="./imagenes/EducaProm Nuevo.png" alt="" style="height: 250px;width: 370px; margin-top: -80px;">
            </section>
        </section>


        

<div class="container">

   
  <center>  <img src="https://static.vecteezy.com/system/resources/thumbnails/000/421/699/small/Web__2835_29.jpg" style="margin-top: -80px; width: 90px; margin-right:50px " />  <h4 style="margin-bottom: 7px; margin-top: -10px;">Archivos de Validacion </h4></center>

  

        <form action="./principal3.php" method="post" enctype="multipart/form-data">

        <section>
   
                <div class="row gy-1" style="margin-bottom:15px; margin-left: -50px;">
                  <div class="col-6" >
                    <div class="p-2 border bg-light">        <label for="formFileLg" class="form-label" style="font-size: 15px;">Fotocopia de Tarjeta de identidad</label>
                        <input name="fot_ti" class="form-control form-control-lg" id="formFileLg1" type="file"  style="width:180px; font-size:15px; height: 20px; margin-left: 40px;" ></div>
                  </div>
                  <div class="col-6">
                    <div class="p-2 border bg-light">        <label for="formFileLg" class="form-label" >Certificado eps</label>
                        <input name="recibo_matricula" class="form-control form-control-lg" id="formFileLg2" type="file"  style="width:180px; font-size:15px; height: 20px; margin-left: 40px;" ></div>
                  </div>
                  <div class="col-6">
                    <div class="p-2 border bg-light">        <label for="formFileLg" class="form-label"  >Certificado médico </label>
                        <input name="eps" class="form-control form-control-lg" id="formFileLg3" type="file"  style="width:180px; font-size:15px; height: 20px; margin-left: 40px;" ></div>
                  </div>
                  <div class="col-6">
                    <div class="p-2 border bg-light">        <label for="formFileLg" class="form-label" >Paz y Salvo del colegio</label>
                        <input name="medico" class="form-control form-control-lg" id="formFileLg4" type="file"  style="width:180px; font-size:15px; height: 20px; margin-left: 40px;" ></div>
                  </div>
                  <div class="col-6">
                    <div class="p-2 border bg-light">        <label for="formFileLg" class="form-label" >Recibo de pago de matrícula</label>
                        <input name="paz_y_salvo" class="form-control form-control-lg" id="formFileLg5" type="file"  style="width:180px; font-size:15px; height: 20px; margin-left: 40px;" ></div>
                  </div>
                  <div class="col-6">
                    <div class="p-2 border bg-light">        <label for="formFileLg" class="form-label"  >Recibo de pago de pensión</label>
                        <input name="recibo_pension" class="form-control form-control-lg" id="formFileLg6" type="file"  style="width:180px; font-size:15px; height: 20px; margin-left: 40px;" ></div>
                 
                        <button  class="boton" type="submit"  onclick="submitForm(event)">  Siguiente </button>
                       
                      </div>
                </div>
              </div>


             
              </section>  

              


             
              
  </form>
</body>

<style>
.boton[type="submit"] {
    width: 135px;
	background: #4091EC;
	padding: 8px;
	border: none;
    
	border-radius: 25px;
   
  
   margin-top:6px;
   margin-left: 140px;

    color: #fff;
	font-family: 'REM', sans-serif;
	font-size: 16px;
	font-weight: 600;
	cursor: pointer;
    text-decoration: none;
    align-content: end;

    
}

.boton[type="submit"]:hover{
    background: #3371B6;
 
}
</style>


</html>
