<?php //Inicia el bloque de código PHP.




    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "nuevo educaprom";
//Establece las variables de conexión a la base de datos.


    $con = new mysqli($server, $user, $pass, $db); //Crea una conexión a la base de datos.



$carpeta_destino = "descargas/"; //Establece la carpeta de destino para los archivos subidos.



$fot_ti = basename($_FILES["fot_ti"]["name"]);
$eps = basename($_FILES["eps"]["name"]);
$medico = basename($_FILES["medico"]["name"]);
$paz_y_salvo = basename($_FILES["paz_y_salvo"]["name"]);
$recibo_matricula = basename($_FILES["recibo_matricula"]["name"]);
$recibo_pension = basename($_FILES["recibo_pension"]["name"]);
//Obtiene los nombres de los archivos subidos.


$ext_fot_ti = strtolower(pathinfo($fot_ti,PATHINFO_EXTENSION));
$ext_eps = strtolower(pathinfo($eps,PATHINFO_EXTENSION));
$ext_medico = strtolower(pathinfo($medico,PATHINFO_EXTENSION));
$ext_paz_y_salvo = strtolower(pathinfo($paz_y_salvo,PATHINFO_EXTENSION));
$ext_recibo_matricula = strtolower(pathinfo($recibo_matricula,PATHINFO_EXTENSION));
$ext_recibo_pension = strtolower(pathinfo($recibo_pension,PATHINFO_EXTENSION));
//Obtiene las extensiones de los archivos subidos.


if ($ext_fot_ti <> "pdf" or $ext_eps <> "pdf" or $ext_medico <> "pdf" or $ext_paz_y_salvo <> "pdf" or $ext_recibo_matricula <> "pdf" or $ext_recibo_pension <> "pdf"){
    echo "<script>alert('Todos los documentos deben ser tipo PDF')</script>";

}else{
    //Comprueba que todos los archivos subidos sean de tipo PDF. Si no lo son, muestra un mensaje de error. De lo contrario, continúa con la carga de archivos.


    move_uploaded_file($_FILES["fot_ti"]["tmp_name"],$carpeta_destino.$fot_ti);
    move_uploaded_file($_FILES["eps"]["tmp_name"],$carpeta_destino.$eps);
    move_uploaded_file($_FILES["medico"]["tmp_name"],$carpeta_destino.$medico);
    move_uploaded_file($_FILES["paz_y_salvo"]["tmp_name"],$carpeta_destino.$paz_y_salvo);
    move_uploaded_file($_FILES["recibo_matricula"]["tmp_name"],$carpeta_destino.$recibo_matricula);
    move_uploaded_file($_FILES["recibo_pension"]["tmp_name"],$carpeta_destino.$recibo_pension);
//Mueve los archivos subidos a la carpeta de destino.



    $sqlNo = mysqli_query($con,"INSERT INTO inscripciones3 (fot_ti, eps, medico, paz_y_salvo, recibo_matricula, recibo_pension) VALUES ('$fot_ti','$eps','$medico','$paz_y_salvo','$recibo_matricula','$recibo_pension')");
    //Inserta los datos de los archivos subidos en la tabla inscripciones3 de la base de datos.


    echo "<script>window.location.href ='./Inicio educaprom.html' </script>";
    //Redirige al usuario a la página Inicio educaprom.html.


    echo "<script>alert('Prueba')</script>";
    //Muestra un mensaje de alerta al usuario.


}
?> <!--Finaliza el bloque de código PHP.-->
