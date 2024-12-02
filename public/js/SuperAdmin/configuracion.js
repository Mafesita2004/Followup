// Asegúrate de que el DOM esté cargado antes de aplicar los eventos
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('configForm');

    form.addEventListener('submit', function (event) {
        // Previene el envío del formulario si hay errores
        event.preventDefault();

        // Limpiar mensajes de error previos
        document.getElementById('currentPasswordError').textContent = '';
        document.getElementById('newPasswordError').textContent = '';
        document.getElementById('confirmPasswordError').textContent = '';

        // Obtener valores de los campos
        const currentPassword = document.getElementById('currentPassword').value;
        const newPassword = document.getElementById('newPassword').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        let isValid = true;

        // Validación de la Contraseña Actual
        if (!currentPassword) {
            document.getElementById('currentPasswordError').textContent = 'La contraseña actual es obligatoria.';
            isValid = false;
        }

        // Validación de la Nueva Contraseña
        if (!newPassword) {
            document.getElementById('newPasswordError').textContent = 'La nueva contraseña es obligatoria.';
            isValid = false;
        } else if (newPassword.length < 8) {
            document.getElementById('newPasswordError').textContent = 'La nueva contraseña debe tener al menos 8 caracteres.';
            isValid = false;
        }

        // Validación de Confirmar Contraseña
        if (!confirmPassword) {
            document.getElementById('confirmPasswordError').textContent = 'Debe confirmar la nueva contraseña.';
            isValid = false;
        } else if (newPassword !== confirmPassword) {
            document.getElementById('confirmPasswordError').textContent = 'Las contraseñas no coinciden.';
            isValid = false;
        }

        // Si todos los campos son válidos, enviar el formulario
        if (isValid) {
            form.submit();
        }
    });
});
