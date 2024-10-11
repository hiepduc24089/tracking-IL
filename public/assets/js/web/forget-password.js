
$(document).ready(function () {
    $('#forget-password-form').on('submit', function (event) {
        event.preventDefault();

        var formForgetPassword = $(this);
        var loadingOverlay = $('#loading-overlay');

        // Show the loading overlay
        loadingOverlay.css('display', 'flex');

        var formData = formForgetPassword.serialize();

        $.ajax({
            url: formForgetPassword.attr('action'),
            method: 'POST',
            data: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            success: function (data) {
                // Hide the loading overlay
                loadingOverlay.css('display', 'none');

                if (data.success) {
                    window.location.href = data.redirect;
                } else {
                    alert(data.message || 'Có lỗi xảy ra, vui lòng thử lại.');
                }
            },
            error: function (xhr) {
                console.error('Error:', xhr);
                // Hide the loading overlay
                loadingOverlay.css('display', 'none');
                alert('Có lỗi xảy ra, vui lòng thử lại.');
            }
        });
    });
});
