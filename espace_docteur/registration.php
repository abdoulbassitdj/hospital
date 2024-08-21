<?php

require_once "../auto/config.php";

foreach($_POST as $key => $val){

    if(empty($_POST[$key])){
        echo "<div>Remplissez le champ $key </div>";
        $full = FALSE;
    } else {
        $full = TRUE;
    }
}

if($full){

    $matricule=$_POST['matricule'];
    $age=$_POST['age'];
    $sexe=$_POST['sexe'];
    $addresse=$_POST['adresse'];
    $tel=$_POST['tel'];
    $uname=$_POST['username'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    $namePhoto=$_FILES['photo']['name'];
    $image=$_FILES['photo']['tmp_name'];
    $chemin="../images/users/".$namePhoto;
    move_uploaded_file($image,$chemin);

    if ($pass==$cpass) {
        
        $req="UPDATE `docteur` SET `age`=$age,`sexe`='$sexe',`adresse`='$addresse',`tel`=$tel,`login`='$uname',`pass`='$pass',`photo`='$chemin' WHERE `matricule`='$matricule'";
        $result=mysqli_query($con,$req);

        if($result){
            header("location: register.php");
        }

    } else {
        echo "les mots de passe ne correspondent pas !";
    }

}

// if(!empty($nom) && !empty($age) && !empty($sexe) && !empty($addresse) && !empty($tel) && !empty($uname)  && !empty($pass) && !empty($cpass)){

//     $req="INSERT INTO docteur(nom_complet,qualif,matricule) VALUES('$nom','$matricule','$qualif')";
//     $result=mysqli_query($con,$req);

//     header("location: admin.php");
// } else {
//     echo "L'ajout a echoue !";
// }

// $req="SELECT * FROM `patient` WHERE login = '$uname' AND pass = '$pass'";
// $result=mysqli_query($con,$req);

// if (mysqli_num_rows($result)>0) {

//     $r=mysqli_fetch_array($result);

//     session_start();

//     header("location:patient.php");
// }

?>