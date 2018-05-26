
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="./css/webfonts/fontawesome-all.css" rel="stylesheet">
    <link href="./css/userRegister.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/validacion.js"></script>
    <title>OCHO-ESTRELLAS / LogIn</title>
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="index.php">Inicio</a>
                <a href="#sobre-nosotros">Sobre Nosotros</a>
                <a href="#explora">Explora</a>
                <a href="#contactanos">Contactanos</a>
                <a href="reservaciones.php">Reservaciones</a>
                <a href="reporte.php" target="_blank">Panel Administrativo</a>
            </li>
        </ul>
        <ul>
            <li>
                <?php
                    if(isset($_SESSION['user'])){
                        $user = $_SESSION['user'];
                        echo "<a href='#'>".$user."</a>";
                        echo "<a href='LogOut.php'>LogOut</a>";
                        if(isset($_SESSION['permisos'])){
                            if($_SESSION['permisos'] == 1){
                                echo "<a href='userRegister.php'>Registrarse</a>";
                            }
                        }
                    } else {
                        echo "<a href='userRegister.php'>Registrarse</a>";
                    }
                ?>
            </li>
        </ul>
    </nav>

    <header>
        <div class="container">
            <div class="wrapper" style="display:flex; align-items:center; justify-content:center; height:100vh;">
                <form action='LogIn.php' class='login' name='registration_form' method='post'>
                    <center>
                        <div class="fila">
                            <center>
                                <b class='title'>Ingreso de Usuario</b>
                            </center>
                            
                            <!-- <div>
                                <a class="btn warn" hidden id="advertencia" onclick="true">
                                    <i class="fa fa-exclamation-circle icono"></i>
                                </a>
                            </div> -->
                        </div>
                        <div class="column">
                            <input type='text' onkeyup="validateLogIn()" name='userLog' id='userLog' placeholder='Nombre de Usuario' required>
                        </div>
                        <div class="column">
                            <input type='password' onkeyup="validateLogIn()" name='passLog' id='passLog' placeholder='Contraseña' required>
                        </div>
                        <br>
                        <button disabled class="btn btn-default" name='BtnLogIn' type='submit' id='BtnLogIn' value='Enviar'>
                            <span class='state'>Entrar</span>
                        </button>
                    </center>
                </form>
            </div>
        </div>
    </header>
</body>

</html>