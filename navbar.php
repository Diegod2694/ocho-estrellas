<ul class="navbar-left-side">
    <li>
        <a href="index.php">Inicio</a>
        <a href="#sobre-nosotros">Nosotros</a>
        <a href="#contactanos">Contactanos</a>
        <a href="reservaciones.php">Reservaciones</a>
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
                echo "<a href='LogIn1.php'>Login</a>
                        <a href='userRegister.php'>Registrarse</a>";
            }
        ?>
        <a href="reporte.php" target="_blank">Administracion</a>
    </li>
</ul>
<ul class="navbar-left-side-icon">
    <li>
        <i class="fas fa-align-justify"></i>
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
                echo "<a href='LogIn1.php'>Login</a>
                        <a href='userRegister.php'>Registrarse</a>";
            }
        ?>
    </li>
</ul>