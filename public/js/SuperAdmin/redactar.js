document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const paraInput = form.querySelector('input[placeholder="Para"]');
    const tituloInput = form.querySelector('input[placeholder="Título"]');
    const asuntoTextarea = form.querySelector('textarea[placeholder="Asunto"]');
    const submitButton = form.querySelector('a.bg-blue-500');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar el envío del formulario por defecto

        // Validar que los campos no estén vacíos
        let valid = true;

        // Validación para el campo "Para"
        if (paraInput.value.trim() === '') {
            alert('El campo "Para" es obligatorio.');
            valid = false;
        }

        // Validación para el campo "Título"
        if (tituloInput.value.trim() === '') {
            alert('El campo "Título" es obligatorio.');
            valid = false;
        }

        // Validación para el campo "Asunto"
        if (asuntoTextarea.value.trim() === '') {
            alert('El campo "Asunto" es obligatorio.');
            valid = false;
        }

        // Si todas las validaciones son correctas, enviar el formulario
        if (valid) {
            form.submit();  // Enviar el formulario si es válido
        }
    });

    // Si el usuario hace clic en el botón de cancelar, se redirige
    const cancelButton = form.querySelector('a.bg-red-600');
    cancelButton.addEventListener('click', function(event) {
        window.location.href = '{{ route("superadmin.SuperAdmin-Notificaciones") }}';  // Redirigir al listado de notificaciones
    });
});
