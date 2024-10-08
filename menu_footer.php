<?php

function menu()
{ ?>

    <nav>
        <ul class="menu_box">

            <li class="logo_box"><img src="/hospital/assets/images/logo_hospital_2.png" alt="" class="logo"></li>

            <li class="hiddedMenu"> <a href="/hospital/index.php" class="menu">home</a></li>

            <li class="hiddedMenu"> <a href="#about" class="menu">about us</a></li>

            <li class="hiddedMenu"> <a href="#services" class="menu">services</a></li>

            <li class="hiddedMenu"> <a href="#" class="menu drop">se connecter</a>
                <ul class="sous_menu_box">
                    <li class="sous_menu"><a href="/hospital/espace_patient/connect.php">patient</a></li>
                    <li class="sous_menu"><a href="/hospital/espace_docteur/connect.php">docteur</a></li>
                    <li class="sous_menu"><a href="/hospital/espace_admin/connect.php">administrateur</a></li>
                    <!-- <li class="sous_menu"><a href="/hospital/espace_receptioniste/connectR.php">receptionniste</a></li> -->
                </ul>
            </li>

        </ul>
    </nav>
<?php } ?>

<?php
function footer()
{ ?>
    <section class="foot">

        <div class="contact reveal">
            <div>
                <i class="icon-mail"></i>
                <a href="mailto:abdoulbassitdj@gmail.com">abdoulbassitdj@gmail.com</a>
            </div>
            <div>
                <i class="icon-location-pin"></i>
                <address>Bamyanga March, Ngaoundéré, Cameroon</address>
            </div>
            <div>
                <i class="icon-phone"></i>
                <a href="tel:(+237)678246968">(+237) 678246968</a>
            </div>
        </div>

        <hr>

        <div class="links reveal">

            <div class="fcontact">
                <h3>contact</h3>
                <a href="mailto:abdoulbassitdj@gmail.com">abdoulbassitdj@gmail.com</a>
                <a href="tel:(+237)678246968">(+237) 678246968</a>
            </div>

            <div class="services">
                <h3>services</h3>
                <a href="#">maternite</a>
                <a href="#">cardiologie</a>
                <a href="#">orthodontie</a>
                <a href="#">ambulance</a>
            </div>

            <div class="usefull_links">
                <h3>links</h3>
                <a href="#">maternite</a>
                <a href="#">cardiologie</a>
            </div>

            <div class="newsletter">
                <h3>suscribe</h3>
                <input type="text" placeholder="Entrez Entre Email">
                <button type="submit"><i class="icon-chevron-right"></i></button>
                <p>get health information in your mail box.</p>
            </div>

        </div>

        <div class="social reveal">
            <div class="icons">
                <div><i class="icon-facebook2"></i></div>
                <div><i class="icon-instagram2"></i></div>
                <div><i class="icon-linkedin22"></i></div>
                <div><i class="icon-twitter2"></i></div>
            </div>
            <div class="copyright">
                <p>2022-2024, Abdoul-Bassit Dj . All rights reserved.</p>
            </div>
        </div>

    </section>
<?php }

?>