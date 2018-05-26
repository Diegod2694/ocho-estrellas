<?php
  include_once ('sesion.php');
  include_once('conexion.php');
  $idUsuario=$_GET['idUsuario'];
  //eliminar de la base de datos
  $queryDelete = $mysqli->query("DELETE FROM usuarios WHERE IdUsuario = '$idUsuario'");
  if ($queryDelete) {
    header("Location: index.php?art=usuarios");
  }
  else {
    die('ERROR: No se puede ejecutar query para insertar datos. '. $mysqli->error);
  }
?>