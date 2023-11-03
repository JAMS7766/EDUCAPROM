function submitForm(event) { //Declara la función conectar()
    event.preventDefault(); // Evita el envío automático del formulario

    var telefono = document.getElementById("telefono").value;
    var correo = document.getElementById("correo").value;
    var calle = document.getElementById("calle").value;
    var barrio = document.getElementById("barrio").value;
    var ciudad = document.getElementById("ciudad").value;
    var nivel = document.getElementById("nivel").value;
    var grado = document.getElementById("grado").value;
//Estas líneas asignan las entradas del formulario a variables.
    if (telefono === "" || correo === "" || calle === "" || barrio === "" || ciudad === "" || nivel === "" || grado === "" ) { //Esta condición comprueba si alguno de los campos del formulario está vacío.


        alert("Todos los campos deben estar completos"); //Esta instrucción muestra un mensaje de alerta si alguno de los campos del formulario está vacío.


    } else {
        // Los campos están completos, así que puedes enviar el formulario
        document.querySelector("form").submit();
    }

    
}
