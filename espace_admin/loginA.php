<?php

require_once "../auto/config.php";

$uname=$_POST['login'];
$pass=$_POST['pass'];

$req="SELECT * FROM `admin` WHERE login = '$uname' AND pass = '$pass'";
$result=mysqli_query($con,$req);

if (mysqli_num_rows($result)>0) {

    $r=mysqli_fetch_array($result);

    session_start();

    $_SESSION['id'] = $r['id'];
    $_SESSION['nom'] = $r['nom'];
    $_SESSION['photo'] = $r['photo'];
    $_SESSION['login'] = $r['login'];
    $_SESSION['pass'] = $r['pass'];

    header("location:admin.php");
}

?>