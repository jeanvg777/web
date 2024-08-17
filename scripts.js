document.getElementById('formularioRegistro').addEventListener('submit', function(event) {
    var Nombre = document.getElementById('Nombre').value;
    var Documento = document.getElementById('Documento').value;
    var FechadeNacimineto = document.getElementById('FechadeNacimineto').value;
    var Email = document.getElementById('Email').value;
    var Direccion = document.getElementById('Direccion').value;
    var Telefono = document.getElementById('Telefono').value;

    if (nombre === '' || apellido === '' || fechaNacimiento === '' || grado === '') {
        alert('Por favor, complete todos los campos requeridos.');
        event.preventDefault();
    }
});
