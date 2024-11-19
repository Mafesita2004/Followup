@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Followup</h1>

    <form id="followupForm">
        @csrf
        <div class="form-group">
            <label for="progress_evaluation">Progress Evaluation</label>
            <input type="text" class="form-control" id="progress_evaluation" name="progress_evaluation" required>
            <small id="progress_evaluation_error" class="text-danger" style="display: none;"></small>
        </div>
        
        <div class="form-group">
            <label for="activities_carriedout">Activities Carried Out</label>
            <input type="number" class="form-control" id="activities_carriedout" name="activities_carriedout" required>
            <small id="activities_carriedout_error" class="text-danger" style="display: none;"></small>
        </div>

        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
            <small id="start_date_error" class="text-danger" style="display: none;"></small>
        </div>

        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
            <small id="end_date_error" class="text-danger" style="display: none;"></small>
        </div>

        <div class="form-group">
            <label for="practical_stage">Practical Stage</label>
            <input type="text" class="form-control" id="practical_stage" name="practical_stage" required>
            <small id="practical_stage_error" class="text-danger" style="display: none;"></small>
        </div>

        <div class="form-group">
            <label for="log">Log</label>
            <input type="number" class="form-control" id="log" name="log" required>
            <small id="log_error" class="text-danger" style="display: none;"></small>
        </div>

        <div class="form-group">
            <label for="agreement_report">Agreement Report</label>
            <input type="date" class="form-control" id="agreement_report" name="agreement_report" required>
            <small id="agreement_report_error" class="text-danger" style="display: none;"></small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Función para mostrar errores
    function showError(elementId, errorMessage) {
        const errorElement = document.getElementById(elementId);
        errorElement.style.display = 'block';
        errorElement.textContent = errorMessage;
    }

    // Función para ocultar los errores
    function hideError(elementId) {
        const errorElement = document.getElementById(elementId);
        errorElement.style.display = 'none';
    }

    // Función para validar el formulario
    function validateForm() {
        let isValid = true;

        // Validaciones individuales para cada campo
        const progressEvaluation = document.getElementById('progress_evaluation').value;
        if (!progressEvaluation || progressEvaluation.length > 255) {
            showError('progress_evaluation_error', 'Progress Evaluation is required and must be less than 255 characters.');
            isValid = false;
        } else {
            hideError('progress_evaluation_error');
        }

        const activitiesCarriedout = document.getElementById('activities_carriedout').value;
        if (!activitiesCarriedout || activitiesCarriedout <= 0) {
            showError('activities_carriedout_error', 'Activities carried out must be a positive number.');
            isValid = false;
        } else {
            hideError('activities_carriedout_error');
        }

        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;
        if (!startDate || !endDate || startDate > endDate) {
            showError('start_date_error', 'Start Date must be before End Date.');
            showError('end_date_error', 'End Date must be after Start Date.');
            isValid = false;
        } else {
            hideError('start_date_error');
            hideError('end_date_error');
        }

        const practicalStage = document.getElementById('practical_stage').value;
        if (!practicalStage || practicalStage.length > 255) {
            showError('practical_stage_error', 'Practical Stage is required and must be less than 255 characters.');
            isValid = false;
        } else {
            hideError('practical_stage_error');
        }

        const log = document.getElementById('log').value;
        if (!log || log <= 0) {
            showError('log_error', 'Log must be a positive number.');
            isValid = false;
        } else {
            hideError('log_error');
        }

        const agreementReport = document.getElementById('agreement_report').value;
        if (!agreementReport) {
            showError('agreement_report_error', 'Agreement Report is required.');
            isValid = false;
        } else {
            hideError('agreement_report_error');
        }

        return isValid;
    }

    // Función que se ejecuta cuando se envía el formulario
    $('#followupForm').on('submit', function(e) {
        e.preventDefault();  // Evita el envío del formulario por defecto

        // Valida el formulario
        if (validateForm()) {
            const formData = new FormData(this);
            
            // Obtener el api_token del localStorage
            const apiToken = localStorage.getItem('api_token'); 

            if (!apiToken) {
                alert('No se encontró el api_token. Por favor, inicie sesión.');
                return;
            }

            // Obtén la URL base desde .env
            const url = 'https://apietapaproductivatest-production-af30.up.railway.app/followups';
            
            $.ajax({
                url: url,
                type: 'POST',
                headers: {
                    'Authorization': 'Bearer ' + apiToken,  // Usar el api_token almacenado
                },
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert('Followup creado con éxito');
                    $('#followupForm')[0].reset();
                },
                error: function(error) {
                    alert('Hubo un error al crear el followup');
                    console.error(error);
                }
            });
        }
    });
</script>
@endsection
