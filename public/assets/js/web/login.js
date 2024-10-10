document.addEventListener('DOMContentLoaded', function () {
    //Show label when input is focus and typing
    const inputsToggle = document.querySelectorAll('.input-field');
    inputsToggle.forEach(input => {
        input.addEventListener('focus', function () {
            const label = this.previousElementSibling;
            label.style.opacity = '1';
            label.style.transform = 'translateY(0)';
        });
        input.addEventListener('blur', function () {
            const label = this.previousElementSibling;
            if (this.value.trim() === '') {
                label.style.opacity = '0';
                label.style.transform = 'translateY(10px)';
            }
        });
    });

    // Toggle show/hide password for multiple fields
    const togglePasswordIcons = document.querySelectorAll('.toggle-password');
    togglePasswordIcons.forEach((icon) => {
        icon.addEventListener('click', function () {
            // Get the target password field using the data attribute
            const targetId = icon.getAttribute('data-target');
            const passwordField = document.getElementById(targetId);

            // Toggle the type attribute
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            // Update icon source and alt text
            if (type === 'text') {
                icon.src = showPasswordImg; // Set the correct image path for showing password
                icon.alt = "Hide Password";
            } else {
                icon.src = showPasswordImg; // Set the correct image path for hiding password
                icon.alt = "Show Password";
            }
        });
    });



    //Show disable and able button
    const form = document.querySelector('.form-wrapper');
    const inputs = form.querySelectorAll('.input-field');
    const submitBtnDone = form.querySelector('.submit-btn-done');
    const submitBtnNotDone = form.querySelector('.submit-btn-not-done');

    function checkInputs() {
        let allFilled = true;
        inputs.forEach(input => {
            if (input.value.trim() === '') {
                allFilled = false;
            }
        });

        if (allFilled) {
            submitBtnDone.style.display = 'block';
            submitBtnNotDone.style.display = 'none';
            submitBtnDone.disabled = false;
        } else {
            submitBtnDone.style.display = 'none';
            submitBtnNotDone.style.display = 'block';
            submitBtnNotDone.disabled = true;
        }
    }

    checkInputs();

    inputs.forEach(input => {
        input.addEventListener('input', checkInputs);
    });
});
