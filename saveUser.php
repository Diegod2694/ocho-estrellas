<?php
    session_start();

    $conn = new mysqli("localhost","root","","ochoestrellas");
    if($conn->connect_error){
        die("ERROR: No se estableció la conexión. ". mysqli_connect_error());
    }

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

    $queryRespuesta = $conn->query("INSERT INTO usuarios (NombreUsuario, ApellidoUsuario, CedulaUsuario, 
            Pass, User, Email, Telefono, Direccion, Permisos) VALUES ('$firstname', '$lastName', 
            '$cedulaFull', '$password', '$usuario', '$email', '$phone', '$address', $permisos)");

    // $queryRespuesta = $conn->query($sql);

    if ($queryRespuesta){
        echo "Datos Registrados Exitosamente<br><br>
                <a href='index.php'>Regresar al inicio</a>";
    }
?>