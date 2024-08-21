<?php
session_start();
require_once "config.php";

$r="SELECT vstatus FROM `electeur` WHERE matricule='$_SESSION[mat]'";
$result=mysqli_query($con,$r);
$vstat=mysqli_fetch_array($result);
$vstatus=$vstat['0'];

if ($vstatus=="oui") {

    echo "you have voted for...<br>";

} else {
    
    $matri=$_GET['id'];

    $r="SELECT nvotes FROM `candidat` WHERE matricule='$matri'";
    $result=mysqli_query($con,$r);
    $nvotes=mysqli_fetch_array($result);

    $npast=$nvotes['nvotes'];
    $npast++;
    echo $npast;

    $r="UPDATE `candidat` SET nvotes = $npast WHERE matricule='$matri'";
    $result=mysqli_query($con,$r);

    $r="UPDATE `electeur` SET vstatus = 'oui' WHERE matricule='$_SESSION[mat]'";
    $result=mysqli_query($con,$r);
}


?>