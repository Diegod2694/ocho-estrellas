<?php
	// EJEMPLO
	// $mysqli = new mysqli("servidor","usuario","clave","baseDatos");
	$mysqli = new mysqli("localhost","root","","ochoestrellas");
	if ($mysqli->connect_error)
	{
		die('ERROR: No se estableció la conexión '. mysql_connect_error() );
	}	

?>