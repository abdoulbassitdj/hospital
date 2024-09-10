<?php

require_once "../auto/config.php";

$id=$_GET['id'];

$req="UPDATE booking SET status = 'annulé' WHERE id = $id";
$result=mysqli_query($con,$req);

if ($result) {
    echo "UPDATED";
    header("location: patient.php?onglet=rendez-vous");
}

?>