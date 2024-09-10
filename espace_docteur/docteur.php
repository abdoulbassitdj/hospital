<?php

session_start();
require_once "../auto/session-verif.php";

include "../auto/config.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Docteur</title>
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../fonts/icofont/icofont.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="calendar.css">
    <link rel="stylesheet" href="../assets/css/list2.css">
</head>
<body>

    <main>

        <aside class="items">

            <div class="group">
                <img src="../images/doctors/doctor4.jpg" alt="">
                <p class="nomD">Dr. <?php echo $_SESSION['nom']; ?></p>
                <p><?php echo $_SESSION['qualif']; ?></p>
            </div>

            <div class="group item active" data-service="overview">
                <p><i class="icofont-chart-bar-graph"></i> overview</p>
            </div>

            <div class="group item" data-service="rendez_vous">
                <p><i class="icofont-ui-calendar"></i> rendez-vous</p>
            </div>

            <div class="group item" data-service="patients">
                <p><i class="icofont-crutch"></i> patients</p>
            </div>

            <div class="group item logout" data-service="">
                <i class="icon-log-out"></i>
                <a href="connect.php?message=3">logout</a>
            </div>
            
        </aside>

        <section class="service overview show" data-service="overview">
        
            <div class="greeting">
                <div>
                    <h2>Hello, <span>Dr <?php echo $_SESSION['nom']; ?> !</span></h2>
                    <p>Bon retour parmi nous. Nous sommes ravis de vous aider a vous occuper de vos patients.</p>
                    <button><a href="profile.php">votre profile</a></button>
                </div>
                <div><img src="../images/illustrations/illustration1.png" alt=""></div>
            </div>

            <div class="infos">

                <?php
                    $req="SELECT COUNT(*) AS pNum FROM `patient` WHERE id_docteur = $_SESSION[id]";
                    $result=mysqli_query($con,$req);
                    $patient_number = mysqli_fetch_array($result);
                ?>

                <div class="info">
                    <i class="icofont-stethoscope-alt"></i>
                    <div>
                        <p>Nombre des patients</p>
                        <span><?php echo $patient_number[0]; ?></span>
                    </div>
                </div>

                <?php
                    $req="SELECT COUNT(*) AS rdv FROM `booking` INNER JOIN `patient` WHERE booking.id_docteur = $_SESSION[id] AND patient.id = booking.id_patient AND status = 'attente'";
                    $result=mysqli_query($con,$req);
                    $rdv_await = mysqli_fetch_array($result);
                    //$attente = $rdv_number[0];
                ?>

                <div class="info attente">
                    <i class="icofont-clock-time"></i>
                    <div>
                        <p>Rendez-vous en attente</p>
                        <span><?php echo $rdv_await[0]; ?></span>
                    </div>
                </div>

                <?php
                    $req="SELECT COUNT(*) AS rdv FROM `booking`,`patient` WHERE booking.id_docteur = $_SESSION[id] AND patient.id = booking.id_patient  AND status = 'accepté'";
                    $result=mysqli_query($con,$req);
                    $rdv_accepted = mysqli_fetch_array($result);
                    //$attente = $rdv_number[0];
                ?>

                <div class="info">
                    <i class="icofont-meeting-add"></i>
                    <div>
                        <p>Rendez-vous acceptés</p>
                        <span><?php echo $rdv_accepted[0]; ?></span>
                    </div>
                </div>

                <?php
                    $req="SELECT COUNT(*) AS rdv FROM `booking`,`patient` WHERE booking.id_docteur = $_SESSION[id] AND patient.id = booking.id_patient AND status = 'refusé'";
                    $result=mysqli_query($con,$req);
                    $rdv_refused = mysqli_fetch_array($result);
                ?>

                <?php
                    $req="SELECT COUNT(*) AS rdv FROM `booking`,`patient` WHERE booking.id_docteur = $_SESSION[id] AND patient.id = booking.id_patient AND status = 'annulé'";
                    $result=mysqli_query($con,$req);
                    $rdv_canceled = mysqli_fetch_array($result);
                ?>

                <div class="info">
                    <i class="icofont-stethoscope"></i>
                    <div>
                        <p>Rendez vous refuses</p>
                        <span><?php echo $rdv_refused[0]; ?></span>
                    </div>
                </div>

                <!-- <div class="info"></div>
                <div class="info"></div> -->
            </div>

            <div class="timing">

                <div class="timing_calendar">
                    <div class="calendar">
                            <!-- <div class="month">
                                <i class="icon-chevron-thin-left prev"></i>
                                <div class="date">
                                    <h1></h1>
                                    <p></p>
                                </div>
                                <i class="icon-chevron-thin-right next"></i>
                            </div> -->
                            <div class="weekdays">
                                <div>Lun</div>
                                <div>Mar</div>
                                <div>Mer</div>
                                <div>Jeu</div>
                                <div>Ven</div>
                                <div>Sam</div>
                                <div>Dim</div>
                            </div>
                            <div class="days">
                            </div>
                        </div>
                </div>

                <div class="programme">

                    <div class="month">
                        <i class="icon-chevron-thin-left prev"></i>
                        <div class="date">
                            <h1></h1>
                            <p></p>
                        </div>
                        <i class="icon-chevron-thin-right next"></i>
                    </div>

                    <div class="monthRdv">
                        <h2>programme du jour</h2>
                        <div class="rdvList">
                            <ul>
                                <li>Amra <span>16h00 - 17h30</span></li>
                                <li>Ali Abdalla <span>01h00 - 02h30</span></li>
                                <li>Sara Sophia <span>20h00 - 22h00</span></li>
                                <li>Amra <span>toute la journee</span></li>
                                <li>Ali Abdalla <span>16h00 - 17h30</span></li>
                                <li>Sara Sophia <span>16h00 - 17h30</span></li>
                                <li>Amra <span>16h00 - 17h30</span></li>
                                <li>Ali Abdalla <span>16h00 - 17h30</span></li>
                                <li>Sara Sophia <span>16h00 - 17h30</span></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section class="service rendez_vous" data-service="rendez_vous">

            <h4><span><?php echo $rdv_await[0]; ?></span>Rendez-vous en attente d'approbation</h4>

            <div class="rendez_vous_container">

                <?php
                    $req="SELECT  booking.*, patient.nom_complet, patient.photo, patient.id AS patient FROM `booking`,`patient`,`docteur` WHERE booking.id_patient = patient.id AND booking.id_docteur = patient.id_docteur AND booking.id_docteur = docteur.id AND booking.id_docteur = $_SESSION[id] AND status = 'attente'";
                    $result=mysqli_query($con,$req);

                    if (mysqli_num_rows($result) > 0) {
                        while ($booking = mysqli_fetch_array($result)){
                            echo '<div class="rdv">
                            
                            <p class="purchaser"><strong>'.$booking['nom_complet'].'</strong></p>
                            <p>Date : <strong>'.$booking['date'].'</strong></p>
                            <p>Heure : <strong>'.$booking['heure'].'</strong></p>
                            <div class="acceptation">
                                <a href="acceptation.php?id='.$booking['id'].'&action=accepté" class="approve">Accepter</a>
                                <a href="acceptation.php?id='.$booking['id'].'&action=refusé" class="decline">Decliner</a>
                            </div>
                            </div>';
                        }
                    } else {?>
                        <div class="info noDoc">
                            <i class="icofont-warning"></i>
                            <p>Rien a afficher pour le moment.</p>
                        </div>
                    <?php }

                ?>

                </div>
            </div>

            <h4><span><?php echo $rdv_accepted[0]; ?></span>Rendez-vous acceptés</h4>

            <div class="rendez_vous_container">


                <?php
                    $req="SELECT  booking.*, patient.nom_complet, patient.photo,  patient.id AS patient FROM `booking`,`patient`, `docteur` WHERE booking.id_patient = patient.id AND booking.id_docteur = patient.id_docteur AND booking.id_docteur = docteur.id AND booking.id_docteur = $_SESSION[id] AND status = 'accepté'";
                    $result=mysqli_query($con,$req);

                    if (mysqli_num_rows($result) > 0) {
                        while ($booking = mysqli_fetch_array($result)){
                            echo '<div class="rdv accepted">
                            <p class="purchaser"><strong>'.$booking['nom_complet'].'</strong></p>
                            <p>Date : <strong>'.$booking['date'].'</strong></p>
                            <p>Heure : <strong>'.$booking['heure'].'</strong></p>
                            <div class="acceptation">
                                <a href="acceptation.php?id='.$booking['id'].'&action=annulé" class="decline">Annuler</a>
                            </div>
                            </div>';
                        }
                    } else {?>
                        <div class="info noDoc">
                            <i class="icofont-warning"></i>
                            <p>Rien a afficher pour le moment.</p>
                        </div>
                    <?php }

                ?>
            </div>

            <h4><span><?php echo $rdv_refused[0]; ?></span>Rendez-vous refusés</h4>

            <div class="rendez_vous_container">

                <?php
                    $req="SELECT  booking.*, patient.nom_complet, patient.photo,  patient.id AS patient FROM `booking`,`patient`, `docteur` WHERE booking.id_patient = patient.id AND booking.id_docteur = patient.id_docteur AND booking.id_docteur = docteur.id AND booking.id_docteur = $_SESSION[id] AND status = 'refusé'";
                    $result=mysqli_query($con,$req);

                    if (mysqli_num_rows($result) > 0) {
                        while ($booking = mysqli_fetch_array($result)){
                            echo '<div class="rdv annuled">
                            <p class="purchaser"><strong>'.$booking['nom_complet'].'</strong></p>
                            <p>Date : <strong>'.$booking['date'].'</strong></p>
                            <p>Heure : <strong>'.$booking['heure'].'</strong></p>
                            <div class="acceptation">
                                <div class="decline">Refusés</div>
                            </div>
                            </div>';
                        }
                    } else {?>
                        <div class="info noDoc">
                            <i class="icofont-warning"></i>
                            <p>Rien a afficher pour le moment.</p>
                        </div>
                    <?php }

                ?>

            </div>

            <h4><span><?php echo $rdv_canceled[0]; ?></span>Rendez-vous annulés</h4>

            <div class="rendez_vous_container">

                <?php
                    $req="SELECT  booking.*, patient.nom_complet, patient.photo,  patient.id AS patient FROM `booking`,`patient`, `docteur` WHERE booking.id_patient = patient.id AND booking.id_docteur = patient.id_docteur AND booking.id_docteur = docteur.id AND booking.id_docteur = $_SESSION[id] AND status = 'annulé'";
                    $result=mysqli_query($con,$req);

                    if (mysqli_num_rows($result) > 0) {
                        while ($booking = mysqli_fetch_array($result)){
                            echo '<div class="rdv annuled">
                            <p class="purchaser"><strong>'.$booking['nom_complet'].'</strong></p>
                            <p>Date : <strong>'.$booking['date'].'</strong></p>
                            <p>Heure : <strong>'.$booking['heure'].'</strong></p>
                            <div class="acceptation">
                                <div class="decline">Annulés</div>
                            </div>
                            </div>';
                        }
                    } else {?>
                        <div class="info noDoc">
                            <i class="icofont-warning"></i>
                            <p>Rien a afficher pour le moment.</p>
                        </div>
                    <?php }
                ?>

            </div>

            <div class="appointPlan">

                <div class="calendrier">
                    <div class="calendar">
                        <!-- <div class="month">
                            <i class="icon-chevron-thin-left prev"></i>
                            <div class="date">
                                <h1></h1>
                                <p></p>
                            </div>
                            <i class="icon-chevron-thin-right next"></i>
                        </div> -->
                        <div class="weekdays">
                            <div>Lun</div>
                            <div>Mar</div>
                            <div>Mer</div>
                            <div>Jeu</div>
                            <div>Ven</div>
                            <div>Sam</div>
                            <div>Dim</div>
                        </div>
                        <div class="days">
                        </div>
                    </div>
                </div>

                <div class="programme">

                    <div class="month">
                        <i class="icon-chevron-thin-left prev"></i>
                        <div class="date date2">
                            <h1></h1>
                            <p></p>
                        </div>
                        <i class="icon-chevron-thin-right next"></i>
                    </div>

                    <div class="monthRdv">
                        <h2>rendez-vous du jour</h2>
                        <div class="rdvList">
                            <ul>
                                <li>Amra <span>16h00 - 17h30</span></li>
                                <li>Ali Abdalla <span>01h00 - 02h30</span></li>
                                <li>Sara Sophia <span>20h00 - 22h00</span></li>
                                <li>Amra <span>toute la journee</span></li>
                                <li>Ali Abdalla <span>16h00 - 17h30</span></li>
                                <li>Sara Sophia <span>16h00 - 17h30</span></li>
                                <li>Amra <span>16h00 - 17h30</span></li>
                                <li>Ali Abdalla <span>16h00 - 17h30</span></li>
                                <li>Sara Sophia <span>16h00 - 17h30</span></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section class="service patients" data-service="patients">

            <?php
                $req="SELECT COUNT(*) AS num FROM patient WHERE id_docteur = $_SESSION[id]";
                $result=mysqli_query($con,$req);
                $num=mysqli_fetch_array($result);
            ?>

            <h4><span><?php echo $num[0]; ?></span> patients vous font confiance !</h4>

            <?php
                $req="SELECT * FROM patient WHERE id_docteur = $_SESSION[id]";
                $result=mysqli_query($con,$req);

                if (mysqli_num_rows($result) > 0) {
            ?>

            <div class="patients_list">

                <div class="list scroll">

                    <div class="list_head">
                        <div>nom complet</div>
                        <div>date de naissance</div>
                        <div>sexe</div>
                        <div>adresse</div>
                    </div>

                    <div class="list_infos">

                        <?php

                            
                                while ($patient = mysqli_fetch_array($result)) { ?>
                                <div class="list_info" data-service="<?php echo $patient['id']; ?>">
                                    <div><?php echo $patient['nom_complet']; ?></div>
                                    <div><?php echo $patient['date_naissance']; ?></div>
                                    <div><?php echo $patient['sexe']; ?></div>
                                    <div><?php echo $patient['domicile']; ?></div>
                                </div>
                                <?php }
                            } else {?>
                                <div class="info noDoc">
                                    <i class="icofont-warning"></i>
                                    <p>Rien a afficher pour le moment.</p>
                                </div>
                            <?php }

                        ?>
                        
                    </div>

                </div>

                <?php

                    $req="SELECT * FROM patient WHERE id_docteur = $_SESSION[id]";
                    $result=mysqli_query($con,$req);

                    while ($patient = mysqli_fetch_array($result)) {
                        echo '<div class="data" data-service="'.$patient['id'].'">

                            <div>
                                <img src="'.$patient['photo'].'" alt="">
                                <div class="baseInfos">
                                    <h2>'.$patient['nom_complet'].'</h2>
                                    <p>'.$patient['sexe'].'</p>
                                    <div class="contactPatient">
                                        <i class="icofont-chat"></i>
                                        <i class="icon-phone"></i>
                                        <i class="icofont-envelope"></i>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="medicalInfos">
                                    <div>
                                        <span>poids</span>
                                        <p>45kg</p>
                                    </div>
                                    <div>
                                        <span>taille</span>
                                        <p>1.70m</p>
                                    </div>
                                    <div>
                                        <span>groupe sanguin</span>
                                        <p>A/Rh+</p>
                                    </div>
                                    <div>
                                        <span>taux de sucre</span>
                                        <p>200g/l</p>
                                    </div>

                                </div>
                            </div>
                            <div class="medical_link">
                                <div class="consult_lien"><a href="consultation.php?id='.$patient['id'].'">ajouter une consultation</a></div>
                                <div class="medicalfiles"><a href="medicalfiles.php?id='.$patient['id'].'"><i class="icofont-patient-file"></i></a></div>  
                            </div>

                        </div>';
                    }
                ?>

            </div>

        </section>

    </main>

<script src="../assets/js/animation.js"></script>
<script src="../assets/js/list2.js"></script>
<script src="calendar.js"></script>
<script src="script.js"></script>

</body>
</html>