<?php
require_once "../auto/config.php";
session_start();

$doc_id = $_GET['id'];

echo $doc_id;

$req="UPDATE `patient` SET `id_docteur`=$doc_id WHERE `id`=$_SESSION[id]";
$result=mysqli_query($con,$req);

if($result){
    echo "success!";
    header("location: patient.php?onglet=dashboard");
}

?>