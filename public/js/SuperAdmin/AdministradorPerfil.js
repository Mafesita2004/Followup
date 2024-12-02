
    // Function to validate the form
    function validateForm() {
        let isValid = true;

        // Validate each required field
        let fields = [
            { id: 'name', errorId: 'nameError' },
            { id: 'last_name', errorId: 'lastNameError' },
            { id: 'email', errorId: 'emailError', type: 'email' },
            { id: 'department', errorId: 'departmentError' },
            { id: 'municipality', errorId: 'municipalityError' }
        ];

        // Loop through the fields to validate
        fields.forEach(field => {
            let value = document.getElementById(field.id).value.trim();
            let errorElement = document.getElementById(field.errorId);

            // Check if the field is empty
            if (value === '') {
                errorElement.style.display = 'block';
                isValid = false;
            } else {
                errorElement.style.display = 'none';
            }

            // If the field type is email, check for a valid email format
            if (field.type === 'email' && value !== '') {
                let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    errorElement.style.display = 'block';
                    errorElement.innerHTML = 'Por favor, ingrese un correo electrónico válido.';
                    isValid = false;
                } else {
                    errorElement.style.display = 'none';
                }
            }
        });

        return isValid; // Only submit if all fields are valid
    }

    // Event listener to trigger validation on form submit
    document.getElementById('submitForm').addEventListener('click', function(event) {
        if (!validateForm()) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
