$(document).ready(function () {
    $('#graus').on('input', function () {
        if ($(this).val()) {
            $('#envio').prop('disabled', false);
        } else {
            $('#envio').prop('disabled', true);
        }
    });
});