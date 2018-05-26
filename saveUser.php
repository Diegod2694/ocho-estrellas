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

    if ($queryRespuesta){
        echo "Datos Registrados Exitosamente<br><br>
                <a href='index.php'>Regresar al inicio</a>";
    } else {
        echo "Error en inserción de datos";
    }
?>