<?php
    include_once('conexion.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ocho Estrellas</title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="slides.css">
    <link href="./css/webfonts/fontawesome-all.css" rel="stylesheet">
    <link rel="icon" href="./assets/waterfall.png">
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="#inicio">Inicio</a>
                <a href="#sobre-nosotros">Sobre Nosotros</a>
                <a href="#explora">Explora</a>
                <a href="#contactanos">Contactanos</a>
                <a href="#reservaciones">Reservaciones</a>
                <a href="reporte.php" target="_blank">Panel Administrativo</a>
            </li>
        </ul>
        <ul>
            <li>
                <?php
                    if(isset($_SESSION['user'])){
                        $user = $_SESSION['user'];
                        echo "<a href='#'>".$user."</a>";
                        echo "<a>LogOut</a>";
                    } else {
                        echo "<a href='LogIn.php'>Login</a>
                                <a href='userRegister.php'>Registrarse</a>";
                    }
                ?>
            </li>
        </ul>
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
            <form action="" method="post">
                <input type="date" name="" id="">
                <input type="date" name="" id="">
                <input type="number" name="" id="">
                <input type="number" name="" id="">
                <input type="submit" value="Enviar">
            </form>
            <div class="form-content" style="margin:0 !important;">
              <div class="suite-container no-margin"> 
                <img src="/assets/hab1.jpg" alt="hab1">
                <div class="suite-form">
                  <h2>Suite Junior</h2>
                  <h4>Nuestras Suites Junior ofrecen hermosas vistas de la ciudad.</h4>
                  <ul>
                    <li>Tamaño: 260 ft²</li>
                    <li>Camas: 2 dobles(s)</li>
                  </ul>
                  <div>
                    <i class="fas fa-star hotel-icon"></i>
                    <i class="fas fa-star hotel-icon"></i>
                    <i class="fas fa-star hotel-icon"></i>
                    <i class="fas fa-star hotel-icon"></i>
                    <i class="fas fa-star hotel-icon"></i>
                    <i class="fas fa-star hotel-icon"></i>
                    <i class="fas fa-star hotel-icon"></i>
                    <i class="fas fa-star hotel-icon"></i>
                  </div>
                </div>
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
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>