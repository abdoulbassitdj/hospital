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

    $nom=$_POST['nom'];
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

    // $tab=[$nom,$age,$sexe,$addresse,$tel,$uname,$pass,$cpass,$chemin];

    // foreach($tab as $el){
    //     echo $el."\n";
    // }

    if ($pass==$cpass) {
        
        $req="INSERT INTO `patient`(`nom_complet`, `sexe`, `age`, `domicile`, `tel`, `photo`, `login`, `pass`) VALUES ('$nom','$sexe',$age,'$addresse',$tel,'$chemin','$uname','$pass')";
        $result=mysqli_query($con,$req);

        if($result){

            header("location:connectP.php");

        } else {

            echo "<br>echec".mysqli_error($con);

        }

    } else {

        echo "les mots de passe ne correspondent pas !";

    }

}


?>