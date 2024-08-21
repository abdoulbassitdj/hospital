<?php

require_once "../auto/config-2.php";

foreach($_POST as $key => $val){

    if(empty($_POST[$key])){
        echo "<div>Remplissez le champ $key </div>";
        $full = FALSE;
    } else {
        $full = TRUE;
    }
}

if($full){

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $dnais=$_POST['date-naiss'];
    $lnaiss=$_POST['lieu-naiss'];
    $sexe=$_POST['genre'];
    $pays=$_POST['nationalite'];

    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $fixe=$_POST['fixe'];
    $ville=$_POST['ville'];
    $quartier=$_POST['quartier'];
    $residence=$_POST['residence'];

    $matri=$_POST['matricule'];
    $depart=$_POST['departement'];
    $filiere=$_POST['filiere'];
    $cycle=$_POST['cycle'];
    $niveau=$_POST['niveau'];

    $uname=$_POST['username'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    $namePhoto=$_FILES['photo']['name'];
    $image=$_FILES['photo']['tmp_name'];
    $chemin="../images/users/".$namePhoto;
    move_uploaded_file($image,$chemin);

    if ($pass==$cpass) {
        
        $req="INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `date_naissance`, `lieu_naissance`, `genre`, `cycle`, `niveau`, `nationalite`, `email`, `photo`, `login`, `pass`, `id_filiere`, `ville`, `quartier`, `residence`, `tel`, `fixe`) VALUES ('$matri', '$nom', '$prenom', '$dnais', '$lnaiss', '$sexe', '$cycle', '$niveau', '$pays', '$email', '$chemin', '$uname', '$pass', '$filiere', '$ville', '$quartier', '$residence', '$tel', '$fixe')";
        $result=mysqli_query($con,$req);

        if($result){

            header("location:connect_student.php");

        } else {

            echo "<br>echec".mysqli_error($con);

        }

    } else {

        echo "les mots de passe ne correspondent pas !";

    }

}


?>