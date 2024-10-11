$(document).ready(function () {
    $('#register-form').on('submit', function (event) {
        event.preventDefault();

        var registerForm = $(this);
        var formData = registerForm.serialize();

        $.ajax({
            url: registerForm.attr('action'),
            method: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            success: function (response) {
                if (response.status === 'success') {
                    $('#successModalMessage').text(response.message);
                    var successModal = new bootstrap.Modal($('#successModal')[0]);
                    successModal.show();
                } else {
                    console.error(response.message);
                }
            },
            error: function (xhr) {
                // Clear previous errors
                $('.input-label-error').remove();
                $('.input-field').removeClass('input-field-error');

                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, messages) {
                        var inputField = $('[name="' + key + '"]');
                        inputField.addClass('input-field-error');
                        inputField.after('<label class="input-label-error text-size-bold-normal text-color-error">' + messages[0] + '</label>');
                    });
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    console.error(xhr.responseJSON.message);
                } else {
                    console.error('Unexpected error:', xhr.responseText);
                }
            }
        });
    });
});
