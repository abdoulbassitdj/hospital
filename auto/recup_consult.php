<?php

    require_once "../auto/config.php";
    $sql = "SELECT * FROM `consultation` WHERE id_patient = $_SESSION[id] ORDER BY `date_consult` DESC";
    $consults = mysqli_query($con, $sql);

    $consults = mysqli_fetch_all($consults, MYSQLI_ASSOC);

?>