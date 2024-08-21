<?php

require_once "../auto/config.php";

$uname=$_POST['login'];
$pass=$_POST['pass'];

$req="SELECT * FROM `docteur` WHERE login = '$uname' AND pass = '$pass'";
$result=mysqli_query($con,$req);

if (mysqli_num_rows($result)>0) {

    $r=mysqli_fetch_array($result);

    session_start();

    $_SESSION['id'] = $r['id'];
    $_SESSION['nom'] = $r['nom_complet'];
    $_SESSION['sexe'] = $r['sexe'];
    $_SESSION['age'] = $r['age'];
    $_SESSION['domicile'] = $r['domicile'];
    $_SESSION['tel'] = $r['tel'];
    $_SESSION['photo'] = $r['photo'];
    $_SESSION['qualif'] = $r['qualif'];
    $_SESSION['matricule'] = $r['matricule'];
    $_SESSION['login'] = $r['login'];
    $_SESSION['pass'] = $r['pass'];

    header("location:docteur.php");
}

?>