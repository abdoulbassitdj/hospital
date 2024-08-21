<?php

require_once "../auto/config.php";

$nom = $_POST['nom'];
$matricule = $_POST['matricule'];
$qualif = $_POST['qualif'];

if(!empty($nom) && !empty($matricule) && !empty($qualif)){

    $req="INSERT INTO docteur(nom_complet,qualif,matricule) VALUES('$nom','$qualif','$matricule')";
    $result=mysqli_query($con,$req);

    header("location: admin.php");
} else {
    echo "L'ajout a echoue !";
}



// echo $nom." ".$matricule." ".$qualif;

?>