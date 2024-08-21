<?php
session_start();
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

    $poids=$_POST['poids'];
    $taille=$_POST['taille'];
    $groupe=$_POST['groupe'];
    $rhesus=$_POST['rhesus'];
    $temp=$_POST['temp'];
    $sucre=$_POST['sucre'];

    $p_systolique=$_POST['p_systolique'];
    $p_diastolique=$_POST['p_diastolique'];
    $ecg=$_POST['ecg'];
    $pouls=$_POST['pouls'];
    $frequence=$_POST['frequence'];
    $cholesterol=$_POST['cholesterol'];
    $debit=$_POST['debit'];

    $resultats=$_POST['resultats'];
    $diagnostique=$_POST['diagnostique'];
    $prescription=$_POST['prescription'];
    

    $name_fichier1=$_FILES['fichier1']['name'];
    $fichier1=$_FILES['fichier1']['tmp_name'];
    $chemin1="/hospital/fichiers/".$name_fichier1;
    move_uploaded_file($fichier1,"../../".$chemin1);


    $name_fichier2=$_FILES['fichier2']['name'];
    $fichier2=$_FILES['fichier2']['tmp_name'];
    $chemin2="/hospital/fichiers/".$name_fichier2;
    move_uploaded_file($fichier2,"../../".$chemin2);

    $name_fichier3=$_FILES['fichier3']['name'];
    $fichier3=$_FILES['fichier3']['tmp_name'];
    $chemin3="/hospital/fichiers/".$name_fichier3;
    move_uploaded_file($fichier3,"../../".$chemin3);

    $req="INSERT INTO `params_vitaux`(`id_patient`, `date_consult`, `poids`, `taille`, `groupe_sang`, `rhesus`, `temperature`, `taux_sucre`, `p_systolique`, `p_diastolique`, `ecg`, `pouls`, `frequence`, `cholesterol`, `debit`) VALUES ($_SESSION[id_pat],NOW(),$poids,$taille,'$groupe','$rhesus',$temp,$sucre,$p_systolique,$p_diastolique,$ecg,$pouls,$frequence,$cholesterol,$debit);
            INSERT INTO `consultation`(`id_patient`, `date_consult`, `resultat`, `diagnostique`, `prescription`, `fichier1`, `fichier2`, `fichier3`) VALUES ($_SESSION[id_pat],NOW(),'$resultats','$diagnostique','$prescription','$chemin1','$chemin2','$chemin3')";
    $result=mysqli_multi_query($con,$req);

    if($result){
        echo "success";
        header("location:docteur.php");

    } else {

        echo "<br>echec".mysqli_error($con);

    }

}

// $extensions_autorisees = ['jpg', 'jpeg', 'png', 'pdf', 'docx'];
    // $extension_fichier = strtolower(pathinfo($name_fichier1, PATHINFO_EXTENSION));

    // if (!in_array($extension_fichier, $extensions_autorisees)) {
    //     echo "Vous devez uploader un fichier de type jpg, jpeg ou png.";
    // }

    // $taille_max = 5 * 1024 * 1024; // 5 Mo
    // if ($file1['size'] > $taille_max) {
    //     echo "La taille du fichier dépasse la limite autorisée.";
    // }


?>