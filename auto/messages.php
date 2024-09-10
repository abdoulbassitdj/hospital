<?php

$message = isset($_GET['message']) ? $_GET['message'] : "";

function Invalid_infos(){
    return "login ou mot de passe incorrect";
}

function Champs_vides(){
    return "merci de remplire tous les champs";
}

function Logged_out(){
    return "vous avez ete deconnecte";
}

switch ($message) {
    case 1:
        $text = Invalid_infos();
        break;

    case 2:
        $text = Champs_vides();
        break;

    case 3:
        $text = Logged_out();
        break;
    
    default:
        $text = "";
        break;
}

?>