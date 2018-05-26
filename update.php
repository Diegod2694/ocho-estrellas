<?php
  include_once('conexion.php');
  $idUsuario=$_POST['idUsuario'];  
  $nombreUsuario = $_POST['nombreUsuario'];
  $apellidoUsuario = $_POST['apellidoUsuario'];
  $cedulaUsuario = $_POST['cedulaUsuario'];
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $direccion = $_POST['direccion'];
  
  //insertar en la base de datos
  $queryUpdate = $mysqli->query("UPDATE usuarios SET NombreUsuario = '$nombreUsuario', ApellidoUsuario = '$apellidoUsuario', CedulaUsuario = '$cedulaUsuario', Pass = '$pass', User = '$user', Email = '$email', Telefono = '$telefono', Direccion = '$direccion' WHERE IdUsuario = $idUsuario");
  if ($queryUpdate) {
    header("Location: index.php?art=usuarios");
  }
  else {
    die('ERROR: No se puede ejecutar query para insertar datos. '. $mysqli->error);
  }
?>