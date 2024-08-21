<?php
include "../menu_footer.php";
include "../auto/recupDocteurs.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>choix du docteur</title>
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="docChoice.css">
</head>
<body>

    <header>
        <?php menu("../","../"); ?>
    </header>

    <main>
        <h2>Choisissez un docteur pour assurer votre suivie medicale</h2>
        <div class="rdvNegatives">

            <?php
                while($doctor = mysqli_fetch_array($doctors)){
                    echo '<div class="rdv">
                    <img src="'.$doctor['photo'].'" alt="">
                    <p class="purchaser">Nom: <strong>'.$doctor['nom_complet'].'</strong></p>
                    <p class="purchaser">Patients: <strong>'.$doctor['id'].'</strong></p>
                    <p>Specialite : <strong>'.$doctor['qualif'].'</strong></p>
                    <div class="acceptation">
                        <a href="docAdd.php?id='.$doctor['id'].'" class="approve">choisir</a>
                    </div>
                </div>';
                }
            ?>

            <!-- <div class="rdv">
                <p class="rdvMessage"><i class="icofont-check"></i></p>
                <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                <p>specialite : <strong>27 mai - 10h30</strong></p>
                <div class="acceptation">
                    <a href="acceptation.php?status=accepted" class="approve">choisir</a>
                </div>
            </div>

            <div class="rdv">
                <p class="rdvMessage"><i class="icofont-check"></i></p>
                <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                <p>specialite : <strong>27 mai - 10h30</strong></p>
                <div class="acceptation">
                    <a href="acceptation.php?status=accepted" class="approve">choisir</a>
                </div>
            </div>

            <div class="rdv">
                <p class="rdvMessage"><i class="icofont-check"></i></p>
                <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                <p>specialite : <strong>27 mai - 10h30</strong></p>
                <div class="acceptation">
                    <a href="acceptation.php?status=accepted" class="approve">choisir</a>
                </div>
            </div>

            <div class="rdv">
                <p class="rdvMessage"><i class="icofont-check"></i></p>
                <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                <p>specialite : <strong>27 mai - 10h30</strong></p>
                <div class="acceptation">
                    <a href="acceptation.php?status=accepted" class="approve">choisir</a>
                </div>
            </div>
            <div class="rdv">
                <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                <p>specialite : <strong>27 mai - 10h30</strong></p>
                <div class="acceptation">
                    <a href="acceptation.php?status=accepted" class="approve">choisir</a>
                </div>
            </div>

            <div class="rdv">
                <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                <p>specialite : <strong>27 mai - 10h30</strong></p>
                <div class="acceptation">
                    <a href="acceptation.php?status=accepted" class="approve">choisir</a>
                </div>
            </div>

            <div class="rdv">
                <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                <p>specialite : <strong>27 mai - 10h30</strong></p>
                <div class="acceptation">
                    <a href="acceptation.php?status=accepted" class="approve">choisir</a>
                </div>
            </div>

            <div class="rdv">
                <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                <p>specialite : <strong>27 mai - 10h30</strong></p>
                <div class="acceptation">
                    <a href="acceptation.php?status=accepted" class="approve">choisir</a>
                </div>
            </div>

            <div class="rdv">
                <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                <p>specialite : <strong>27 mai - 10h30</strong></p>
                <div class="acceptation">
                    <a href="acceptation.php?status=accepted" class="approve">choisir</a>
                </div>
            </div>

            <div class="rdv">
                <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                <p>specialite : <strong>27 mai - 10h30</strong></p>
                <div class="acceptation">
                    <a href="acceptation.php?status=accepted" class="approve">choisir</a>
                </div>
            </div>

            <div class="rdv">
                <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                <p>specialite : <strong>27 mai - 10h30</strong></p>
                <div class="acceptation">
                    <a href="acceptation.php?status=accepted" class="approve">choisir</a>
                </div>
            </div>

            <div class="rdv">
                <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                <p>specialite : <strong>27 mai - 10h30</strong></p>
                <div class="acceptation">
                    <a href="acceptation.php?status=accepted" class="approve">choisir</a>
                </div>
            </div>

            <div class="rdv">
                <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                <p>specialite : <strong>27 mai - 10h30</strong></p>
                <div class="acceptation">
                    <a href="acceptation.php?status=accepted" class="approve">choisir</a>
                </div>
            </div> -->
        </div>
    </main>

    <footer>
        <?php footer(); ?>
    </footer>


    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/animation.js"></script>

</body>
</html>