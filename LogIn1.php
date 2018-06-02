
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
                        echo "<li class='nav-item'><a href='userRegister.php' class='nav-link'>Registro</a></li>";
                    }
                }
            } else {
                echo "<li class='nav-item'><a href='LogIn1.php' class='nav-link'>Login</a></li>
                        <li class='nav-item'><a class='nav-link href='userRegister.php'>Registro</a></li>";
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