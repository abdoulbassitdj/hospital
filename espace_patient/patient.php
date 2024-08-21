<?php

// include "../menu_footer.php";
include "../auto/config.php";
include "../auto/recupBooking.php";
session_start();

$r="SELECT * FROM `booking` WHERE id_patient = $_SESSION[id] ORDER BY `date` DESC";
$books=mysqli_query($con,$r);

$sql="SELECT * FROM `params_vitaux` WHERE id_patient = $_SESSION[id] ORDER BY `date_consult` DESC LIMIT 1";
$params=mysqli_query($con,$sql);
$params = mysqli_fetch_array($params);
// echo $params['date_consult'];
// var_dump($params);

$req = "SELECT docteur.* FROM docteur JOIN patient WHERE docteur.id = patient.id_docteur AND patient.id = $_SESSION[id]";
$result = mysqli_query($con,$req);

?>

<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="../assets/css/list.css">
</head>
<body>
    
    <header>
    </header>

    <main>

        <section class="left items">
            
            <div class="picture">
                <img src="<?php echo $_SESSION['photo'];?>" alt="">
            </div>

            <!-- <div class="group">
                <h2>Abdoul-Bassit Djafarou</h2>
            </div> -->

            <div class="group item" data-service="profile">
                <i class="icofont-ui-user"></i>
                <div>profile</div>
            </div>

            <div class="group item" data-service="dashboard">
                <i class="icofont-dashboard-web"></i>
                <div>dashboard</div>
            </div>

            <div class="group item" data-service="message">
                <i class="icofont-ui-text-chat"></i>
                <div>message</div>
            </div>

            <div class="group item" data-service="rendez-vous">
                <i class="icofont-meeting-add"></i>
                <div>rendez-vous</div>
            </div>

            <div class="group item active" data-service="dossier">
                <i class="icofont-document-folder"></i>
                <div>dossier</div>
            </div>

        </section>

        <section class="bord">

            <div class="profile service" data-service="profile">

                <div class="edit">
                    <h2>Profile</h2>
                    <p><i class="icon-edit" title="Edit Profile"></i><i class="icon-bin" title="Delete Profile"></i></p>
                </div>

                <div class="srvc">
                    <span>nom complet</span>
                    <p><?php echo $_SESSION['nom']; ?></p>
                </div>

                <div class="srvc">
                    <span>age</span>
                    <p><?php echo $_SESSION['age']; ?></p>
                </div>

                <div class="srvc">
                    <span>sexe</span>
                    <p><?php echo $_SESSION['sexe']; ?></p>
                </div>

                <div class="srvc">
                    <span>e-mail</span>
                    <p>abdoulbassitdjafarou@gmail.com</p>
                </div>

                <div class="srvc">
                    <span>Tel</span>
                    <p>+237 <?php echo $_SESSION['tel']; ?></p>
                </div>

                <div class="srvc">
                    <span>addresse</span>
                    <p><?php echo $_SESSION['domicile']; ?></p>
                </div>

            </div>

            <div class="dashboard service" data-service="dashboard">

                <div class="greating">
                    <h2>Salut, <?php echo $_SESSION['nom']?> !</h2>
                    <p>Comment allez vous aujourd'hui ?</p>
                </div>

                <div class="infos your_doc">

                    <p>
                        <span>Votre docteur</span>
                        <?php
                            if (mysqli_num_rows($result) == 0) { echo '<a href="docChoice.php"><i class="icon-plus" title="Ajouter un docteur"></i></a>';}
                        ?>
                    </p>

                    <?php

                        if (mysqli_num_rows($result) > 0) {
                            $doctor = mysqli_fetch_array($result);
                            echo '<div class="info">

                            <img src="'.$doctor['photo'].'" alt="">
    
                            <p>
                                <span>'.$doctor['nom_complet'].'</span>
                                <span class="qualif">'.$doctor['qualif'].'</span>
                            </p>
    
                            <div class="contact_doc">
                                <i class="icon-mail" title="Envoyer un message"></i> <a href="tel:'.$doctor['tel'].'"><i class="icon-phone" title="Appeler"></i></a>
                            </div>
    
                            </div>';

                        } else {
                            echo '<div class="info noDoc">
                            <i class="icofont-warning"></i>
                            <p>Vous n\'avez pas choisis votre docteur. Appuyez sur l\'icone <span>"+"</span> pour choisir.</p>
                            </div>';
                        }

                    ?>

                </div>

                <div class="infos physiological">

                    <p>
                        <span>Infos sommaires</span>
                        <i class="icon-plus" title="Voir plus"></i>
                    </p>

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
                            <span><?php echo $params['groupe_sang'] ?><?php $signe = $params['rhesus'] == "rh+" ? "+" : "-"; echo $signe ?></span>
                        </p>

                    </div>

                </div>

                <div class="greet_infos">

                    <div class="greet_infos_intro">
                        <h2>Vos parametres vitaux</h2>
                        <p>Selon votre derniere visite medical</p>
                    </div>

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
                        <i class="icofont-energy-oil"></i>
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

                </div>

            </div>

            <div class="message service" data-service="message">message</div>

            <div class="rendez-vous service" data-service="rendez-vous">

                <?php

                    if (mysqli_num_rows($result) > 0) { $_SESSION['docId'] = $doctor['id']; ?>

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

                        <input type="submit" value="envoyer">

                        <div class="required"><p>* champs obliguatoires</p></div>

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
                            
                                while ($row = mysqli_fetch_array($books)){
                                    echo "<tr>
                                    <td>$row[id]</td>
                                    <td>$row[date]</td>
                                    <td>$row[heure]</td>
                                    <td>$row[status]</td>
                                    <td><button><a href='cancel.php?id=$row[id]'>annuler</a></button></td>
                                    </tr>";
                                }

                            ?>

                        </table>

                    </div>
                    
                    <?php } else {?>
                        <div class="info noDoc">
                            <i class="icofont-warning"></i>
                            <p>Vous n'avez pas choisis votre docteur. Appuyez sur l'icone <span>"+"</span> pour choisir.</p>
                        </div>
                    <?php }

                ?>

            </div>

            <div class="dossiers service show" data-service="dossier">

                <?php

                    $sql = "SELECT * FROM `consultation` WHERE id_patient = $_SESSION[id] ORDER BY `date_consult` DESC";
                    $consults = mysqli_query($con, $sql);

                    // var_dump($consults);
                    $consults = mysqli_fetch_all($consults, MYSQLI_ASSOC);
                    // var_dump($consults);

                ?>

                <div class="dossierLists">

                    <?php foreach($consults as $key => $value): ?>
                        <div class="dossier" data-service="<?php echo $value['id_consult'] ?>">
                            <i class="icofont-patient-file" title="Cliquer pour ouvrir"></i>
                            <p>Consultation <?php echo $value['id_consult'] ?></p>
                            <?php // var_dump($consult); ?>
                        </div>
                    <?php endforeach; ?>

                    <div class="dossier" data-service="dossier1">
                        <!-- <p>1</p> -->
                        <i class="icofont-patient-file" title="Cliquer pour ouvrir"></i>
                    </div>

                    <div class="dossier" data-service="dossier2">
                        <!-- <p>2</p> -->
                        <i class="icofont-patient-file" title="Cliquer pour ouvrir"></i>
                    </div>

                    <div class="dossier" data-service="dossier3">
                        <!-- <p>3</p> -->
                        <i class="icofont-patient-file" title="Cliquer pour ouvrir"></i>
                    </div>

                    <div class="dossier" data-service="dossier4">
                        <!-- <p>4</p> -->
                        <i class="icofont-patient-file" title="Cliquer pour ouvrir"></i>
                    </div>

                </div>    

                <div class="dossierContents">

                    <?php foreach($consults as $key => $value): ?>
                        <div class="content" data-service="<?php echo $value['id_consult'] ?>">

                            <span class="close icon-cross2"></span>

                            <div class="contentItem">
                                <div class="contentVisible">
                                    <h3>resultat Fetch</h3>
                                    <i class="icon-squared-plus toOpen"></i>
                                    <i class="icon-squared-minus toClose"></i>
                                </div>
                            </div>

                            <div class="contentItem">
                                <div class="contentVisible">
                                    <h3>diagnostique</h3>
                                    <i class="icon-squared-plus toOpen"></i>
                                    <i class="icon-squared-minus toClose"></i>
                                </div>
                                <p>gugu</p>
                            </div>

                            <div class="contentItem">
                                <div class="contentVisible">
                                    <h3>prescription</h3>
                                    <i class="icon-squared-plus toOpen"></i>
                                    <i class="icon-squared-minus toClose"></i>
                                </div>
                            </div>

                            <div class="contentItem">
                                <div class="contentVisible">
                                    <h3>fichiers</h3>
                                    <i class="icon-squared-plus toOpen"></i>
                                    <i class="icon-squared-minus toClose"></i>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>

                    <div class="content cont1" data-service="dossier1">

                        <span class="close icon-cross2"></span>

                        <div class="content-section resultat">
                            <h3>resultats de l'examen</h3>
                            <div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor rem inventore provident quidem commodi minus, odit debitis dolores nobis beatae, officiis fuga officia voluptas aperiam itaque delectus quaerat quis enim?</p>
                            </div>
                        </div>

                        <div class="content-section diagnostic">
                            <h3>diagnostic</h3>
                            <div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor rem inventore provident quidem commodi minus, odit debitis dolores nobis beatae, officiis fuga officia voluptas aperiam itaque delectus quaerat quis enim?</p>
                            </div>
                        </div>

                        <div class="content-section prescription">
                            <h3>prescription</h3>
                            <div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor rem inventore provident quidem commodi minus, odit debitis dolores nobis beatae, officiis fuga officia voluptas aperiam itaque delectus quaerat quis enim?</p>
                            </div>
                        </div>

                        <div class="content-section fichiers">
                            <h3>fichiers</h3>

                            <div class="fichier">
                                <i class="icon-file-text2"></i>
                                <p>resultat_X-ray.pdf</p>
                                <a href="" title="telecharger"><i class="icon-download3"></i></a>
                            </div>

                            <div class="fichier">
                                <i class="icon-file-text2"></i>
                                <p>resultat_test_sang.pdf</p>
                                <a href="" title="telecharger"><i class="icon-download3"></i></a>
                            </div>

                            <div class="fichier">
                                <i class="icon-file-text2"></i>
                                <p>resultat_echographie.pdf</p>
                                <a href="" title="telecharger"><i class="icon-download3"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="content" data-service="dossier2">

                        <span class="close icon-cross2"></span>

                        <div class="contentItem">
                            <div class="contentVisible">
                                <h3>consultation2</h3>
                                <i class="icon-squared-plus toOpen"></i>
                                <i class="icon-squared-minus toClose"></i>
                            </div>
                        </div>

                        <div class="contentItem">
                            <div class="contentVisible">
                                <h3>diagnosis</h3>
                                <i class="icon-squared-plus toOpen"></i>
                                <i class="icon-squared-minus toClose"></i>
                            </div>
                        </div>

                        <div class="contentItem">
                            <div class="contentVisible">
                                <h3>prescription</h3>
                                <i class="icon-squared-plus toOpen"></i>
                                <i class="icon-squared-minus toClose"></i>
                            </div>
                        </div>

                        <div class="contentItem">
                            <div class="contentVisible">
                                <h3>dose</h3>
                                <i class="icon-squared-plus toOpen"></i>
                                <i class="icon-squared-minus toClose"></i>
                            </div>
                        </div>

                    </div>

                    <div class="content" data-service="dossier3">

                        <span class="close icon-cross2"></span>

                        <div class="contentItem">
                            <div class="contentVisible">
                                <h3>consultation3</h3>
                                <i class="icon-squared-plus toOpen"></i>
                                <i class="icon-squared-minus toClose"></i>
                            </div>
                        </div>

                        <div class="contentItem">
                            <div class="contentVisible">
                                <h3>diagnosis</h3>
                                <i class="icon-squared-plus toOpen"></i>
                                <i class="icon-squared-minus toClose"></i>
                            </div>
                        </div>

                        <div class="contentItem">
                            <div class="contentVisible">
                                <h3>prescription</h3>
                                <i class="icon-squared-plus toOpen"></i>
                                <i class="icon-squared-minus toClose"></i>
                            </div>
                        </div>

                        <div class="contentItem">
                            <div class="contentVisible">
                                <h3>dose</h3>
                                <i class="icon-squared-plus toOpen"></i>
                                <i class="icon-squared-minus toClose"></i>
                            </div>
                        </div>

                    </div>

                    <div class="content" data-service="dossier4">

                        <span class="close icon-cross2"></span>

                        <div class="contentItem">
                            <div class="contentVisible">
                                <h3>consultation4</h3>
                                <i class="icon-squared-plus toOpen"></i>
                                <i class="icon-squared-minus toClose"></i>
                            </div>
                        </div>

                        <div class="contentItem">
                            <div class="contentVisible">
                                <h3>diagnosis</h3>
                                <i class="icon-squared-plus toOpen"></i>
                                <i class="icon-squared-minus toClose"></i>
                            </div>
                        </div>

                        <div class="contentItem">
                            <div class="contentVisible">
                                <h3>prescription</h3>
                                <i class="icon-squared-plus toOpen"></i>
                                <i class="icon-squared-minus toClose"></i>
                            </div>
                        </div>

                        <div class="contentItem">
                            <div class="contentVisible">
                                <h3>dose</h3>
                                <i class="icon-squared-plus toOpen"></i>
                                <i class="icon-squared-minus toClose"></i>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </section>

    </main>

    <footer>
       
    </footer>


    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/animation.js"></script>
    <script src="../assets/js/list.js"></script>

</body>
</html>