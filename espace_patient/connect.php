<?php
// include "../menu_footer.php";

// $message = isset($_GET['error']) ? $_GET['message'] : "";
include "../auto/messages.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion compte patient</title>
    <!-- <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/footer.css"> -->
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="connect.css">
    <!-- <link rel="stylesheet" href="../assets/css/footer.css"> -->
</head>

<body>

    <header>

    </header>

    <main>

        <form action="loginP.php" method="post" class="connect">

            <a href="/hospital/index.php"><img src="../assets/images/logo_hospital_2.png" alt="" class="logo"></a>

            <h2>Connectez vous pour avoir acces <br> a votre dossier medical et d'autres services</h2>

            <div class="boite_message">
                <?php if (!empty($text)): ?>
                    <p class="message" id="message"><?php echo $text; ?></p>
                <?php endif ?>
            </div>

            <input type="text" name="login" placeholder="Login">
            <input type="password" name="pass" placeholder="Mot de passe">

            <div class="link_forgot">
                <a href="forgot.php">Forgot your password ?</a>
            </div>

            <div class="group_submit">
                <input type="submit" value="Login">
                <button><a href="register.php">S'inscrire</a></button>
            </div>

        </form>

    </main>

    <footer>

    </footer>


    <!-- <script src="../assets/js/menu.js"></script> -->
    <script src="../assets/js/animation.js"></script>
    <script src="../assets/js/hide_error.js"></script>

</body>

</html>