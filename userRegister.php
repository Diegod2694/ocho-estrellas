<!DOCTYPE html>
<?php
    include_once("conexion.php")
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Usuarios</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="./css/webfonts/fontawesome-all.css" rel="stylesheet">
    <link href="./css/userRegister.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/validacion.js"></script>
</head>

<body>
    <div class="aside" hidden id="faltantesPanel" style="float: right">
        <b class='title'>Datos faltantes</b>
        <br>
        <br>
        <ul id="datosFaltantes">

        </ul>
    </div>
    <div class="container">
        <div class="wrapper" style="display:flex; align-items:center; justify-content:center; height:100vh;">
            <form action='saveUser.php' class='login' name='registration_form' method='post'>
                <center>
                    <div class="fila">
                        <center>
                            <b class='title'>Ingrese sus datos</b>
                        </center>
                        <div>
                            <a class="btn warn" hidden id="advertencia" onclick="true">
                                <i class="fa fa-exclamation-circle icono"></i>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <!-- <div class="row"> -->
                        <input type='text' onkeyup="validateForm()" class="character" name='nombreUsuario' id='nombreUsuario' placeholder='Nombres'
                            autofocus required>
                        <!-- <div class="error" appendto="body">Ingrese su Nombre</div> -->
                        <!-- </div> -->
                    </div>
                    <div class="column">
                        <input type='text' onkeyup="validateForm()" class="character" name='apellidoUsuario' id='apellidoUsuario' placeholder='Apellidos'
                            required>
                    </div>
                    <div class="column">
                        <div class="fila">
                            <select name="identification" id="identification">
                                <option value="V-">V</option>
                                <option value="J-">J</option>
                            </select>
                            <input type='text' onkeyup="validateForm()" class="numeric" name='cedulaUsuario' id='cedulaUsuario' placeholder='Cédula'
                                required>
                        </div>
                    </div>
                    <div class="column">
                        <input type='text' onkeyup="validateForm()" name='user' id='user' placeholder='Nombre de Usuario' required>
                    </div>
                    <div class="column">
                        <input type='password' onkeyup="validateForm()" name='pass' id='pass' placeholder='Contraseña' required>
                    </div>
                    <div class="column">
                        <input type='text' onkeyup="validateEmail(this.value); validateForm();" class="email" name='email' id='email' placeholder='Correo'
                            required>
                    </div>
                    <div class="column">
                        <div class="fila">
                            <select name="areaPhone" id="areaPhone">
                                <option value="+58">+58</option>
                                <option value="+57">+57</option>
                                <option value="+56">+56</option>
                                <option value="+55">+55</option>
                                <option value="+54">+54</option>
                            </select>
                            <input type='tel' class="phone" onkeyup="validateForm()" name='telefono' id='telefono' placeholder='Telefono' required>
                        </div>
                    </div>
                    <div class="column">
                        <input type='text' onkeyup="validateForm()" name='direccion' id='direccion' placeholder='Dirección' required>
                    </div>
                    <div class="column">
                        <select name="permisos" id="permisos">
                            <option value=0>Cliente</option>
                            <option value=1>Administrador</option>
                        </select>
                    </div>
                    <br>
                    <button disabled name='BtnEnviar' type='submit' id='BtnEnviar' value='Enviar'>
                        <i class='spinner'></i>
                        <span class='state'>Registrarse</span>
                    </button>
                </center>
            </form>
        </div>
    </div>

</body>

</html>