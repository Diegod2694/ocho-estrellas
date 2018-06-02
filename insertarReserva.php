
<?php
    include_once('conexion.php');
    session_start();
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php 
        include_once('head.php');
    ?>
</head>
<body>
    <div class="emergency-container">
        <div class="emergency">

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
                    echo "  
                        
                                <h1>Excelente!</h1>
                                <h3>Reserva realizada existosamente</h3>
                                <a href='index.php' class='no-link'>Regresar al inicio</a>
                            ";
                }
            ?>
        </div>
    </div>
</body>
</html>
