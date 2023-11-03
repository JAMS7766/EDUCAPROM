function submitForm(event) { //Declara la función submitForm(), que acepta un evento como parámetro.
    event.preventDefault(); // Evita el envío automático del formulario

    var nombre = document.getElementById("nombre").value; //Asigna el valor del campo de entrada nombre a la variable nombre.
    var ti = document.getElementById("ti").value; //Asigna el valor del campo de entrada nombre a la variable ti.
    var fecha_nacimiento = document.getElementById("fecha_nacimiento").value;  //Asigna el valor del campo de entrada nombre a la variable fecha_nacimiento.
    var genero = document.getElementById("genero").value; //Asigna el valor del campo de entrada nombre a la variable genero .
  

    if (nombre === "" || ti === "" || fecha_nacimiento === "" || genero === "" ) { //Comprueba si alguno de los campos está vacío
        alert("Todos los campos deben estar completos"); //Comprueba si alguno de los campos está vacío
    } else { //Si todos los campos están completos, sigue con el siguiente paso.
        // Los campos están completos, así que puedes enviar el formulario
        document.querySelector("form").submit(); //Envia el formulario 
    }

    
}
