<style>
    body {
        background-color: rgb(35, 168, 124);
    }
  .container{
    width: 30%;
    background-color: white;
    display: flex;
    justify-content: center;
    flex-direction: column;
    border-radius: 5px;
  }
</style>
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
                    $_SESSION['permisos'] = $fila['Permisos'];
                    header("Location: index.php");
                } else {
                    echo "  
                    <center>
                    <div class='container'>
                        <div class='error-container'>
                          <h1>ERROR DE INGRESO</h1>
                          <h3>Contraseña Incorrecta</h3>
                          <a href='LogIn.php'>Volver al LogIn</a>
                        </div>
                    </div>
                    </center>";
                }
            } else {
                
            }
        }
        if($rows == 0){
            echo "  
        <center>
        <div class='container'>
            <div class='error-container'>
              <h1>ERROR DE CONSULTA</h1>
              <h3>El usuario no existe</h3>
              <a href='LogIn.php'>Volver al LogIn</a>
            </div>
        </div>
        </center>";
        }
?>