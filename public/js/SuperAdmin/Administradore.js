document.addEventListener("DOMContentLoaded", function () {
    // Obtén el formulario y el botón de envío
    const form = document.getElementById("adminForm");
    const submitButton = document.getElementById("submitButton");

    // Función de validación
    function validateForm(event) {
        event.preventDefault(); // Evita el envío del formulario por defecto

        // Obtén los valores de los campos
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const cedula = document.getElementById("cedula").value.trim();
        const role = document.getElementById("role").value.trim();

        let isValid = true;

        // Validación de nombre
        if (name === "") {
            alert("El nombre completo es obligatorio.");
            isValid = false;
        }

        // Validación de correo electrónico
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === "" || !emailPattern.test(email)) {
            alert("Por favor, ingresa un correo electrónico válido.");
            isValid = false;
        }

        // Validación de cédula
        if (cedula === "" || isNaN(cedula)) {
            alert("La cédula debe ser un número válido.");
            isValid = false;
        }

        // Validación de rol
        if (role === "") {
            alert("Por favor selecciona un rol.");
            isValid = false;
        }

        // Si todos los campos son válidos, envía el formulario
        if (isValid) {
            form.submit();
        }
    }

    // Agrega el evento de validación al formulario
    form.addEventListener("submit", validateForm);
});
