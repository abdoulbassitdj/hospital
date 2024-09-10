<?php

session_start();

require_once "../auto/config.php";
require_once "../auto/session-verif.php";

foreach($_POST as $key => $val){

    if(empty($_POST[$key])){
        echo "<div>Remplissez le champ $key </div>";
        $full = FALSE;
    } else {
        $full = TRUE;
    }
}

if($full and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    $nom=$_POST['nom'];
    $date=$_POST['date'];
    $sexe=$_POST['sexe'];
    $addresse=$_POST['adresse'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    $uname=$_POST['username'];
    $pass=password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $cpass=$_POST['cpass'];

    $namePhoto=$_FILES['photo']['name'];
    $image=$_FILES['photo']['tmp_name'];
    $chemin="../images/users/".$namePhoto;
    move_uploaded_file($image,$chemin);

    if (password_verify($cpass, $pass)) {
        
        $req="UPDATE `patient` SET `nom_complet` = ?, `sexe` = ?, `date_naissance` = ?, `domicile` = ?, `tel` = ?, `email` = ?, `photo` = ?, `login` = ?, `pass` = ? WHERE id = ?";
        $stmt = mysqli_stmt_init($con);

        if (!mysqli_stmt_prepare($stmt, $req)) {

            echo "Something went wrong !";

        } else {

            mysqli_stmt_bind_param($stmt, "ssssissssi", $nom, $sexe, $date, $addresse, $tel, $email, $chemin, $uname, $pass, $_SESSION["id"]);
            mysqli_stmt_execute($stmt);
            // $result=mysqli_stmt_get_result($stmt);

            if(mysqli_stmt_affected_rows($stmt) > 0){

                header("location:patient.php?onglet=profile");
    
            } else {

                // var_dump($result);
    
                echo "<br>echec".mysqli_error($con);
    
            }
        }


    } else {

        echo "les mots de passe ne correspondent pas !";

    }

}


?>