<?php
    include_once('conexion.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once('head.php');
    ?>
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
                            <a class='nav-link' href='#'>Administración</a></li>";
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
                        echo "<li class='nav-item'><a href='userRegister.php' class='nav-item'>Registrarse</a></li>";
                    }
                }
            } else {
                echo "<li class='nav-item'><a href='LogIn1.php' class='nav-item'>Login</a></li>
                        <li class='nav-item'><a href='userRegister.php'>Registrarse</a></li>";
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

    <div class="header">
        <div class="header-title-container">
            <h1>Explora con nosotros!! </h1>
            <h2>Hoteles en toda Venezuela</h2>
        </div>

        <div class="header-action-container">
            <h1>
                <a href="reservaciones.php" class="reserve-button">
                    Reservar Ahora <i class="fas fa-angle-right reserve-icon"></i>
                </a>
            </h1>
        </div>
    </div>

    <header>
        <h1>Ocho&nbsp;&nbsp;Estrellas</h1>
        <div>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
    </header>

    <section>
        <div class="form-container" style="background-color:#86646a;" id="nosotros">
            <div class="form-content" style="margin:0 !important;">
                <img class="form-logo" src="./assets/waterfall.png" alt="logo">
                <div class="form-text-container">
                    <h2 style="color:white;">Bienvenidos a la Aventura</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, perspiciatis in. Quo, ab! Incidunt aliquam consequuntur fugit necessitatibus, ratione, error exercitationem neque delectus ducimus sed excepturi tempore ullam quam odio?</p>
                </div>
            </div>
        </div>

        <div class="form-container secondary-color second-container">
           <div class="form-content" style="margin:0 !important;">
               <div class="form-text-container">
                   <h2>Nuestras Habitaciones</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, perspiciatis in. Quo, ab! Incidunt aliquam consequuntur fugit necessitatibus, ratione, error exercitationem neque delectus ducimus sed excepturi tempore ullam quam odio?</p>
                </div>
                <img class="img-hab" src="assets/hab1.jpg" alt="habitacion">
            </div>
        </div>

        <!-- <div class="form-container" style="background-color:#86646a;">
            <div class="form-content" style="margin:0 !important;">
                <div class="explore">

                </div>
            </div>
        </div> -->
        
        <div class="form-container">
            <div class="footer-container">
                <div class="footer-container-side">
                    <h2>Contactanos</h2>
                    <p>
                        Pregúntame lo que desees...estoy aquí para cualquier pregunta que tengas. <br>
                        info@misitio.com | Tel: 914-123-456 <br><br>
                        R. Frame de Morá, Piso 6 <br>
                        Rio de Janeiro - Ipanema
                    </p>
                </div>
                <div class="footer-container-side" id="contactanos">
                    <div class="social-container">
                        <i class="fab fa-facebook social-icon"></i>
                        <i class="fab fa-google-plus-g social-icon"></i>
                        <i class="fab fa-tripadvisor social-icon"></i>
                        <i class="fab fa-instagram social-icon"></i>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>