<?php

include "../auto/messages.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion compte admin</title>
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="connect.css">
</head>

<body>

    <header>
    </header>

    <main>

        <form action="loginA.php" method="post" class="connect">

            <a href="/hospital/index.php"><img src="../assets/images/logo_hospital_2.png" alt="" class="logo"></a>

            <h2>Connectez vous pour administrer <br> votre service</h2>

            <div class="boite_message">
                <?php if (!empty($text)): ?>
                    <p class="message" id="message"><?php echo $text; ?></p>
                <?php endif ?>
            </div>

            <input type="text" name="login" placeholder="Login">

            <input type="password" name="pass" placeholder="Pass">

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

    <script src="../assets/js/animation.js"></script>

</body>

</html>