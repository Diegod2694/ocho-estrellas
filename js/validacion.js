$(document).ready(function () {
    // document.getElementById("BtnEnviar").disabled = true;

    // document.getElementById("advertencia").hidden = true;
    // document.getElementById("faltantesPanel").hidden = true;
    $('.character').keypress(function (key) {
        if (!/^[a-zA-Z]$/.test(key.key) && key  .charCode != 32) {
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
    $('#dias').keypress(function(key){
        if(!/^[0-9]{0,1}$/.test(key.key)){
            return false;
        }
        let x = $('#dias').val();
        console.log("x=>",x);
        if(!/^([0-9]{0})$/.test(x)){
            return false;
        }
    })
    $('#advertencia').hover(function(){
        document.getElementById("faltantesPanel").hidden = false;
    }, function(){
        document.getElementById("faltantesPanel").hidden = true;
    });
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

function validateReserve() {
    let errores = 0;
    let datosFaltantes = '';
    document.getElementById('datosFaltantes').innerHTML = '';
    if($('#fechaLlegada').val() == ''){
        document.getElementById('BtnRes').disabled = true;
        errores++;
        datosFaltantes+= "<li>Fecha de Llegada</li>"
    }
    if($('#fechaSalida').val() == ''){
        document.getElementById('BtnRes').disabled = true;
        errores++;
        datosFaltantes+= "<li>Fecha de Salida</li>"
    }
    // if($('#dias').val() == ''){
    //     document.getElementById('BtnRes').disabled = true;
    //     errores++;
    //     datosFaltantes+= "<li>Días de Estadía</li>"
    // }
    if($('#hotel').val() == ''){
        document.getElementById('BtnRes').disabled = true;
        errores++;
        datosFaltantes+= "<li>Hotel de Estancia</li>"
    }
    if($('#habitacion').val() == ''){
        document.getElementById('BtnRes').disabled = true;
        errores++;
        datosFaltantes+= "<li>Habitación de Reserva</li>"
    }
    if($('#fechaLlegada').val() != ''){
        if($('#fechaSalida').val() != ''){
            let fechaActual = new Date();
            console.log("Fecha Actual => ", fechaActual);
            let llegada = $('#fechaLlegada').val().split('-');
            let salida = $('#fechaSalida').val().split('-');
            console.log("AÑO", llegada[0], salida[0]);
            console.log("MES", llegada[1], salida[1]);
            console.log("DIA", llegada[2], salida[2]);
            if(llegada[0] > salida[0]){
                console.log("PRIM");
                document.getElementById('BtnRes').disabled = true;
                errores++;
            } else if(llegada[1] > salida[1] && llegada[0] <= salida[0]){
                console.log("SEC");
                document.getElementById('BtnRes').disabled = true;
                errores++;
            } else if((llegada[2] > salida[2] && llegada[1] == salida[1])){
                console.log("TERC");
                document.getElementById('BtnRes').disabled = true;
                errores++;
            }
            console.log("Llegada =>", llegada, "Salida =>", salida);
        }
    }
    if(errores == 0){
        document.getElementById('BtnRes').disabled = false;
        document.getElementById("advertencia").hidden = true;
    } else {
        document.getElementById('BtnRes').disabled = true;
        document.getElementById("advertencia").hidden = false;
    }
    document.getElementById('datosFaltantes').innerHTML = datosFaltantes;
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