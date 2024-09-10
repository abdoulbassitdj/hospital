<?php

include "../auto/recupDocteurs.php";
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>choix du docteur</title>
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="docChoice.css">
</head>
<body>

    <header>
    </header>

    <main>
        <h2>Choisissez un docteur pour assurer votre suivie medicale</h2>
        <div class="docteurs">

            <?php while($doctor = mysqli_fetch_array($doctors)) : ?>
                <div class="docteur">
                    <img src="<?php echo $doctor['photo'] ?>" alt="">
                    <p class="purchaser">Nom: <strong><?php echo $doctor['nom_complet'] ?></strong></p>
                    <!-- <p class="purchaser">Patients: <strong><?php echo $doctor['id'] ?></strong></p> -->
                    <p>Specialite : <strong><?php echo $doctor['qualif'] ?></strong></p>
                    <div class="acceptation">
                        <a href="docAdd.php?id=<?php echo $doctor['id'] ?>" class="approve">choisir</a>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </main>

    <footer>
    </footer>

    <script src="../assets/js/animation.js"></script>

</body>
</html>