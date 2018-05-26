
<?php
    include_once('conexion.php');
    session_start();
    
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Reserva</title>
</head>
<body>
    <?php
        $fechaLlegada = $_POST['fechaLlegada'];
        $fechaSalida = $_POST['fechaSalida'];
        $fechaActual = $_POST['fechaActual'];
        $precio = $_POST['precioDia'];
        $usuario = $_SESSION['id_user'];
        $hotel = $_POST['hotel'];
        $habitacion = $_POST['habitacion'];

        $query_insertar = $mysqli->query("INSERT INTO reservas (IdReserva, FechaInicio, FechaFin, FechaReserva, PrecioReserva, Usuario, EstadoReserva) VALUES (NULL, '$fechaLlegada', '$fechaSalida', '$fechaActual', $precio, $usuario, 1)");

        $query_insertarHab = $mysqli->query("UPDATE habitaciones set Disponibilidad = 0 WHERE habitaciones.IdHabitacion = $habitacion");

        if($query_insertar){
            echo "Reserva realizada existosamente";
        }
    ?>
</body>
</html>
