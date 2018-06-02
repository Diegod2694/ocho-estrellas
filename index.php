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
  <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky" style="
    position: sticky;z-index:100000
">
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
                        echo "<li class='nav-item'><a href='userRegister.php' class='nav-link'>Registro</a></li>";
                    }
                }
            } else {
                echo "<li class='nav-item'><a href='LogIn1.php' class='nav-item'>Login</a></li>
                        <li class='nav-item'><a class='nav-link' href='userRegister.php'>Registro</a></li>";
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
    <form action="insertarReserva.php" method="get"></form>
        <div class="form-container" style="background-color:#86646a;" id="nosotros">
            <div class="form-content" style="margin:0 !important;">
                <img class="form-logo" src="./assets/waterfall.png" alt="logo">
                <div class="form-text-container">
                    <h2 style="color:white;">Bienvenidos a la Aventura</h2>
                    <p>Somos una cadena de hoteles alrededor del caribe y Venezuela, con los destinos más exóticos, como el Salto Ángel, Los Roques, Aruba y demás. </p>
                </div>
            </div>
        </div>


        <div class="form-container secondary-color second-container">
           <div class="form-content" style="margin:0 !important;">
               <div class="form-text-container">
                   <h2>Nuestras Habitaciones</h2>
                   <p>Nuestras habtaciones proveen del mayor confort para sus clientes, a la vez que están en increíbles lugares, viviendo aventuras extramas. </p>
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
                        Pueden preguntarnos lo que sea cuando sea, siempre estamos a la orden para nuestra clientela. <br>
                        info@ochoestrellas.com | Tel: (0261) 741-7681 <br><br>
                        Caracas - Distrito Capital <br>
                        Maracaibo - Zulia
                    </p>
                </div>
                <div class="footer-container-side" id="contactanos">
                    <div class="social-container">
                    <a href="facebook.com" class="no-link">
                        <i class="fab fa-facebook social-icon"></i>
                    </a>
                    <a href="google.com" class="no-link">
                        <i class="fab fa-google-plus-g social-icon"></i>                    
                    </a>
                    <a href="tripadvisor.com"><i class="fab fa-tripadvisor social-icon"></i></a>
                    <a href="instagram.com"><i class="fab fa-instagram social-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>