<?php
    include_once('conexion.php');
    // session_start();

    $firstname = $_POST['nombreUsuario'];
    $lastName = $_POST['apellidoUsuario'];
    $identification = $_POST['identification'];
    $cedula = $_POST['cedulaUsuario'];
    $usuario = $_POST['user'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $areaCode = $_POST['areaPhone'];
    $phoneNumber = $_POST['telefono'];
    $address = $_POST['direccion'];
    $permisos = $_POST['permisos'];

    $phone = $areaCode . $phoneNumber;
    $cedulaFull = $identification . $cedula;

    $queryRespuesta = $mysqli->query("INSERT INTO usuarios (idUsuario, NombreUsuario, ApellidoUsuario, CedulaUsuario, 
            Pass, User, Email, Telefono, Direccion, Permisos) VALUES (NULL, '$firstname', '$lastName', 
            '$cedulaFull', '$password', '$usuario', '$email', '$phone', '$address', $permisos)");

    // $queryRespuesta = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <?php
        include_once('head.php');
    ?>
</head>
<body>
    <div class="emergency-container">
        <div class="emergency">
            <?php
                if ($queryRespuesta){
                    echo "  
                        
                                <h1>Excelente!</h1>
                                <h3>Datos registrados exitosamente.</h3>
                                <a href='index.php' class='no-link'>Regresar al inicio</a>
                            ";
                } else {
                    echo "  
                        
                                <h1>Error en inserción de datos!</h1>
                                <a href='index.php' class='no-link'>Regresar al inicio</a>
                            ";
                }
            ?>
        </div>    
    </div>
</body>
</html>