$(document).ready(function () {

    function validar(){
        const n1 = $("#n1").val().trim();
        const n2 = $("#n2").val().trim();
        const n3 = $("#n3").val().trim();
        
        if(n1 && n2 && n3){
            $('#envio').prop('disabled', false);
        } else {
            $('#envio').prop('disabled', true);
        }
    }

    $('#n1, #n2, #n3').on('input', validar);
});