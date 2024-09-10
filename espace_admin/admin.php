<?php

session_start();

require_once("../auto/recupDocteurs.php");
require_once("../auto/recupReceptionist.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Administrateur</title>
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../fonts/icofont/icofont.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="calendar.css">
    <link rel="stylesheet" href="../assets/css/list2.css">
</head>

<body>

    <header></header>

    <main>

        <aside class="items">

            <div class="group">
                <img src="<?php echo $_SESSION['photo'] ?>" alt="">
                <p class="name"><?php echo $_SESSION['nom'] ?></p>
                <p>Administrator</p>
            </div>

            <div class="group item active" data-service="overview">
                <p><i class="icofont-chart-bar-graph"></i> overview</p>
            </div>

            <div class="group item" data-service="docteurs">
                <p><i class="icofont-ui-calendar"></i> docteurs</p>
            </div>

            <div class="group item" data-service="receptionnistes">
                <p><i class="icofont-ui-calendar"></i> receptionnistes</p>
            </div>


        </aside>

        <section class="service overview show" data-service="overview">

            <div class="greeting dev">
                <h2 class="name">EN COURS DE DEVELOPPEMENT !</span></h2>
            </div>

            <div class="greeting">
                <div>
                    <h2 class="name">Hello, <span><?php echo $_SESSION['nom'] ?> !</span></h2>
                    <p>Bon retour parmi nous. Nous sommes ravis de vous aider a vous occuper de l'hopital.</p>
                    <button><a href="profile.php">votre profile</a></button>
                </div>
                <div><img src="../images/doctors/doctor_cartoon.png" alt=""></div>
            </div>

            <div class="infos">

                <div class="info">
                    <i class="icofont-stethoscope-alt"></i>
                    <div>
                        <p>Nombre des patients</p>
                        <span>N/A</span>
                    </div>
                </div>

                <div class="info attente">
                    <i class="icofont-clock-time"></i>
                    <div>
                        <p>Rendez-vous en attente</p>
                        <span>N/A</span>
                    </div>
                </div>

                <div class="info">
                    <i class="icofont-meeting-add"></i>
                    <div>
                        <p>Tous les rendez-vous</p>
                        <span>N/A</span>
                    </div>
                </div>

                <div class="info">
                    <i class="icofont-stethoscope"></i>
                    <div>
                        <p>Nombre des patients</p>
                        <span>N/A</span>
                    </div>
                </div>

                <!-- <div class="info"></div>
                <div class="info"></div> -->
            </div>

        </section>

        <section class="service personnel" data-service="docteurs">

            <h4><span>N/A</span>Docteurs sont actifs</h4>

            <div class="add_doc">
                <div>
                    <div>
                        <h2>Ajoutez Un Docteur</h2>
                        <p>Les docteurs sont l'ames d'un hopital</p>
                    </div>
                    <a href="#list_doc"><i class="icofont-curved-down" title="liste des docteurs"></i></a>
                </div>
                <form action="add.php" method="post">
                    <input type="text" name="nom" placeholder="nom du docteur">
                    <input type="text" name="matricule" placeholder="matricule du docteur">
                    <input type="text" name="qualif" placeholder="qualification du docteur">
                    <div class="addingbtn">
                        <input type="submit" value="Ajouter">
                        <input type="reset" value="Annuler">
                    </div>
                </form>
            </div>

            <div class="employes" id="list_doc">

                <?php $doctors = mysqli_fetch_all($doctors, MYSQLI_ASSOC); ?>

                <?php foreach ($doctors as $doctor) : ?>

                    <div class="employe">
                        <img src="<?php echo $doctor['photo']; ?>" alt="">
                        <p class="purchaser"><strong><?php echo $doctor['nom_complet']; ?></strong></p>
                        <p>specialite: <strong><?php echo $doctor['qualif']; ?></strong></p>
                        <p>matricule: <strong><?php echo $doctor['matricule']; ?></strong></p>
                        <div class="acceptation">
                            <a href="acceptation.php?id=<?php echo $doctor['id']; ?>" class="decline">Supprimer</a>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>

        </section>

        <section class="service personnel" data-service="receptionnistes">

            <h4><span>6</span>Receptionnistes sont actifs</h4>

            <div class="add_doc">
                <div>
                    <div>
                        <h2>Ajoutez Un Receptionniste</h2>
                        <p>Les Receptionnistes sont le point de contact avec vos patients</p>
                    </div>
                    <a href="#list_doc"><i class="icofont-curved-down" title="liste des Receptionnistes"></i></a>
                </div>
                <form action="addR.php" method="post">
                    <input type="text" name="nom" placeholder="nom du Receptionniste">
                    <input type="text" name="matricule" placeholder="matricule du Receptionniste">
                    <input type="text" name="poste" placeholder="poste du Receptionniste">
                    <div class="addingbtn">
                        <input type="submit" value="Ajouter">
                        <input type="reset" value="Annuler">
                    </div>
                </form>
            </div>

            <div class="employes" id="list_doc">

                <?php $receptionistes = mysqli_fetch_all($receptionistes, MYSQLI_ASSOC); ?>

                <?php foreach ($receptionistes as $receptioniste) : ?>

                    <div class="employe">
                        <img src="<?php echo $receptioniste['photo']; ?>" alt="">
                        <p class="purchaser"><strong><?php echo $receptioniste['nom_complet']; ?></strong></p>
                        <p>specialite: <strong><?php echo $receptioniste['qualif']; ?></strong></p>
                        <p>matricule: <strong><?php echo $receptioniste['matricule']; ?></strong></p>
                        <div class="acceptation">
                            <a href="acceptation.php?id=<?php echo $receptioniste['id']; ?>" class="decline">Supprimer</a>
                        </div>
                    </div>

                <?php endforeach; ?>

                <div class="employe">

                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser"><strong>Sophie Bergham</strong></p>
                    <p>specialite: <strong>Gynecolgue</strong></p>
                    <p>patients: <strong>18</strong></p>
                    <div class="acceptation">

                        <a href="acceptation.php?status=declined" class="decline">Supprimer</a>
                    </div>
                </div>

                <div class="employe">

                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser"><strong>Sophie Bergham</strong></p>
                    <p>specialite: <strong>Gynecolgue</strong></p>
                    <p>patients: <strong>18</strong></p>
                    <div class="acceptation">

                        <a href="acceptation.php?status=declined" class="decline">Supprimer</a>
                    </div>
                </div>

                <div class="employe">

                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser"><strong>Sophie Bergham</strong></p>
                    <p>specialite: <strong>Gynecolgue</strong></p>
                    <p>patients: <strong>18</strong></p>
                    <div class="acceptation">

                        <a href="acceptation.php?status=declined" class="decline">Supprimer</a>
                    </div>
                </div>

                <div class="employe">

                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser"><strong>Sophie Bergham</strong></p>
                    <p>specialite: <strong>Gynecolgue</strong></p>
                    <p>patients: <strong>18</strong></p>
                    <div class="acceptation">

                        <a href="acceptation.php?status=declined" class="decline">Supprimer</a>
                    </div>
                </div>
                <div class="employe">

                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser"><strong>Sophie Bergham</strong></p>
                    <p>specialite: <strong>Gynecolgue</strong></p>
                    <p>patients: <strong>18</strong></p>
                    <div class="acceptation">

                        <a href="acceptation.php?status=declined" class="decline">Supprimer</a>
                    </div>
                </div>

                <div class="employe">

                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser"><strong>Sophie Bergham</strong></p>
                    <p>specialite: <strong>Gynecolgue</strong></p>
                    <p>patients: <strong>18</strong></p>
                    <div class="acceptation">

                        <a href="acceptation.php?status=declined" class="decline">Supprimer</a>
                    </div>
                </div>

                <div class="employe">

                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser"><strong>Sophie Bergham</strong></p>
                    <p>specialite: <strong>Gynecolgue</strong></p>
                    <p>patients: <strong>18</strong></p>
                    <div class="acceptation">

                        <a href="acceptation.php?status=declined" class="decline">Supprimer</a>
                    </div>
                </div>

                <div class="employe">

                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser"><strong>Sophie Bergham</strong></p>
                    <p>specialite: <strong>Gynecolgue</strong></p>
                    <p>patients: <strong>18</strong></p>
                    <div class="acceptation">

                        <a href="acceptation.php?status=declined" class="decline">Supprimer</a>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <footer></footer>

    <script src="../assets/js/animation.js"></script>
    <script src="../assets/js/list2.js"></script>
    <script src="calendar.js"></script>
    <script src="script.js"></script>
</body>

</html>