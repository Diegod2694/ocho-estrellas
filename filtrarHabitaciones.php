<?php
    include_once("conexion.php");
    session_start();

    $hotel = $_REQUEST['Idhotel'];

    $consulta = $mysqli->query("SELECT * FROM habitaciones WHERE habitaciones.hotel = $hotel AND habitaciones.Disponibilidad = 1");

	$vector = array();
	$i = 0;
	while ($rs2 = mysqli_fetch_array($consulta)) {
		$vector[$i]['IdHabitacion'] = $rs2["IdHabitacion"];
		$vector[$i]['NumeroHabitacion'] = $rs2["NumeroHabitacion"];
		// $vector[$i]['username'] = $rs["username"];
		// $vector[$i]['estado'] = $rs["estado"];
		// $vector[$i]['codigo'] = $rs["codigo"];
		// $vector[$i]['requerimiento'] = $rs["requerimiento"];
		$i = $i+1;
	}

	// $conn->close();

	header("Type: application/json");
	echo json_encode($vector);
?>