document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault();  // Evita que se envíe el formulario de forma inmediata

    let isValid = true;

    // Función para validar cada campo
    function validarCampo(campo, regex) {
        const valor = document.getElementById(campo).value;
        const error = document.getElementById(campo + 'Error');

        if (!regex.test(valor)) {
            error.textContent = `El campo ${campo} no es válido.`;
            isValid = false;
        } else {
            error.textContent = ''; // Limpia el mensaje de error si es válido
        }
    }

    // Validación de campos (ajusta según tus necesidades)
    validarCampo('nombres', /^[a-zA-Z\s]{3,255}$/); // Nombres (solo letras y espacios)
    validarCampo('apellidos', /^[a-zA-Z\s]{3,255}$/); // Apellidos (solo letras y espacios)
    validarCampo('correo', /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/); // Correo
    validarCampo('nivel_academico', /^[a-zA-Z0-9\s]{3,255}$/); // Nivel académico (letras y números)

    // Si todo es válido, enviar el formulario
    if (isValid) {
        this.submit();
    }
});
