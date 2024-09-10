<?php

include "../auto/config.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Receptionniste</title>
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../fonts/icofont/icofont.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="calendar.css">
    <link rel="stylesheet" href="../assets/css/list.css">
</head>
<body>
    
    <header></header>

    <main>

        <aside class="items">

            <div class="group">
                <img src="../images/doctors/doctor4.jpg" alt="">
                <p>Dr. Allan Moore</p>
                <p>Gynecology</p>
            </div>

            <div class="group item" data-service="overview">
                <p><i class="icofont-chart-bar-graph"></i> overview</p>
            </div>

            <div class="group item" data-service="rendez_vous">
                <p><i class="icofont-ui-calendar"></i> rendez-vous</p>
            </div>

            <div class="group item" data-service="messages">
                <p><i class="icofont-ui-text-chat"></i> messages</p>
            </div>

            <div class="group item active" data-service="patients">
                <p><i class="icofont-crutch"></i> hospitalisations</p>
            </div>
            
        </aside>

        <section class="service overview" data-service="overview">
        
            <div class="greeting">
                <div>
                    <h2>Hello, <span>Mlle Allan Moore !</span></h2>
                    <p>Bon retour parmi nous. Nous sommes ravis de vous aider a vous occuper de vos patients.</p>
                    <button><a href="profile.php">votre profile</a></button>
                </div>
                <div><img src="../images/doctors/doctor_cartoon.png" alt=""></div>
            </div>

            <div class="infos">

                <div class="info">
                    <i class="icofont-stethoscope-alt"></i>
                    <div>
                        <p>Nombre des patients</p>
                        <span>4565</span>
                    </div>
                </div>

                <div class="info attente">
                    <i class="icofont-clock-time"></i>
                    <div>
                        <p>Rendez-vous en attente</p>
                        <span>123</span>
                    </div>
                </div>

                <div class="info">
                    <i class="icofont-meeting-add"></i>
                    <div>
                        <p>Tous les rendez-vous</p>
                        <span>4565</span>
                    </div>
                </div>

                <div class="info">
                    <i class="icofont-stethoscope"></i>
                    <div>
                        <p>Nombre des patients</p>
                        <span>4565</span>
                    </div>
                </div>

                <!-- <div class="info"></div>
                <div class="info"></div> -->
            </div>

            <!-- <div class="timing">

                <div class="ca">
                    <div class="calendar">
                        <div class="month">
                            <i class="icon-chevron-thin-left prev"></i>
                            <div class="date">
                                <h1></h1>
                                <p></p>
                            </div>
                            <i class="icon-chevron-thin-right next"></i>
                        </div>
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

                <div class="ca">
                </div>
            </div> -->

        </section>

        <section class="service rendez_vous show" data-service="rendez_vous">

            <h4><span>6</span>Rendez-vous accepté pour aujourd'hui</h4>

            <div class="rdvNegatives">

                <?php

                    $req="SELECT  booking.*, patient.nom_complet AS purchaser, patient.photo,  patient.id, docteur.nom_complet AS docteur FROM `booking`,`patient`,`docteur` WHERE booking.id_patient = patient.id AND booking.id_docteur = patient.id_docteur = docteur.id AND status = 'accepté'";
                    $result=mysqli_query($con,$req);

                    while ($booking = mysqli_fetch_array($result)){
                        echo '<div class="rdv">
                    <p class="rdvMessage"><i class="icofont-check"></i></p>
                    <img src="'.$booking['photo'].'" alt="">
                    <p class="purchaser">patient: <strong>'.$booking['purchaser'].'</strong></p>
                    <p class="purchaser">docteur: <strong>'.$booking['docteur'].'</strong></p>
                    <p>date : <strong>'.$booking['date'].' / '.$booking['heure'].'</strong></p>
                    <div class="acceptation">
                        <div class="approve">Accepté</div>
                    </div>
                    </div>';
                    }
                ?>

                <!-- <div class="rdv">
                    <p class="rdvMessage"><i class="icofont-check"></i></p>
                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                    <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                    <p>date : <strong>27 mai - 10h30</strong></p>
                    <div class="acceptation">
                        <a href="acceptation.php?status=accepted" class="approve">Accepted</a>
                    </div>
                </div>

                <div class="rdv">
                    <p class="rdvMessage"><i class="icofont-check"></i></p>
                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                    <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                    <p>date : <strong>27 mai - 10h30</strong></p>
                    <div class="acceptation">
                        <a href="acceptation.php?status=accepted" class="approve">Accepted</a>
                    </div>
                </div>

                <div class="rdv">
                    <p class="rdvMessage"><i class="icofont-check"></i></p>
                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                    <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                    <p>date : <strong>27 mai - 10h30</strong></p>
                    <div class="acceptation">
                        <a href="acceptation.php?status=accepted" class="approve">Accepted</a>
                    </div>
                </div>

                <div class="rdv">
                    <p class="rdvMessage"><i class="icofont-check"></i></p>
                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                    <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                    <p>date : <strong>27 mai - 10h30</strong></p>
                    <div class="acceptation">
                        <a href="acceptation.php?status=accepted" class="approve">Accepted</a>
                    </div>
                </div>
                <div class="rdv">
                    <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                    <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                    <p>date : <strong>27 mai - 10h30</strong></p>
                    <div class="acceptation">
                        <a href="acceptation.php?status=accepted" class="declined">declined</a>
                    </div>
                </div>

                <div class="rdv">
                    <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                    <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                    <p>date : <strong>27 mai - 10h30</strong></p>
                    <div class="acceptation">
                        <a href="acceptation.php?status=accepted" class="declined">declined</a>
                    </div>
                </div>

                <div class="rdv">
                    <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                    <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                    <p>date : <strong>27 mai - 10h30</strong></p>
                    <div class="acceptation">
                        <a href="acceptation.php?status=accepted" class="declined">declined</a>
                    </div>
                </div>

                <div class="rdv">
                    <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                    <img src="../images/users/9d8297540e9c12a4543dce13a88db03e.jpg" alt="">
                    <p class="purchaser">patient: <strong>Sophie Bergham</strong></p>
                    <p class="purchaser">docteur: <strong>Allan Moore</strong></p>
                    <p>date : <strong>27 mai - 10h30</strong></p>
                    <div class="acceptation">
                        <a href="acceptation.php?status=accepted" class="declined">declined</a>
                    </div>
                </div> -->
            </div>

            <h4><span>6</span>Rendez-vous refusés pour aujourd'hui</h4>

            <div class="rdvNegatives">
                <?php

                    $req="SELECT  booking.*, patient.nom_complet AS purchaser, patient.photo,  patient.id, docteur.nom_complet AS docteur FROM `booking`,`patient`,`docteur` WHERE booking.id_patient = patient.id AND booking.id_docteur = patient.id_docteur = docteur.id AND status = 'refusé'";
                    $result=mysqli_query($con,$req);

                    while ($booking = mysqli_fetch_array($result)){
                        echo '<div class="rdv">
                    <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                    <img src="'.$booking['photo'].'" alt="">
                    <p class="purchaser">patient: <strong>'.$booking['purchaser'].'</strong></p>
                    <p class="purchaser">docteur: <strong>'.$booking['docteur'].'</strong></p>
                    <p>date : <strong>'.$booking['date'].' / '.$booking['heure'].'</strong></p>
                    <div class="acceptation">
                        <div class="declined">Refusé</div>
                    </div>
                    </div>';
                    }
                ?>
            </div>

            <h4><span>6</span>Rendez-vous annulés pour aujourd'hui</h4>

            <div class="rdvNegatives">
                <?php

                    $req="SELECT  booking.*, patient.nom_complet AS purchaser, patient.photo,  patient.id, docteur.nom_complet AS docteur FROM `booking`,`patient`,`docteur` WHERE booking.id_patient = patient.id AND booking.id_docteur = patient.id_docteur = docteur.id AND status = 'annulé'";
                    $result=mysqli_query($con,$req);

                    while ($booking = mysqli_fetch_array($result)){
                        echo '<div class="rdv">
                    <p class="rdvMessage dec"><i class="icofont-check"></i></p>
                    <img src="'.$booking['photo'].'" alt="">
                    <p class="purchaser">patient: <strong>'.$booking['purchaser'].'</strong></p>
                    <p class="purchaser">docteur: <strong>'.$booking['docteur'].'</strong></p>
                    <p>date : <strong>'.$booking['date'].' / '.$booking['heure'].'</strong></p>
                    <div class="acceptation">
                        <div class="declined">Refusé</div>
                    </div>
                    </div>';
                    }
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
                        <div class="date">
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

        <section class="service messages" data-service="messages">messages</section>

        <section class="service patients" data-service="patients">

            <h4><span>57</span> patients</h4>

            <div class="patients_list">

                <div class="list scroll">

                    <div class="list_head">
                        <div>nom complet</div>
                        <div>age</div>
                        <div>sexe</div>
                        <div>numero chambre</div>
                        <div>photo</div>
                    </div>

                    <div class="list_infos">

                        <div class="list_info active" data-service="1">
                            <div>Shara</div>
                            <div>25</div>
                            <div>feminin</div>
                            <div>16/09/2021</div>
                            <div><img src="../images/users/05cf8eaeea3b17694719c4799545e826.jpg"></div>
                        </div>
                        <div class="list_info" data-service="2">
                            <div>Ali Moussa</div>
                            <div>30</div>
                            <div>masculin</div>
                            <div>03/04/2022</div>
                            <div><img src="../images/users/05cf8eaeea3b17694719c4799545e826.jpg"></div>
                        </div>
                        <div class="list_info" data-service="3">
                            <div>Shara</div>
                            <div>25</div>
                            <div>feminin</div>
                            <div>16/09/2021</div>
                            <div><img src="../images/users/05cf8eaeea3b17694719c4799545e826.jpg"></div>
                        </div>
                        <div class="list_info" data-service="4">
                            <div>Ali Moussa</div>
                            <div>30</div>
                            <div>masculin</div>
                            <div>03/04/2022</div>
                            <div><img src="../images/users/05cf8eaeea3b17694719c4799545e826.jpg"></div>
                        </div>
                        <div class="list_info" data-service="5">
                            <div>Shara</div>
                            <div>25</div>
                            <div>feminin</div>
                            <div>16/09/2021</div>
                            <div><img src="../images/users/05cf8eaeea3b17694719c4799545e826.jpg"></div>
                        </div>
                        <div class="list_info" data-service="6">
                            <div>Ali Moussa</div>
                            <div>30</div>
                            <div>masculin</div>
                            <div>03/04/2022</div>
                            <div><img src="../images/users/05cf8eaeea3b17694719c4799545e826.jpg"></div>
                        </div>
                        <div class="list_info" data-service="7">
                            <div>Shara</div>
                            <div>25</div>
                            <div>feminin</div>
                            <div>16/09/2021</div>
                            <div><img src="../images/users/00c63ac73002fccc11a9086d3255aa6a.jpg"></div>
                        </div>
                        <div class="list_info" data-service="8">
                            <div>Ali Moussa</div>
                            <div>30</div>
                            <div>masculin</div>
                            <div>03/04/2022</div>
                            <div><img src="../images/users/00c63ac73002fccc11a9086d3255aa6a.jpg"></div>
                        </div>
                        <div class="list_info" data-service="9">
                            <div>Shara</div>
                            <div>25</div>
                            <div>feminin</div>
                            <div>16/09/2021</div>
                            <div><img src="../images/users/00c63ac73002fccc11a9086d3255aa6a.jpg"></div>
                        </div>
                        <div class="list_info" data-service="10">
                            <div>Ali Moussa</div>
                            <div>30</div>
                            <div>masculin</div>
                            <div>03/04/2022</div>
                            <div><img src="../images/users/00c63ac73002fccc11a9086d3255aa6a.jpg"></div>
                        </div>
                        <div class="list_info" data-service="11">
                            <div>Shara</div>
                            <div>25</div>
                            <div>feminin</div>
                            <div>16/09/2021</div>
                            <div><img src="../images/users/00c63ac73002fccc11a9086d3255aa6a.jpg"></div>
                        </div>
                        <div class="list_info" data-service="12">
                            <div>Ali Moussa</div>
                            <div>30</div>
                            <div>masculin</div>
                            <div>03/04/2022</div>
                            <div><img src="../images/users/00c63ac73002fccc11a9086d3255aa6a.jpg"></div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

    </main>

    <footer></footer>


<script src="../assets/js/menu.js"></script>
<script src="../assets/js/animation.js"></script>
<script src="../assets/js/list.js"></script>
<script src="calendar.js"></script>
<script src="script.js"></script>
</body>
</html>