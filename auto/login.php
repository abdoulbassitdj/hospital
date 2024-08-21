<?php
require_once "config.php";

$uname=$_POST['uname'];
$pass=$_POST['pass'];
$status=$_POST['status'];

$req="SELECT * FROM `$status` WHERE login = '$uname' AND pass = '$pass'";
$result=mysqli_query($con,$req);

if (mysqli_num_rows($result)>0) {

    $r=mysqli_fetch_array($result);

    if($status=="electeur"){
        
        session_start();
        $_SESSION['mat']=$r['matricule'];
        $_SESSION['user']=$r['nom_pnom'];
        $_SESSION['photo']=$r['photo'];
        $_SESSION['vstatus']=$r['vstatus'];
        $_SESSION['classe']=$r['classe'];
        $_SESSION['status']=$r['status'];
        
        header("location:../espace_electeur/electeur.php");

    } else if($status=="candidat"){

        session_start();
        $_SESSION['user']=$r['nom_pnom'];
        $_SESSION['photo']=$r['photo'];
        $_SESSION['vstatus']=$r['vstatus'];
        $_SESSION['classe']=$r['classe'];
        $_SESSION['status']=$status;
        $_SESSION['nvotes']=$r['nvotes'];

        header("location:../espace_candidat/candidat.php");

    } else{

        session_start();
        $_SESSION['user']=$r['nom_pnom'];
        $_SESSION['photo']=$r['photo'];
        $_SESSION['status']=$status;

        header("location:../espace_admin/admin.php");

    }

} else {
    header("location:../index.php?");
}

?>