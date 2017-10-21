$(document).ready(function () {
    $('#subscriber-form').submit(function (e) {
        // e = event variable
        e.preventDefault();

        // Serialize form
        var subscriberData = $('#subscriber-form').serialize();

        // Submit form
        $.ajax({
            type: 'post',
            url: $('#subscriber-form').attr('action'),
            data: subscriberData
        }).done(function (response) {
            // If success
            $('#form-msg').removeClass('error');
            $('#form-msg').addClass('success');

            // Set message text
            $('#form-msg').text(response);

            // clear fields
            $('#name').val('');
            $('#email').val('');
        }).fail(function (data) {
            // If error
            $('#form-msg').removeClass('success');
            $('#form-msg').addClass('error');

            // check the response text
            if(data.responseText !== ''){
                // Set message text
                $('#form-msg').text(data.responseText);
            } else {
                $('#form-msg').text('Message Was Not Sent');
            }
        });

    });
});
