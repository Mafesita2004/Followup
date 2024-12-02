document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('formAdministrador');
    const successMessage = document.getElementById('successMessage');

    // Cuando se envíe el formulario
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Obtener los valores del formulario
        const nombre = document.getElementById('nombre').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // Validación del nombre
        const nombreError = document.getElementById('nombreError');
        if (nombre.trim() === '') {
            nombreError.classList.remove('hidden');
        } else {
            nombreError.classList.add('hidden');
        }

        // Validación del correo electrónico
        const emailError = document.getElementById('emailError');
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            emailError.classList.remove('hidden');
        } else {
            emailError.classList.add('hidden');
        }

        // Validación de la contraseña
        const passwordError = document.getElementById('passwordError');
        if (password.length < 8) {
            passwordError.classList.remove('hidden');
        } else {
            passwordError.classList.add('hidden');
        }

        // Si no hay errores, enviar el formulario
        if (nombre.trim() !== '' && emailPattern.test(email) && password.length >= 8) {
            form.submit();
        }
    });
});
