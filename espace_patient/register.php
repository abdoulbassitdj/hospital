<?php
include "../menu_footer.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creation de compte</title>
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>
<body>

    <header>
        <?php menu("../","../"); ?>
    </header>

    <main>
        <section class="box">
            <form action="registration.php" method="post" enctype="multipart/form-data">
                <input type="text" name="nom" placeholder="Nom d'utilisateur">
                <select name="sexe" id="">
                    <option value="feminin">Feminin</option>
                    <option value="masculin">Masculin</option>
                </select>
                <input type="number" name="age" placeholder="Age">
                <input type="text" name="adresse" placeholder="Adresse">
                <input type="text" name="tel" placeholder="Telephone">
                <input type="text" name="username" placeholder="Nom d'utilisateur">
                <input type="password" name="pass" placeholder="mot de passe">
                <input type="password" name="cpass" placeholder="confirmation du mot de passe">
                <input type="file" name="photo">
                <div class="validation">
                    <input type="submit" value="Creer">
                    <input type="reset" value="Annuler">
                </div>
            </form>
            <div class="illustration">
                <h2>creez un compte</h2>
                <p>Pour pouvoir contacter un docteur, enregistrer votre dossier medicale ou prendre un rendez-vous.</p>
            </div>
        </section>
    </main>

    <footer>
        <?php footer(); ?>
    </footer>


    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/animation.js"></script>

</body>
</html>