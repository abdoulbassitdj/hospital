<?php

require_once "../auto/config.php";

$uname=$_POST['login'];
$pass=$_POST['pass'];

if (!empty($uname) && !empty($pass)) {

    $req = "SELECT * FROM `admin` WHERE login = ? AND pass = ?";
    $stmt = mysqli_stmt_init($con);

    if (!mysqli_stmt_prepare($stmt, $req)) {
        
        echo "Something went wrong !"; 

    } else {

        mysqli_stmt_bind_param($stmt, "ss", $uname, $pass);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);

    }

    if (mysqli_num_rows($result) > 0) {

        $r = mysqli_fetch_array($result);

        session_start();

        $_SESSION['id'] = $r['id'];
        $_SESSION['nom'] = $r['nom'];
        $_SESSION['photo'] = $r['photo'];
        $_SESSION['login'] = $r['login'];
        $_SESSION['pass'] = $r['pass'];

        $_SESSION['logged'] = true;

        header("location:admin.php");
    } else {
        header("location: connect.php?message=1");
    }

} else {
    header("location: connect.php?message=2");
}

?>