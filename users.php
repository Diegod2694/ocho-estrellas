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
<br><br>

        <?php
    
        $querybuscarU= $mysqli->query("SELECT * FROM usuarios") or 
          die ("<br> No se puede ejecutar query para buscar datos".$mysqli->error);
    
        if (mysqli_num_rows($querybuscarU) > 0)
        {
          echo "<table class='w3-table bgreen fwhite1' style='color:white;'>";
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
            echo "<td>$nombreUsuario</td>";
            echo "<td>$apellidoUsuario</td>";
            echo "<td>$cedulaUsuario</td>";
            echo "<td>$user</td>";
            echo "<td>$pass</td>";
            echo "<td>$email</td>";
            echo "<td>$telefono</td>";
            echo "<td>$direccion</td>";
            // echo "<td>
            //         <a href='edit.php?idUsuario=$idUsuario&nombreUsuario=$nombreUsuario&apellidoUsuario=$apellidoUsuario&cedulaUsuario=$cedulaUsuario&user=$user&pass=$pass&email=$email&telefono=$telefono&direccion=$direccion'>
            //           <button class='btn btn-primary'>Editar</button>
            //         </a>";
            //   echo  "<a href='index.php?idUsuario=$idUsuario'>
            //           <button class='btn btn-danger'>Eliminar</button>
            //         </a>
            //       </td>";
          }
          echo "</tr>";
          echo "<table>";
        }
        else {
          echo "<h2>No tiene ordenes realizadas.</h2>";
        }
      ?>
      <br><br>
      <center>
        <button style="width:200px;" class="custom-button"><a class="no-link" href="reporte.php" target="_blank">Generar Reporte de Usuarios</a> </button>
      </center>
      <br><br>
      <center>
        <button style="width:200px;" class="custom-button"><a class="no-link" href="reporteReservas.php" target="_blank">Generar Reporte de Reservas</a> </button>
      </center>
    
</body>
</html>