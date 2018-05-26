<?php
    include_once("conexion.php");
    session_start();

    $hoteles = $mysqli->query("SELECT * FROM hoteles");

    $tipoHabitacion = $_GET['tipo'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="./css/webfonts/fontawesome-all.css" rel="stylesheet">
    <link href="./css/userRegister.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/validacion.js"></script>
    <title>Ocho-Estrellas / Reservaciones</title>
</head>
<body>
        <nav>
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                    <a href="#sobre-nosotros">Sobre Nosotros</a>
                    <a href="#explora">Explora</a>
                    <a href="#contactanos">Contactanos</a>
                    <a href="#reservaciones">Reservaciones</a>
                    <a href="reporte.php" target="_blank">Panel Administrativo</a>
                </li>
            </ul>
            <!-- <ul>
                <li>
                    <?php
                        if(isset($_SESSION['user'])){
                            $user = $_SESSION['user'];
                            echo "<a href='#'>".$user."</a>";
                            echo "<a href='LogOut.php'>LogOut</a>";
                            if(isset($_SESSION['permisos'])){
                                if($_SESSION['permisos'] == 1){
                                    echo "<a href='userRegister.php'>Registrarse</a>";
                                }
                            }
                        } else {
                            echo "<a href='LogIn1.php'>LogIn</a>";
                        }
                    ?>
                </li>
            </ul> -->
        </nav>
        <div class="aside" hidden id="faltantesPanel" style="float: right">
        <b class='title'>Datos faltantes</b>
        <br>
        <br>
        <ul id="datosFaltantes">

        </ul>
    </div>
        <div class="container">
                <div class="wrapper" style="display:flex; align-items:center; justify-content:center; height:100vh;">
                    <form action='insertarReserva.php' class='login' name='registration_form' method='post'>
                        <center>
                            <div class="fila">
                                <center>
                                    <b class='title'>Reservaciones</b>
                                </center>
                                
                            <div>
                                <a class="btn warn" hidden id="advertencia" onclick="true">
                                    <i class="fa fa-exclamation-circle icono"></i>
                                </a>
                            </div>
                            </div>
                            <div class="colum">
                                <b>Hotel:</b><br>
                                <select name="hotel" id="hotel">
                                    <?php
                                        while($row = mysqli_fetch_array($hoteles)){
                                            echo "<option value=".$row['IdHotel'].">".$row['NombreHotel']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="column">
                                <b>Habitación:</b>
                                <select name="habitacion" id="habitacion"></select>
                            </div>
                            <div class="column">
                                <b>Fecha de Llegada</b><br>
                                <input type='date' name='fechaLlegada' id='fechaLlegada' required onchange="validateReserve()">
                            </div>
                            <div class="column">
                                <b>Fecha de Salida</b><br>
                                <input type='date' name='fechaSalida' id='fechaSalida' required onchange="validateReserve()">
                            </div>
                            <div class="column">
                                <input type="text" name="dias" id='dias' placeholder="Días de estancia" onkeypress="validateReserve()">
                                <input type="text" hidden id="fechaActual" name="fechaActual">
                            </div>
                            <br>
                            <?php
                                echo '<input type="text" value='.$tipoHabitacion.' hidden id="precioDia" name="precioDia">'
                            
                            ?>
                            <div class="column" id="mostP">
                                
                            </div>
                            <button disabled class="btn btn-default" name='BtnRes' id='BtnRes' type='submit' id='BtnRes' value='Enviar'>
                                <span class='state'>Reservar</span>
                            </button>
                        </center>
                    </form>
                </div>
            </div>
</body>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#dias").keyup(function(e){
            console.log("Está en tal");
            e.preventDefault();

            var diasEstancia = $("#dias").val();
            var precioDia = $("#precioDia").val();
            console.log("Dias => ", diasEstancia);
            console.log("Precio => ", precioDia);

            $("#mostP").hide();
            $("#mostP").empty();  // vaciamos las lineas del cuerpo de la tabla

            $.ajax({
                url: "calcPrecio.php",
                type: "post",
                data: {
                    diasEstancia: diasEstancia,
                    precioDia: precioDia
                },
                dataType: "json"
            }).done(
                // console.log("Está hecho");
                function(data){
                    // for (var i = 0; i < data.length; i++) {
                    //     $("#showPrecio").append(data);
                    //     document.getElementById("showPrecio").innerHTML = data;
                    //     console.log("Data => ", data);
                    // }
                    console.log("DONE", data);
                    // document.getElementById("showPrecio").innerHTML = data;
                    $("#mostP").show();
                    $("#mostP").append("<b>Precio (Bs.S)</b><br><input type='text' disabled value="+data+" placeholder="+data+">");
                }
            ).fail(
                function(error){
                    console.log("ERROR", error);
                }
            );

        });
    });
</script>
<script type="text/javascript">
		$(document).ready(function(){
			$("#hotel").change(function(e){
				e.preventDefault();

				var Idhotel = $("#hotel").val();
				
				$("#habitacion").empty();  // vaciamos las lineas del cuerpo de la tabla

				$.ajax({
					url: "filtrarHabitaciones.php",
					type: "post",
					data: {
						Idhotel: Idhotel
					},
					dataType: "json"
				}).done(
					function(data){
						for (var i = 0; i < data.length; i++) {
							$("#habitacion").append("<option value="+data[i]['IdHabitacion']+">"+data[i]['NumeroHabitacion']+"</option>");
						}
					}
				).fail(
					function(error){

					}
				);

			});
		});
	</script>

    <!-- <script>
        function showHint(str) {
            console.log("Valor => ", str);
        var xhttp;
        if (str.length == 0) { 
            document.getElementById("dias").innerHTML = "";
            return;
        }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("dias").innerHTML = this.responseText;
                }
            };
        xhttp.open("GET", "calcPrecio.php?q="+str, true);
        xhttp.send();   
        }
</script> -->
</html>