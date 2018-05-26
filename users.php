<?php
    session_start();
    include_once("conexion.php");
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
                                echo "<a href='LogIn1.php'>Login</a>
                                        <a href='userRegister.php'>Registrarse</a>";
                            }
                        ?>
                    </li>
                </ul>
            </nav>

        <?php
    
        $querybuscarU= $mysqli->query("SELECT * FROM usuarios") or 
          die ("<br> No se puede ejecutar query para buscar datos".$mysqli->error);
    
        if (mysqli_num_rows($querybuscarU) > 0)
        {
          echo "<table class='w3-table bgreen fwhite1'>";
          echo "<tr>";
          echo "<th> Nombre </th>";
          echo "<th> Apellido </th>";
          echo "<th> Cédula </th>";
          echo "<th> Usuario </th>";
          echo "<th> Contraseña </th>";
          echo "<th> Email </th>";
          echo "<th> Teléfono </th>";
          echo "<th> Dirección </th>";
          echo "</tr>";
    
          //empieza a filtrar la tabla con el query
          while (($fila=mysqli_fetch_array($querybuscarU))) {
            $idUsuario=$fila['IdUsuario'];
            $nombreUsuario=$fila['NombreUsuario'];
            $apellidoUsuario=$fila['ApellidoUsuario'];
            $cedulaUsuario=$fila['CedulaUsuario'];
            $user=$fila['User'];
            $pass=$fila['Pass'];        
            $email=$fila['Email'];
            $telefono=$fila['Telefono'];
            $direccion = $fila['Direccion'];
            echo "<tr>";
            echo "<td>$idUsuario</td>";
            echo "<td>$nombreUsuario</td>";
            echo "<td>$apellidoUsuario</td>";
            echo "<td>$cedulaUsuario</td>";
            echo "<td>$user</td>";
            echo "<td>$pass</td>";
            echo "<td>$email</td>";
            echo "<td>$telefono</td>";
            echo "<td>$direccion</td>";
            echo "<td>
                    <a href='edit.php?idUsuario=$idUsuario&nombreUsuario=$nombreUsuario&apellidoUsuario=$apellidoUsuario&cedulaUsuario=$cedulaUsuario&user=$user&pass=$pass&email=$email&telefono=$telefono&direccion=$direccion'>
                      <button class='btn btn-primary'>Editar</button>
                    </a>";
              echo  "<a href='index.php?idUsuario=$idUsuario'>
                      <button class='btn btn-danger'>Eliminar</button>
                    </a>
                  </td>";
          }
          echo "</tr>";
          echo "<table>";
        }
        else {
          echo "<h2>No tiene ordenes realizadas.</h2>";
        }
      ?>
    
</body>
</html>