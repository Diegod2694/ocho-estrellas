$(document).ready(function(){
    $('#nombreUsuario').keypress(function(key){
        if(key.charCode < 48 || key.charCode > 57)
        	return false;
    });
});