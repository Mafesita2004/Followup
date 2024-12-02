document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    form.addEventListener('submit', (event) => {
        const asunto = form.querySelector('#asunto').value.trim();
        const para = form.querySelector('#para').value.trim();
        const descripcion = form.querySelector('#descripcion').value.trim();

        if (!asunto || !para || !descripcion) {
            event.preventDefault();
            alert('Todos los campos son obligatorios.');
        }

        // Validación de email sencilla
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(para)) {
            event.preventDefault();
            alert('Ingrese un correo electrónico válido.');
        }
    });
});
