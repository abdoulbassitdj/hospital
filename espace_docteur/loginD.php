<?php

require_once "../auto/config.php";

$uname = $_POST['login'];
$pass = $_POST['pass'];

if(!empty($uname) && !empty($pass)){

    $req = "SELECT * FROM `docteur` WHERE login = ? AND pass =?;";
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

        $_SESSION['id'] = htmlspecialchars($r['id']);
        $_SESSION['nom'] = htmlspecialchars($r['nom_complet']);
        $_SESSION['sexe'] = htmlspecialchars($r['sexe']);
        $_SESSION['age'] = htmlspecialchars($r['age']);
        $_SESSION['domicile'] = htmlspecialchars($r['domicile']);
        $_SESSION['tel'] = htmlspecialchars($r['tel']);
        $_SESSION['photo'] = htmlspecialchars($r['photo']);
        $_SESSION['qualif'] = htmlspecialchars($r['qualif']);
        $_SESSION['matricule'] = htmlspecialchars($r['matricule']);
        $_SESSION['login'] = htmlspecialchars($r['login']);
        $_SESSION['pass'] = htmlspecialchars($r['pass']);

        $_SESSION['logged'] = true;

        header("location:docteur.php");
    } else {
        header("location: connect.php?message=1");
    }

} else {
    header("location: connect.php?message=2");
}

?>