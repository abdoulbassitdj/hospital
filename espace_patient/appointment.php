<?php
require_once "../auto/config.php";
session_start();

$date = $_POST['date'];
$heure = $_POST['time'];

echo "$date $heure <br>";

$req="INSERT INTO `booking`(`id_patient`, `id_docteur`, `date`, `heure`) VALUES ($_SESSION[id], $_SESSION[docId], '$date', '$heure')";
$result=mysqli_query($con,$req);

if($result){
    echo "success!";
    header("location: patient.php");
} else {
    echo "failure! <br>".mysqli_error($con);
}

?>