document.addEventListener('DOMContentLoaded', function () {
    // Validar el formulario
    function validateForm() {
        let isValid = true;

        // Obtener los campos del formulario
        const firstName = document.getElementById('first_name');
        const lastName = document.getElementById('last_name');
        const email = document.getElementById('email');
        const documentId = document.getElementById('document_id');
        const ficha = document.getElementById('ficha');

        // Obtener los elementos de error
        const firstNameError = document.getElementById('firstNameError');
        const lastNameError = document.getElementById('lastNameError');
        const emailError = document.getElementById('emailError');
        const documentIdError = document.getElementById('documentIdError');
        const fichaError = document.getElementById('fichaError');

        // Resetear los errores
        firstNameError.style.display = 'none';
        lastNameError.style.display = 'none';
        emailError.style.display = 'none';
        documentIdError.style.display = 'none';
        fichaError.style.display = 'none';

        // Validar cada campo
        if (!firstName.value.trim()) {
            firstNameError.style.display = 'block';
            isValid = false;
        }
        if (!lastName.value.trim()) {
            lastNameError.style.display = 'block';
            isValid = false;
        }
        if (!email.value.trim() || !validateEmail(email.value)) {
            emailError.style.display = 'block';
            isValid = false;
        }
        if (!documentId.value.trim()) {
            documentIdError.style.display = 'block';
            isValid = false;
        }
        if (!ficha.value.trim()) {
            fichaError.style.display = 'block';
            isValid = false;
        }

        return isValid;
    }

    // Validación de email
    function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    // Agregar el evento al botón de enviar
    document.getElementById('submitForm').addEventListener('click', function (event) {
        if (!validateForm()) {
            event.preventDefault();  // Evitar el envío del formulario si no es válido
        } else {
            document.getElementById('aprendizForm').submit();  // Enviar el formulario si es válido
        }
    });
});
