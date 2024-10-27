//Auto select default
function handleCheckboxToggle(selectedCheckbox, otherCheckboxId) {
    const otherCheckbox = document.getElementById(otherCheckboxId);
    if (selectedCheckbox.checked) {
        otherCheckbox.checked = false;
    }
}

//Show button done or not done
document.addEventListener("DOMContentLoaded", function () {
    const selectAllCheckbox = document.getElementById('agreeTerm');
    const fullNameInput = document.querySelector('input[name="full_name"]');
    const phoneInput = document.querySelector('input[name="phone"]');
    const addressInput = document.querySelector('input[name="address"]');
    const noteInput = document.querySelector('textarea[name="note"]');
    const btnDone = document.getElementById('btnDone');
    const btnNotDone = document.getElementById('btnNotDone');

    function checkFormCompletion() {
        const isAllFilled = fullNameInput.value.trim() !== '' && phoneInput.value.trim() !== '' &&
            addressInput.value.trim() !== '' && noteInput.value.trim() !== '' &&
            selectAllCheckbox.checked;

        if (isAllFilled) {
            btnDone.style.display = 'block';
            btnNotDone.style.display = 'none';
        } else {
            btnDone.style.display = 'none';
            btnNotDone.style.display = 'block';
        }
    }

    fullNameInput.addEventListener('input', checkFormCompletion);
    phoneInput.addEventListener('input', checkFormCompletion);
    addressInput.addEventListener('input', checkFormCompletion);
    noteInput.addEventListener('input', checkFormCompletion);
    selectAllCheckbox.addEventListener('change', checkFormCompletion);

    checkFormCompletion();
});

