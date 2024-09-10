<?php

session_start();
require_once "../auto/session-verif.php";

// include "../menu_footer.php";
require_once "../auto/config.php";
require_once "../auto/recupBooking.php";
require_once "../auto/recup_consult.php";
// include "../auto/onglet.php";

$r = "SELECT * FROM `booking` WHERE id_patient = $_SESSION[id] ORDER BY `date` DESC";
$books = mysqli_query($con, $r);

$sql = "SELECT * FROM `params_vitaux` WHERE id_patient = $_SESSION[id] ORDER BY `date_consult` DESC LIMIT 1";
$params = mysqli_query($con, $sql);
$params = mysqli_fetch_array($params);
// echo $params['date_consult'];
// var_dump($params);

$req = "SELECT docteur.* FROM docteur JOIN patient WHERE docteur.id = patient.id_docteur AND patient.id = $_SESSION[id]";
$result = mysqli_query($con, $req);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Patient</title>
    <!-- <link rel="stylesheet" href="../assets/css/menu.css"> -->
    <!-- <link rel="stylesheet" href="../assets/css/footer.css"> -->
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../fonts/icofont/icofont.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="mobile.css">
    <link rel="stylesheet" href="../assets/css/list.css">
</head>

<body>

    <nav>
        <div class="open_nav">
            <i class="icon-menu"></i>
        </div>
    </nav>

    <main>

        <section class="left items">

            <div class="close_nav">
                <i class="icon-cross"></i>
            </div>

            <div class="picture">
                <img src="<?php echo $_SESSION['photo']; ?>" alt="">
            </div>

            <div class="group nom">
                <p><?php echo $_SESSION['nom']; ?></p>
            </div>

            <div class="group item" data-service="dashboard">
                <i class="icofont-dashboard-web"></i>
                <div>dashboard</div>
            </div>

            <div class="group item active" data-service="dossier">
                <i class="icofont-prescription"></i>
                <div>dossier</div>
            </div>

            <div class="group item" data-service="rendez-vous">
                <i class="icofont-meeting-add"></i>
                <div>rendez-vous</div>
            </div>

            <div class="group item" data-service="profile">
                <i class="icofont-ui-user"></i>
                <div>profile</div>
            </div>

            <div class="group item logout" data-service="">
                <i class="icon-log-out"></i>
                <a href="connect.php?message=3">logout</a>
            </div>

        </section>

        <section class="bord">

            <div class="dashboard service" data-service="dashboard">

                <div class="greating">
                    <h2>Salut, <?php echo $_SESSION['nom'] ?> !</h2>
                    <p>Comment allez vous aujourd'hui ?</p>
                </div>

                <div class="infos your_doc">

                    <p>
                        <span>Votre docteur</span>
                        <?php
                        if (mysqli_num_rows($result) == 0) {
                            echo '<a href="docChoice.php"><i class="icon-plus" title="Ajouter un docteur"></i></a>';
                        }
                        ?>
                    </p>

                    <?php if (mysqli_num_rows($result) > 0) : $doctor = mysqli_fetch_array($result); ?>

                        <div class="info">

                            <img src="<?php echo $doctor['photo'] ?>" alt="">

                            <p>
                                <span><?php echo $doctor['nom_complet'] ?></span>
                                <span class="qualif"><?php echo $doctor['qualif'] ?></span>
                            </p>

                            <div class="contact_doc">
                                <a href="tel:<?php echo $doctor['tel'] ?>">
                                    <i class="icon-phone" title="Appeler"></i>
                                </a>
                                <a href="mailto:N/A">
                                    <i class="icon-mail" title="Envoyer un message"></i>
                                </a>
                            </div>

                        </div>

                    <?php else: ?>

                        <div class="info noDoc">
                            <i class="icofont-warning"></i>
                            <p>Vous n'avez pas choisis votre docteur. Appuyez sur l'icone <span>"+"</span> pour choisir.</p>
                        </div>

                    <?php endif; ?>

                </div>

                <div class="infos physiological">

                    <p>
                        <span>Infos sommaires</span>
                        <!-- <i class="icon-plus" title="Voir plus"></i> -->
                    </p>

                    <?php if ($params) : ?>

                        <div class="info">

                            <p>
                                <span>Poids</span>
                                <span><?php echo $params['poids'] ?> kg</span>
                            </p>

                            <p>
                                <span>Taille</span>
                                <span><?php echo $params['taille'] ?> m</span>
                            </p>

                            <p>
                                <span>Groupe sanguin</span>
                                <span><?php echo $params['groupe_sang'] ?><?php $signe = $params['rhesus'] == "rh+" ? "+" : "-";
                                                                            echo $signe ?></span>
                            </p>

                        </div>

                    <?php endif; ?>

                </div>

                <div class="greet_infos">

                    <div class="greet_infos_intro">
                        <h2>Vos parametres vitaux</h2>
                        <p>Selon votre derniere visite medical</p>
                    </div>

                    <?php if ($params) : ?>

                        <div>
                            <i class="icofont-blood-drop"></i>
                            <h3 title="tension arterielle">pression arterielle</h3>
                            <p><?php echo $params['p_systolique'] ?> / <?php echo $params['p_diastolique'] ?> mmHg</p>
                        </div>

                        <div>
                            <i class="icofont-fast-food"></i>
                            <h3>taux de sucre</h3>
                            <p><?php echo $params['taux_sucre'] ?> mg/l</p>
                        </div>

                        <div>
                            <i class="icofont-snow-temp"></i>
                            <h3>temperature</h3>
                            <p><?php echo $params['temperature'] ?>&deg; C</p>
                        </div>

                        <div>
                            <i class="icofont-heartbeat"></i>
                            <h3>ECG cardiaque</h3>
                            <p><?php echo $params['ecg'] ?> bmps</p>
                        </div>

                        <div>
                            <i class="icofont-heart-beat-alt"></i>
                            <h3>pouls</h3>
                            <p><?php echo $params['pouls'] ?> bpm</p>
                        </div>

                        <div>
                            <i class="icofont-lungs"></i>
                            <h3>freq respiratoire</h3>
                            <p><?php echo $params['frequence'] ?> cpm</p>
                        </div>

                        <div>
                            <i class="icofont-stethoscope-alt"></i>
                            <h3>taux de cholesterol</h3>
                            <p><?php echo $params['cholesterol'] ?> bmps</p>
                        </div>

                        <div>
                            <i class="icofont-heart-beat-alt"></i>
                            <h3>debit cardiaque</h3>
                            <p><?php echo $params['debit'] ?> bmps</p>
                        </div>

                    
                    <?php else : ?>

                        <div class="info noDoc">
                            <i class="icofont-warning"></i>
                            <p>Rien a afficher. Prenez un rendez-vous pour vous faire examiner.</p>
                        </div>

                    <?php endif; ?>

                </div>

            </div>

            <div class="dossiers service show" data-service="dossier">

                <div class="dossierLists">

                    <h2>Consultez vos dossiers medicaux</h2>
                    <p>Cliquez sur <i class="icon-dots-three-vertical"></i> pour ouvrir un dossier</p>

                    <?php if ($consults) : ?>

                        <?php foreach ($consults as $key => $value): ?>

                            <?php
                            $datetime = new DateTime($value['date_consult']);
                            $date = $datetime->format('d-m-Y');

                            $fichiers = [basename($value['fichier1']), basename($value['fichier2']), basename($value['fichier3'])];
                            $n_fichiers = 0;
                            foreach ($fichiers as $fichier) {
                                if (!($fichier == "fichiers")) {
                                    $n_fichiers += 1;
                                }
                            }
                            ?>

                            <div class="dossier">
                                <i class="icon-dots-three-vertical open_dossier" data-service="<?php echo $value['id_consult'] ?>" title="Cliquer pour ouvrir"></i>
                                <i class="icofont-patient-file" title="Cliquer pour ouvrir"></i>
                                <p>Consultation <?php echo $value['id_consult'] ?></p>
                                <div class="det"><i class="icon-calendar"></i><span><?php echo $date ?></span></div>
                                <div class="det"><i class="icon-files-empty"></i><span><?php echo $n_fichiers; ?> fichiers</span></div>
                            </div>

                        <?php endforeach; ?>

                    <?php else : ?>

                        <div class="info noDoc">
                            <i class="icofont-warning"></i>
                            <p>Rien a afficher. Prenez un rendez-vous pour vous faire examiner.</p>
                        </div>

                    <?php endif; ?>

                </div>

                <div class="dossierContents">

                    <?php foreach ($consults as $key => $value): ?>

                        <?php

                        $datetime = new DateTime($value['date_consult']);
                        $date = $datetime->format('d-m-Y | H:i:s');

                        ?>

                        <div class="content" data-service="<?php echo $value['id_consult'] ?>">

                            <h2>Dossier medicale de consultation</h2>
                            <span class="close icon-cross2"></span>

                            <div class="content-section details">
                                <h3>details de la consultation</h3>
                                <div>
                                    <p>patient : <?php echo $_SESSION["nom"]; ?></p>
                                </div>
                                <div>
                                    <p>votre docteur : <?php echo $doctor['nom_complet']; ?></p>
                                </div>
                                <div>
                                    <p>N° consultation : <?php echo sizeof($consults) - $key; ?></p>
                                </div>
                                <div>
                                    <p>id consultation : <?php echo $value['id_consult']; ?></p>
                                </div>
                                <div>
                                    <p>date consultation : <?php echo $date ?></p>
                                </div>
                                <div class="swip" title="Coming soon ! Please be patient.">
                                    <button><i class="icon-chevron-left"></i> precedent</button>
                                    <button>suivant <i class="icon-chevron-right"></i></button>
                                </div>
                            </div>

                            <div class="content-section resultat">
                                <h3>resultats de l'examen</h3>
                                <div>
                                    <p><?php echo $value['resultat'] ?></p>
                                </div>
                            </div>

                            <div class="content-section diagnostic">
                                <h3>diagnostic</h3>
                                <div>
                                    <p><?php echo $value['diagnostique'] ?></p>
                                </div>
                            </div>

                            <div class="content-section prescription">
                                <h3>prescription</h3>
                                <div>
                                    <p><?php echo $value['prescription'] ?></p>
                                </div>
                            </div>

                            <div class="content-section fichiers">

                                <h3>fichiers</h3>

                                <?php
                                $fichiers = [basename($value['fichier1']), basename($value['fichier2']), basename($value['fichier3'])];
                                ?>

                                <?php $i = 0; ?>

                                <?php foreach ($fichiers as $fichier) : ?>

                                    <?php if (!($fichier == "fichiers")): ?>

                                        <div class="fichier">
                                            <i class="icon-file-text2"></i>
                                            <p><?php echo $fichier; ?></p>
                                            <a href="../fichiers/<?php echo $fichier; ?>" title="telecharger"><i class="icon-arrow-with-circle-down"></i></a>
                                        </div>

                                    <?php $i++;
                                    endif; ?>

                                <?php endforeach; ?>

                                <?php if (!($i)) : ?>
                                    <div class="fichier absent">
                                        <i class="icofont-exclamation-tringle"></i>
                                        <p>aucun fichier attache</p>
                                    </div>
                                <?php endif ?>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

            <div class="rendez-vous service" data-service="rendez-vous">

                <?php

                if (mysqli_num_rows($result) > 0) {
                    $_SESSION['docId'] = $doctor['id']; ?>

                    <form action="appointment.php" method="post">

                        <h2>prendre un nouveau rendez-vous</h2>

                        <div class="appoint_info">
                            <label for="nom">votre nom</label>
                            <input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>" readonly>
                        </div>

                        <div class="appoint_info">
                            <label for="nom">votre addresse</label>
                            <input type="text" name="addresse" value="<?php echo $_SESSION['domicile']; ?>" readonly>
                        </div>

                        <div class="appoint_info">
                            <label for="nom">votre docteur</label>
                            <input type="text" name="doctor" value="<?php echo $doctor['nom_complet'] ?>" readonly>
                        </div>

                        <div class="appoint_info">
                            <label for="nom">date <span class="required">*</span> </label>
                            <input type="date" name="date">
                        </div>

                        <div class="appoint_info">
                            <label for="nom">heure <span class="required">*</span> </label>
                            <input type="time" name="time">
                        </div>

                        <input type="submit" value="valider la reservation">
                        <!-- <input type="cancel" value="reserver"> -->

                        <div class="required">
                            <p>* champs obliguatoires</p>
                        </div>

                    </form>

                    <div class="rdv_hystory">

                        <h2>historique de vos rendez-vous</h2>

                        <table cellspacing='0'>

                            <tr>
                                <td>id</td>
                                <td>Date</td>
                                <td>Heure</td>
                                <td>Status</td>
                                <td>Annuler</td>
                            </tr>

                            <?php

                            while ($row = mysqli_fetch_array($books)): ?>
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
                                    <td><?php echo $row['heure'] ?></td>
                                    <td><?php echo $row['status'] ?></td>
                                    <td><button><a href='cancel.php?id=<?php echo $row['id'] ?>' disabled>annuler</a></button></td>
                                </tr>
                            <?php endwhile; ?>

                        </table>

                    </div>

                <?php } else { ?>
                    <div class="info noDoc">
                        <i class="icofont-warning"></i>
                        <p>Vous n'avez pas choisis votre docteur. Appuyez sur l'icone <span>"+"</span> pour choisir.</p>
                    </div>
                <?php }

                ?>

            </div>

            <div class="profile service" data-service="profile">

                <div class="conteneur">

                    <div class="section1">
                        <img src="<?php echo $_SESSION['photo']; ?>" alt="">
                        <p><?php echo $_SESSION['nom']; ?></p>
                        <p><?php echo $_SESSION['email']; ?></p>
                        <button class="edit_profile"><a href="#formulaire">editer votre profile</a></button>
                    </div>

                    <div class="section2">

                        <div>
                            <p>nom</p>
                            <p><?php echo $_SESSION['nom']; ?></p>
                        </div>

                        <div>
                            <p>sexe</p>
                            <p><?php echo $_SESSION['sexe']; ?></p>
                        </div>

                        <div>
                            <p>age</p>
                            <p><?php echo $_SESSION['date']; ?></p>
                        </div>

                        <div>
                            <p>telephone</p>
                            <p><?php echo $_SESSION['tel']; ?></p>
                        </div>

                        <div>
                            <p>adresse email</p>
                            <p class="email"><?php echo $_SESSION['email']; ?></p>
                        </div>

                        <div>
                            <p>domicile</p>
                            <p><?php echo $_SESSION['domicile']; ?></p>
                        </div>

                    </div>

                </div>

                <div class="formulaire" id="formulaire">
                    <p>Lorem ipsum dolor sit amet.</p>
                    <form action="update.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="nom" placeholder="Nom complet" value="<?php echo $_SESSION['nom']; ?>">
                        <select name="sexe" id="">
                            <option value="feminin" <?php if ($_SESSION['sexe'] == 'feminin') {
                                                        echo 'selected';
                                                    } ?>>Feminin</option>
                            <option value="masculin" <?php if ($_SESSION['sexe'] == 'masculin') {
                                                            echo 'selected';
                                                        } ?>>Masculin</option>
                        </select>
                        <input type="date" name="date" placeholder="Date de naissance" value="<?php echo $_SESSION['date']; ?>">
                        <input type="text" name="adresse" placeholder="Adresse" value="<?php echo $_SESSION['domicile']; ?>">
                        <input type="number" name="tel" placeholder="Telephone" value="<?php echo $_SESSION['tel']; ?>">
                        <input type="text" name="email" placeholder="Email" value="<?php echo $_SESSION['email']; ?>">
                        <input type="text" name="username" placeholder="Nom d'utilisateur" value="<?php echo $_SESSION['login']; ?>">
                        <input type="password" name="current_pass" placeholder="Entrez votre mot de passe actuel" value="">
                        <input type="password" name="pass" placeholder="Entrez le nouveau mot de passe" value="">
                        <input type="password" name="cpass" placeholder="confirmez le nouveau mot de passe" value="">
                        <input type="file" name="photo" value="<?php echo $_SESSION['photo']; ?>">
                        <div class="validation">
                            <input type="submit" value="mettre a jour">
                            <input type="reset" value="annuler">
                        </div>
                    </form>
                </div>

            </div>

        </section>

    </main>

    <footer>

    </footer>

    <script src="scripts.js"></script>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/animation.js"></script>
    <script src="../assets/js/list.js"></script>
    <script src="../assets/js/nav.js"></script>

</body>

</html>