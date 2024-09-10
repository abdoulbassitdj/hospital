<?php

require_once "../auto/config.php";
$r="SELECT * FROM `recep` ORDER BY `nom_complet` DESC";
$receptionistes=mysqli_query($con,$r);


?>