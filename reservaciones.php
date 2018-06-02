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
    <nav class="navbar navbar-expand-md bg-dark navbar-dark" style="position: sticky;z-index:100000">
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
                        echo "<li class='nav-item'><a href='userRegister.php' class='nav-item'>Registro</a></li>";
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
        <div class="form-container">
          <!-- <form action="" method="post">
              <input class="custom-input" type="date" name="" id="">
              <input class="custom-input" type="date" name="" id="">
              <input class="custom-input" placeholder="Niños" type="number" name="" id="">
              <input class="custom-input" placeholder="Adultos" type="number" name="" id="">
              <input class="custom-button" type="submit" value="Enviar">
          </form> -->
          
          <!-- SUITE INDIVIUDAL -->
          <form action="especificarReserva.php" method="get">
            <input type="text" hidden name="tipo" value=250000>
            <div class="form-content">
                <div class="suite-container no-margin">
                <img class="img-hab margin-hab" src="assets/hab8.jpg" alt="hab1">

                <div class="suite-form">
                    <h2 class="suite-title">Suite Individual</h2>
                    <h4 class="suite-text">Nuestras Suites Individuales son amplias, para una o dos personas. Cuenta con una cama grande, aire acondicionado. No dispone de TV</h4>
                    <ul>
                    <li class="suite-text">Tamaño: 260 ft²</li>
                    <li class="suite-text">Camas: 2 dobles(s)</li>
                    </ul>
                    <div class="icon-container">
                    <i class="fas fa-snowflake hotel-icon"></i>
                    <i class="fas fa-wifi hotel-icon"></i>
                    <i class="fas fa-phone hotel-icon"></i>
                    <i class="fas fa-utensil-fork hotel-icon"></i>
                    <i class="fas fa-bath hotel-icon"></i>
                    </div>
                </div>
                <div class="button-container">
                    <h2>250.000 Bs.S</h2>
                    <button class="custom-button">Reservar</button>
                </div>
                </div>
            </div>
          </form>
          
          <!-- SUITE DOBLE -->
          <form action="especificarReserva.php" method="get">
          <input type="text" hidden name="tipo" value=500000>
          </form>
          <div class="form-content">
            <div class="suite-container no-margin">
              <img class="img-hab margin-hab" src="assets/hab2.jpg" alt="hab1">
              <div class="suite-form">
                <h2 class="suite-title">Suite Doble</h2>
                <h4 class="suite-text">Nuestras Suites Junior ofrecen hermosas vistas de la ciudad.</h4>
                <ul>
                  <li class="suite-text">Tamaño: 260 ft²</li>
                  <li class="suite-text">Camas: 2 dobles(s)</li>
                </ul>
                <div class="icon-container">
                  <i class="fas fa-snowflake hotel-icon"></i>
                  <i class="fas fa-wifi hotel-icon"></i>
                  <i class="fas fa-tv hotel-icon"></i>
                  <i class="fas fa-lock hotel-icon"></i>
                  <i class="fas fa-glass-martini hotel-icon"></i>
                  <i class="fas fa-phone hotel-icon"></i>
                  <i class="fas fa-utensil-fork hotel-icon"></i>
                  <i class="fas fa-bath hotel-icon"></i>
                  <i class="fas fa-utensils hotel-icon"></i>
                </div>
              </div>
              <div class="button-container">
                <h2>500.000 Bs.S</h2>
                <button class="custom-button">Reservar</button>
              </div>
            </div>
          </div>
          
          <!-- SUITE NORMAL -->
          <form action="especificarReseraphp" method="get">
            <input type="text" hidden value=750000   name="tipo">
            <div class="form-content">
                <div class="suite-container no-margin">
                <img class="img-hab margin-hab" src="assets/hab9.jpg" alt="hab1">
                <div class="suite-form">
                    <h2 class="suite-title">Suite Normal</h2>
                    <h4 class="suite-text">Nuestras Suites Junior ofrecen hermosas vistas de la ciudad.</h4>
                    <ul>
                    <li class="suite-text">Tamaño: 260 ft²</li>
                    <li class="suite-text">Camas: 2 dobles(s)</li>
                    </ul>
                    <div class="icon-container">
                    <i class="fas fa-snowflake hotel-icon"></i>
                    <i class="fas fa-wifi hotel-icon"></i>
                    <i class="fas fa-tv hotel-icon"></i>
                    <i class="fas fa-lock hotel-icon"></i>
                    <i class="fas fa-glass-martini hotel-icon"></i>
                    <i class="fas fa-phone hotel-icon"></i>
                    <i class="fas fa-utensil-fork hotel-icon"></i>
                    <i class="fas fa-bath hotel-icon"></i>
                    <i class="fas fa-utensils hotel-icon"></i>
                    </div>
                </div>
                <div class="button-container">
                <h2>750.000 Bs.S</h2>
                <button class="custom-button">Reservar</button>
                </div>
            </div>
            </div>
          </form>
          
          <!-- SUITE PRESIDENCIAL -->
          <form action="especificarReserva.php" method="get">
          <input type="text" name="tipo" hidden value=1000000>
            <div class="form-content">
                <div class="suite-container no-margin">
                <img class="img-hab margin-hab" src="assets/hab10.jpg" alt="hab1">
                <div class="suite-form">
                    <h2 class="suite-title">Suite Presidencial</h2>
                    <h4 class="suite-text">Nuestras Suites Junior ofrecen hermosas vistas de la ciudad.</h4>
                    <ul>
                    <li class="suite-text">Tamaño: 260 ft²</li>
                    <li class="suite-text">Camas: 2 dobles(s)</li>
                    </ul>
                    <div class="icon-container">
                    <i class="fas fa-snowflake hotel-icon"></i>
                    <i class="fas fa-wifi hotel-icon"></i>
                    <i class="fas fa-tv hotel-icon"></i>
                    <i class="fas fa-lock hotel-icon"></i>
                    <i class="fas fa-glass-martini hotel-icon"></i>
                    <i class="fas fa-phone hotel-icon"></i>
                    <i class="fas fa-utensil-fork hotel-icon"></i>
                    <i class="fas fa-bath hotel-icon"></i>
                    <i class="fas fa-utensils hotel-icon"></i>
                    </div>
                </div>
                <div class="button-container">
                <h2>1.000.000 Bs.S</h2>
                <button class="custom-button">Reservar</button>
                </div>
            </div>
            </div>
          </form>
        </div>
    </section>
    
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>