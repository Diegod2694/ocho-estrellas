<?php
  include_once('conexion.php');
  session_start();

  $username = $_POST['userLog'];
  $password = $_POST['passLog'];

          $queryBuscar = $mysqli->query("SELECT * FROM usuarios WHERE usuarios.User = '$username'");

        $rows = $queryBuscar->num_rows;
        while (($fila=mysqli_fetch_array($queryBuscar))){
            $userbd = $fila['User'];
            $passbd = $fila['Pass'];
            if($username == $userbd){
                if($password == $passbd){
                    $_SESSION['user'] = $username;
                    $_SESSION['permisos'] = $fila['permisos'];
                    header("Location: index.php");
                } else {
                    echo "CONTRASEÑA INCORRECTA<br><br>";
                    echo "<a href='index.php'></a>";
                }
            } else {
                
            }
        }
        if($rows == 0){
            echo "  <div class='container'>
            <div class='error-container'>
              <h1>ERROR DE CONSULTA</h1>
              <h3>El usuario no existe</h3>
              <a href='index.php'>Volver a la página principal</a>
            </div>
          </div>";
        }
?>