function submitForm(event) {
    event.preventDefault(); // Evita el envío automático del formulario

    var fot_ti = document.getElementById("formFileLg1").value;
    var eps = document.getElementById("formFileLg2").value;
    var medico = document.getElementById("formFileLg3").value;
    var paz_y_salvo = document.getElementById("formFileLg4").value;
    var recibo_matricula = document.getElementById("formFileLg5").value;
    var recibo_pension = document.getElementById("formFileLg6").value;
//Estas líneas asignan las entradas del formulario a variables.


    if (fot_ti === "" || eps === "" || medico === "" || paz_y_salvo === "" || recibo_matricula === "" || recibo_pension === "") {
        alert("Todos los campos deben estar completos");
    } else {
        // Los campos están completos, así que puedes enviar el formulario
        document.querySelector("form").submit();
    }

    
}
