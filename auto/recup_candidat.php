<?php

function candidat(){

    require_once "config.php";
    $r="SELECT * FROM `candidat` ORDER BY `nvotes` DESC";
    $result=mysqli_query($con,$r);

    while($v=mysqli_fetch_array($result)){
        echo "  <div class='candidat'>
                <div class='cprofile'><img src='../$v[photo]' alt=''></div>
                    <div class='cnoms'>
                        <p>$v[nom_pnom]</p>
                        <hr>
                    </div>
                    <div class='cclass'>$v[classe]</div>
                    <div class='choose'><a href='../auto/vote.php?id=$v[matricule]'>voter</a></div>
                </div>";
    }
}


?>