<?php

require_once "../auto/config.php";

$nom = $_POST['nom'];
$matricule = $_POST['matricule'];
$poste = $_POST['poste'];

if(!empty($nom) && !empty($matricule) && !empty($poste)){

    $req="INSERT INTO recep(nom_complet,poste,matricule) VALUES('$nom','$poste','$matricule')";
    $result=mysqli_query($con,$req);

    header("location: admin.php");
} else {
    echo "L'ajout a echoue !";
}


echo $nom." ".$matricule." ".$poste;

?>