<?php

require_once "../auto/config.php";

$id=$_GET['id'];
$action=$_GET['action'];

$req="UPDATE booking SET status = '$action' WHERE id = $id";
$result=mysqli_query($con,$req);

if ($result) {
    echo "UPDATED";
}

?>