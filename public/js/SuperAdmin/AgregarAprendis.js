document.getElementById('formularioAprendiz').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevenir el envío para validación

    // Limpiar errores previos
    const errores = ['Cedula', 'Apellido', 'Nombre', 'Programa', 'NivelAcademico', 'Ficha', 'Telefono', 'Correo', 'TipoContrato', 'InicioContrato', 'FinContrato', 'NitEmpresa', 'RazonSocial', 'Direccion', 'TelefonoEmpresa', 'NombreInstructor', 'CorreoInstructor'];
    errores.forEach((campo) => {
        document.getElementById(`error${campo}`).textContent = '';
    });

    let isValid = true;

    // Función de validación simple
    function validarCampo(campoId, regex = null) {
        const valor = document.getElementById(campoId).value.trim();
        if (!valor) {
            document.getElementById(`error${campoId.charAt(0).toUpperCase() + campoId.slice(1)}`).textContent = `${campoId.replace(/([A-Z])/g, ' $1')} es obligatorio.`;
            return false;
        }
        if (regex && !regex.test(valor)) {
            document.getElementById(`error${campoId.charAt(0).toUpperCase() + campoId.slice(1)}`).textContent = `Formato incorrecto para ${campoId.replace(/([A-Z])/g, ' $1')}.`;
            return false;
        }
        return true;
    }

    // Validar cada campo
    isValid &= validarCampo('cedula', /^[0-9]{6,10}$/);
    isValid &= validarCampo('telefono', /^[0-9]{10,15}$/);
    isValid &= validarCampo('correo', /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/);
    // ... Agregar las demás validaciones según los campos

    // Si todo está validado correctamente, enviar el formulario
    if (isValid) {
        this.submit();
    }
});
