<?php

require_once "config.php";

$name=$_POST['nom'];
$matri=$_POST['matricule'];
$classe=$_POST['classe'];
$login=$_POST['login'];
$pass=$_POST['pass'];

$namePhoto=$_FILES['photo']['name'];
$image=$_FILES['photo']['tmp_name'];
$chemin="../images/users/".$namePhoto;
move_uploaded_file($image,$chemin);

echo "$name, $matri, $classe, $login, $pass, $chemin";

$r="INSERT INTO `candidat`(`matricule`, `nom_pnom`, `classe`, `login`, `pass`, `photo`) VALUES ('$matri','$name','$classe','$login',$pass,'$chemin')";
$result=mysqli_query($con,$r);

if($result){
    header("Location:../espace_admin/admin.php");
}


?>