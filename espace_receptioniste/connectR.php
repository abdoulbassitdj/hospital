<?php
include "../menu_footer.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion compte reception</title>
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="connectR.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>
<body>

    <header>
        <?php menu("../",""); ?>
    </header>

    <main>

        <form action="loginP.php" method="post" class="connect">

            <h2>Connectez vous pour avoir acces <br> a votre dossier medical et d'autres services</h2>


            <input type="text" name="login" placeholder="Login">

            <input type="password" name="pass" placeholder="Pass">

            <div class="link_forgot">
                <a href="forgot.php">Forgot your password ?</a>
            </div>

            <div class="group_submit">
                <input type="submit" value="Login">
                <button><a href="register.php">Completer votre compte</a></button>
            </div>

        </form>

        <div class="txt">
            <img src="../images/illustrations/1.png" alt="" class="central">
            <!-- <div class="status"><h2>patient</h2></div> -->
            <img src="../images/illustrations/2.png" alt="" class="petit right">
            <img src="../images/illustrations/4.png" alt="" class="petit third">
        </div>

    </main>

    <footer>
        <?php footer(); ?>
    </footer>


    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/animation.js"></script>

</body>
</html>