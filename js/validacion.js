$(document).ready(function () {
    // document.getElementById("BtnEnviar").disabled = true;

    // document.getElementById("advertencia").hidden = true;
    // document.getElementById("faltantesPanel").hidden = true;
    $('.character').keypress(function (key) {
        if (!/^[a-zA-Z]$/.test(key.key) && ket.charCode != 32) {
            return false;
        }
    });
    $('.numeric').keypress(function (key) {
        if (!/^[0-9]$/.test(key.key)) {
            return false;
        }
    });
    $('.phone').keypress(function (key) {
        if (!/^[0-9]$/.test(key.key)) {
            return false;
        }
    });
    $('#advertencia').hover(function(){
        document.getElementById("faltantesPanel").hidden = false;
    }, function(){
        document.getElementById("faltantesPanel").hidden = true;
    })
});

function validateLogIn() {
    let errores = 0;
    if($('#userLog').val() == ''){
        document.getElementById('BtnLogIn').disabled = true;
        errores++;
    } 
    if($('#passLog').val() == ''){
        document.getElementById('BtnLogIn').disabled = true;
        errores++;
    } 
    if(errores == 0){
        document.getElementById('BtnLogIn').disabled = false;
    }
}

function validateEmail(value) {
    console.log("Value => ", value);
    if (/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/.test(value)) {
        console.log("Entró al if");
    }
}
function validateForm() {
    let datosFaltantes = '';
    let errores = 0;
    document.getElementById('datosFaltantes').innerHTML = '';
    if ($('#nombreUsuario').val() == ''){
        datosFaltantes += '<li>Nombre</li>';
        errores += 1;
        document.getElementById("advertencia").hidden = false;
    }
    if ($('#apellidoUsuario').val() == ''){
        datosFaltantes += '<li>Apellido</li>';
        errores += 1;
        document.getElementById("advertencia").hidden = false;
    }
    if ($('#cedulaUsuario').val() == ''){
        datosFaltantes += '<li>Cédula</li>';
        errores += 1;
        document.getElementById("advertencia").hidden = false;
    }
    if ($('#user').val() == ''){
        datosFaltantes += '<li>Usuario</li>';
        errores += 1;
        document.getElementById("advertencia").hidden = false;
    }
    if ($('#pass').val() == ''){
        datosFaltantes += '<li>Contraseña</li>';
        errores += 1;
        document.getElementById("advertencia").hidden = false;
    }
    if ($('#email').val() == ''){
        datosFaltantes += '<li>Correo Electrónico</li>';
        errores += 1;
        document.getElementById("advertencia").hidden = false;
    }
    if (!/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/.test($('#email').val())){
        datosFaltantes += '<li>Correo Electrónico No Válido</li>';
        errores += 1;
        document.getElementById("advertencia").hidden = false;
    }
    if ($('#telfono').val() == ''){
        datosFaltantes += '<li>Teléfono</li>';
        errores += 1;
        document.getElementById("advertencia").hidden = false;
    }
    if ($('#direccion').val() == ''){
        datosFaltantes += '<li>Dirección</li>';
        errores += 1;
        document.getElementById("advertencia").hidden = false;
    }
    if(errores == 0){
        document.getElementById("BtnEnviar").disabled = false;
        document.getElementById("advertencia").hidden = true;
    } else {
        document.getElementById("BtnEnviar").disabled = true;
        document.getElementById("advertencia").hidden = false;
    }
    document.getElementById('datosFaltantes').innerHTML = datosFaltantes;
}