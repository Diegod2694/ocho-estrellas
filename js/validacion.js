$(document).ready(function () {
    $('.character').keypress(function (key) {
        if (!/^[A-z]$/.test(key.key)) {
            return false;

        }
    });
    $('.numeric').keypress(function (key) {
        if (!/^[0-9]$/.test(key.key)) {
            return false;
        }
    });
    document.getElementById("BtnEnviar").disabled = true;
    // $('#email').keypress(function(){
    //     console.log("Estamos en mail => ", $('#email').val());
    //     if(!/^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$/.test($('#email').val())){
    //         return false;
    //     }
    // });
});

function validateEmail(value) {
    console.log("Value => ", value);
    if (/^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$/.test(value)) {
        console.log("Entró al if");
    }
}
function validateForm() {
    if ($('#nombreUsuario').val() == '') {
        document.getElementById("BtnEnviar").disabled = true;
    } else if ($('#apellidoUsuario').val() == '') {
        document.getElementById("BtnEnviar").disabled = true;
    } else if ($('#cedulaUsuario').val() == '') {
        document.getElementById("BtnEnviar").disabled = true;
    } else if ($('#user').val() == '') {
        document.getElementById("BtnEnviar").disabled = true;
    } else if ($('#pass').val() == '') {
        document.getElementById("BtnEnviar").disabled = true;
    } else if ($('#email').val() == '') {
        document.getElementById("BtnEnviar").disabled = true;
    } else if ($('#telefono').val() == '') {
        document.getElementById("BtnEnviar").disabled = true;
    } else if ($('#direccion').val() == '') {
        document.getElementById("BtnEnviar").disabled = true;
    } else {
        document.getElementById("BtnEnviar").disabled = false;
    }
}