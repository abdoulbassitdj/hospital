<?php

require_once "../auto/config.php";
$r="SELECT * FROM `recep` ORDER BY `nom_complet` DESC";
$doctors=mysqli_query($con,$r);


?>