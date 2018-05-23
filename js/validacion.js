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
    $('.phone').keypress(function (key) {
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

// <script>
//             function soloLetras(e){
//                key = e.keyCode || e.which;
//                tecla = String.fromCharCode(key).toLowerCase();
//                letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
//                especiales = "8-37-39-46";
        
//                tecla_especial = false
//                for(var i in especiales){
//                     if(key == especiales[i]){
//                         tecla_especial = true;
//                         break;
//                     }
//                 }
        
//                 if(letras.indexOf(tecla)==-1 && !tecla_especial){
//                     return false;
//                 }
//             }
//         </script>
        
//         <input type="text" onkeypress="return soloLetras(event)"> 

function validateEmail(value) {
    console.log("Value => ", value);
    if (/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/.test(value)) {
        console.log("Entró al if");
    }
}
function validateForm() {
    let errores = '';
    document.getElementById('datosFaltantes').innerHTML = '';
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
    } else if (!/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/.test($('#email').val())){
        document.getElementById("BtnEnviar").disabled = true;
    } else if ($('#telefono').val() == '') {
        document.getElementById("BtnEnviar").disabled = true;
    } else if ($('#direccion').val() == '') {
        document.getElementById("BtnEnviar").disabled = true;
    } else {
        document.getElementById("BtnEnviar").disabled = false;
    }
    if ($('#nombreUsuario').val() == ''){
        errores += '<li>Nombre</li>';
    }
    if ($('#apellidoUsuario').val() == ''){
        errores += '<li>Apellido</li>';
    }
    if ($('#cedulaUsuario').val() == ''){
        errores += '<li>Cédula</li>';
    }
    if ($('#user').val() == ''){
        errores += '<li>Usuario</li>';
    }
    if ($('#email').val() == ''){
        errores += '<li>Correo Electrónico</li>';
    }
    if (!/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/.test($('#email').val())){
        errores += '<li>Correo Electrónico No Válido</li>'
    }
    if ($('#telfono').val() == ''){
        errores += '<li>Teléfono</li>';
    }
    if ($('#direccion').val() == ''){
        errores += '<li>Dirección</li>';
    }
    document.getElementById('datosFaltantes').innerHTML = errores;
}