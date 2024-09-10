<?php

require_once "../auto/config.php";
include "format_date.php";

$uname=$_POST['login'];
$pass=$_POST['pass'];

if(!empty($uname) && !empty($pass)){

    $req = "SELECT * FROM `patient` WHERE login = ?;";
    $stmt = mysqli_stmt_init($con);

    if (!mysqli_stmt_prepare($stmt, $req)) {
        
        echo "Something went wrong !"; 

    } else {

        mysqli_stmt_bind_param($stmt, "s", $uname);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);

    }

    if (mysqli_num_rows($result) > 0) {

        $r = mysqli_fetch_array($result);

        if (password_verify($pass, $r['pass'])) {

            session_start();

            $_SESSION['id'] = htmlspecialchars($r['id']);
            $_SESSION['nom'] = htmlspecialchars($r['nom_complet']);
            $_SESSION['sexe'] = htmlspecialchars($r['sexe']);
            $_SESSION['date'] = Format_date($r['date_naissance']);
            $_SESSION['domicile'] = htmlspecialchars($r['domicile']);
            $_SESSION['tel'] = htmlspecialchars($r['tel']);
            $_SESSION['email'] = htmlspecialchars($r['email']);
            $_SESSION['photo'] = htmlspecialchars($r['photo']);
            $_SESSION['id_doc'] = htmlspecialchars($r['id_docteur']);
            $_SESSION['login'] = htmlspecialchars($r['login']);
            $_SESSION['pass'] = htmlspecialchars($r['pass']);

            $_SESSION['logged'] = true;

            header("location:patient.php");
            
        } else {
            header("location: connect.php?message=1");
        }

    } else {
        header("location: connect.php?message=1");
    }

} else {
    header("location: connect.php?message=2");
}

?>