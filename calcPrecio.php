<?php
    $dias = $_REQUEST['diasEstancia'];
    $precioDia = $_REQUEST['precioDia'];

    $total = $dias*$precioDia;
    header("Type: application/json");
    // echo json_encode($total);
    echo $total;
?>