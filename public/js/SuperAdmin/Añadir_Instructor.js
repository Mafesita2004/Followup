document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Evita el envío del formulario si hay errores

        let errors = [];

        // Obtener los campos del formulario
        const nombre = form.querySelector("input[placeholder='Nombre']");
        const apellido = form.querySelector("input[placeholder='Apellido']");
        const cedula = form.querySelector("input[placeholder='Cedula']");
        const correo = form.querySelector("input[placeholder='Correo']");
        const celular = form.querySelector("input[placeholder='Celular']");
        const redConocimiento = form.querySelector("select[name='programa']");
        const totalHoras = form.querySelector("input[placeholder='Total de horas']");
        const horasRealizadas = form.querySelector("input[placeholder='Horas realizadas']");
        const fechaInicio = form.querySelector("input[type='date']");
        const fechaFin = form.querySelectorAll("input[type='date']")[1];

        // Validaciones
        if (nombre.value.trim() === "") errors.push("El campo 'Nombre' es obligatorio.");
        if (apellido.value.trim() === "") errors.push("El campo 'Apellido' es obligatorio.");
        if (cedula.value.trim() === "" || isNaN(cedula.value)) errors.push("El campo 'Cédula' es obligatorio y debe ser numérico.");
        if (!/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(correo.value)) errors.push("El campo 'Correo' no tiene un formato válido.");
        if (celular.value.trim() === "" || isNaN(celular.value)) errors.push("El campo 'Celular' es obligatorio y debe ser numérico.");
        if (redConocimiento.value === "") errors.push("Debe seleccionar una red de conocimiento.");
        if (totalHoras.value.trim() === "" || isNaN(totalHoras.value)) errors.push("El campo 'Total de horas' es obligatorio y debe ser numérico.");
        if (horasRealizadas.value.trim() === "" || isNaN(horasRealizadas.value)) errors.push("El campo 'Horas realizadas' es obligatorio y debe ser numérico.");
        if (new Date(fechaInicio.value) >= new Date(fechaFin.value)) errors.push("La fecha de inicio debe ser anterior a la fecha de fin.");

        // Mostrar errores o enviar formulario
        if (errors.length > 0) {
            alert("Errores encontrados:\n\n" + errors.join("\n"));
        } else {
            form.submit();
        }
    });
});
