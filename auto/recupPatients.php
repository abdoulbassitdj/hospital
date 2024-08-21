<?php

require_once "../auto/config.php";
$r="SELECT * FROM `patient` ORDER BY `nom_complet` DESC";
$doctors=mysqli_query($con,$r);


?>