$(document).ready(function () {

    function validar(){
        const v1 = $("#v1").val().trim();
        const v2 = $("#v2").val().trim();
        
        if(v1 && v2){
            $('#envio').prop('disabled', false);
        } else {
            $('#envio').prop('disabled', true);
        }
    }

    $('#v1, #v2').on('input', validar);
});