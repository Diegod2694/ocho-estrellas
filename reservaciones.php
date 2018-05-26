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
    <nav>
        <ul>
            <li>
                <a href="index.php">Inicio</a>
                <a href="#sobre-nosotros">Sobre Nosotros</a>
                <a href="#explora">Explora</a>
                <a href="#contactanos">Contactanos</a>
                <a href="reservaciones.php" class="active">Reservaciones</a>
                <a href="reporte.php" target="_blank">Panel Administrativo</a>
            </li>
        </ul>
        <!-- <ul>
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
        </ul> -->
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
            <form action="especificarReserva.php" method="get">
            <div class="form-content">
                <div class="suite-container no-margin">
                    <img class="img-hab margin-hab" src="assets/hab1.jpg" alt="hab1">
                    <input type="text" value=250 hidden id="tipo" name="tipo">
                    <div class="suite-form">
                        <h2 class="suite-title">Suite Individual</h2>
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
                        <h2>250.000 Bs.S</h2>
                        <button class="custom-button">Reservar</button>
                    </div>
                </div>
            </div>
            </form>

            <div class="form-content">
                <div class="suite-container no-margin">
                    <img class="img-hab margin-hab" src="assets/hab1.jpg" alt="hab1">
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
                </div>
            </div>

            <div class="form-content">
                <div class="suite-container no-margin">
                    <img class="img-hab margin-hab" src="assets/hab1.jpg" alt="hab1">
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
                </div>
            </div>
        </div>

        <div class="form-content">
            <div class="suite-container no-margin">
                <img class="img-hab margin-hab" src="assets/hab1.jpg" alt="hab1">
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
            </div>
        </div>
        </div>

        <div class="form-container secondary-color second-container">
            <div class="form-content" style="margin:0 !important;">
                <div class="form-text-container">
                    <h2>Nuestras Habitaciones</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, perspiciatis in. Quo, ab! Incidunt
                        aliquam consequuntur fugit necessitatibus, ratione, error exercitationem neque delectus ducimus sed
                        excepturi tempore ullam quam odio?</p>
                </div>
                <img class="img-hab" src="assets/hab1.jpg" alt="habitacion">
            </div>
        </div>
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>