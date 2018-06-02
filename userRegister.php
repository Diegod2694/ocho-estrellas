<!DOCTYPE html>
<?php
    session_start();
    include_once("conexion.php");
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
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php"><i class="fas fa-star social-icon" style="font-size:24px;color:white;"></i></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#nosotros">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactanos">Contactanos</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="reservaciones.php">Reservaciones</a>
      </li> 
      <?php
            if(isset($_SESSION['user'])){
                if(isset($_SESSION['permisos'])){
                    if($_SESSION['permisos'] == 1){
                        echo "<li class='nav-item'>
                            <a class='nav-link' href='users.php'>Administración</a></li>";
                    }
                }
            } 
        ?>
    </ul>
  </div> 
  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        <?php
            if(isset($_SESSION['user'])){
                $user = $_SESSION['user'];
                echo "<li class='nav-item'><a class='nav-link' href='#'>".$user."</a></li>";
                echo "<li class='nav-item'><a class='nav-link' href='LogOut.php'>LogOut</a></li>";
                if(isset($_SESSION['permisos'])){
                    if($_SESSION['permisos'] == 1){
                        echo "<li class='nav-item'>
                        <a href='userRegister.php' class='nav-link'>Registro</a></li>";
                    }
                }
            } else {
                echo "<li class='nav-item'><a href='LogIn1.php' class='nav-item'>Login</a></li>
                        <li class='nav-item'><a href='userRegister.php'>Registro</a></li>";
            }
        ?>
    <!-- </li>
            <li class="nav-item">
                <a class="nav-link" href="userRegister.php">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="LogIn.php">Login</a>
            </li>
        </ul> -->
    </div>
</nav>
    <div class="aside" hidden id="faltantesPanel" style="float: right">
        <b class='title'>Datos faltantes</b>
        <br>
        <br>
        <ul id="datosFaltantes">

        </ul>
    </div>
    <header>
        <div class="container">
            <div class="wrapper" style="display:flex; align-items:center; justify-content:center; height:100vh;">
                <form action='saveUser.php' class='login' name='registration_form' method='post'>
                    <center>
                        <div class="fila">
                            <center>
                                <b class='title'>Ingrese sus datos</b>
                            </center>
                            <br>
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
                        <?php
                        if(isset($_SESSION['user'])){
                            if($_SESSION['permisos'] == 1){
                                echo '
                                    <div class="column">
                                        <select name="permisos" id="permisos">
                                            <option value=0>Cliente</option>
                                            <option value=1>Administrador</option>
                                        </select>
                                    </div>
                                    <br>';
                            } else {
                                echo "<input type='text' name='permisos' id='permisos' hidden value=0>";
                            }
                        } else {
                            echo "<input type='text' name='permisos' id='permisos' hidden value=0>";
                        }
                        ?>
                        <button disabled class="btn btn-default" name='BtnEnviar' type='submit' id='BtnEnviar' value='Enviar'>
                            <span class='state'>Registro</span>
                        </button>
                    </center>
                </form>
            </div>
        </div>
    </header>

</body>

</html>