document.addEventListener("DOMContentLoaded", function () {
    const accountTab = document.getElementById('account-tab');
    const historyTab = document.getElementById('history-tab');
    const settingsTab = document.getElementById('settings-tab');
    const activityTab = document.getElementById('seeActivityPage');

    const accountInfo = document.getElementById('account-info');
    const historyInfo = document.getElementById('history-info');
    const settingsInfo = document.getElementById('settings-info');
    const activityPage = document.getElementById('activity-page');


    function renderInformation(tab) {
        accountInfo.style.display = 'none';
        historyInfo.style.display = 'none';
        settingsInfo.style.display = 'none';
        activityPage.style.display = 'none';

        accountTab.classList.remove('active');
        historyTab.classList.remove('active');
        settingsTab.classList.remove('active');

        if (tab === 'account') {
            accountInfo.style.display = 'block';
            accountTab.classList.add('active');
        } else if (tab === 'history') {
            historyInfo.style.display = 'block';
            historyTab.classList.add('active');
        } else if (tab === 'settings') {
            settingsInfo.style.display = 'block';
            settingsTab.classList.add('active');
        } else if (tab === 'activity'){
            activityPage.style.display = 'block';
        }
    }
    // Event listeners for each tab
    accountTab.addEventListener('click', function () {
        renderInformation('account');
    });

    historyTab.addEventListener('click', function () {
        renderInformation('history');
    });

    settingsTab.addEventListener('click', function () {
        renderInformation('settings');
    });

    activityTab.addEventListener('click', function () {
        renderInformation('activity')
    });

    renderInformation('account');



    //Show hide profile
    const profileOpen = document.querySelector('.profile-open');
    const positionClose = document.querySelector('.position-close');
    const closeIcon = document.querySelector('.close-icon');
    const avatarClose = document.querySelector('.avatar-close');

    closeIcon.addEventListener('click', function() {
        profileOpen.classList.add('hidden');
        profileOpen.classList.remove('visible');

        positionClose.classList.add('visible');
        positionClose.classList.remove('hidden');
    });

    avatarClose.addEventListener('click', function() {
        positionClose.classList.add('hidden');
        positionClose.classList.remove('visible');

        profileOpen.classList.add('visible');
        profileOpen.classList.remove('hidden');
    });

    //Highlight selected field
    const selects = document.querySelectorAll('.select-field');

    selects.forEach(function (select) {
        checkSelection(select);

        select.addEventListener('change', function () {
            checkSelection(select);
        });
    });

    function checkSelection(select) {
        if (select.value === "") {
            select.style.border = "1px solid #757575";
        } else {
            select.style.border = "2px solid #FBB516";
        }
    }

    //Show or hide button submit
    const fullNameInput = document.querySelector("input[name=full_name]");
    const currentNameInput = document.querySelector("input[name=current_name]");
    const phoneInput = document.querySelector("input[name=phone]");
    const emailInput = document.querySelector("input[name=email]");
    const fullNameChildInput = document.querySelector("input[name=full_name_child]");
    const addressInput = document.querySelector("input[name=address]");
    const yearOfBirthSelect = document.querySelector("select[name=year_of_birth]");
    const genderSelect = document.querySelector("select[name=gender]");

    const btnDone = document.getElementById("btnProfileDone");
    const btnNotDone = document.getElementById("btnProfileNotDone");
    const btnEdit = document.getElementById("btnEdit");
    const btnCancelEdit = document.getElementById("btnCancelEdit");

    // Store the original values to reset if user cancels the edit
    const originalValues = {
        fullName: fullNameInput.value,
        currentName: currentNameInput.value,
        phone: phoneInput.value,
        email: emailInput.value,
        fullNameChild: fullNameChildInput.value,
        address: addressInput.value,
        yearOfBirth: yearOfBirthSelect.value,
        gender: genderSelect.value
    };

    // Function to enable/disable inputs
    function toggleInputs(disabled) {
        fullNameInput.disabled = disabled;
        currentNameInput.disabled = disabled;
        phoneInput.disabled = disabled;
        emailInput.disabled = disabled;
        fullNameChildInput.disabled = disabled;
        addressInput.disabled = disabled;
        yearOfBirthSelect.disabled = disabled;
        genderSelect.disabled = disabled;
    }

    // Disable inputs initially
    toggleInputs(true);

    // Validation function
    function validateForm() {
        let allFilled = true;

        // Check if all required input fields are filled
        if (fullNameInput.value.trim() === "") allFilled = false;
        if (currentNameInput.value.trim() === "") allFilled = false;
        if (phoneInput.value.trim() === "") allFilled = false;
        if (emailInput.value.trim() === "") allFilled = false;
        if (fullNameChildInput.value.trim() === "") allFilled = false;
        if (addressInput.value.trim() === "") allFilled = false;

        // Check if both select fields have valid values
        if (yearOfBirthSelect.value === "" || yearOfBirthSelect.value === null) allFilled = false;
        if (genderSelect.value === "" || genderSelect.value === null) allFilled = false;

        // Toggle the state of the Done and Not Done buttons
        if (allFilled) {
            btnNotDone.style.display = "none"; // Hide 'Not Done' button
            btnDone.style.display = "block";   // Show 'Done' button
            btnDone.disabled = false;          // Enable the 'Done' button
        } else {
            btnNotDone.style.display = "block"; // Show 'Not Done' button
            btnDone.style.display = "none";     // Hide 'Done' button
            btnDone.disabled = true;            // Disable the 'Done' button
        }
    }

    // Attach input event listeners to form fields
    fullNameInput.addEventListener("input", validateForm);
    currentNameInput.addEventListener("input", validateForm);
    phoneInput.addEventListener("input", validateForm);
    emailInput.addEventListener("input", validateForm);
    fullNameChildInput.addEventListener("input", validateForm);
    addressInput.addEventListener("input", validateForm);

    // Attach change event listeners to select fields
    yearOfBirthSelect.addEventListener("change", validateForm);
    genderSelect.addEventListener("change", validateForm);

    // Event listener for Edit button
    btnEdit.addEventListener("click", function() {
        toggleInputs(false); // Enable inputs
        btnEdit.style.display = "none"; // Hide Edit button
        btnCancelEdit.style.display = "block"; // Show Cancel Edit button
    });

    // Event listener for Cancel Edit button
    btnCancelEdit.addEventListener("click", function() {
        toggleInputs(true); // Disable inputs again
        btnEdit.style.display = "block"; // Show Edit button
        btnCancelEdit.style.display = "none"; // Hide Cancel Edit button

        fullNameInput.value = originalValues.fullName;
        currentNameInput.value = originalValues.currentName;
        phoneInput.value = originalValues.phone;
        emailInput.value = originalValues.email;
        fullNameChildInput.value = originalValues.fullNameChild;
        addressInput.value = originalValues.address;
        yearOfBirthSelect.value = originalValues.yearOfBirth;
        genderSelect.value = originalValues.gender;

        validateForm();
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
});

