<?php
require_once "menu_footer.php";

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/animation.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/testimonial.css">
</head>

<body>

    <header> <?php menu("", ""); ?> </header>

    <main>

        <div class="hero">

            <div class="conteneur">
                <div class="hero_text">
                    <h2>retez en contact avec <span>votre medecin</span></h2>
                    <p>Pour une prise en charge efficace et un suivi en temps reel.</p>
                    <div class="register">
                        <a href="/hospital/espace_patient/register.php">creez un compte maintenant</a>
                    </div>
                </div>

                <img src="images/slider1/people2.png" alt="">
            </div>

        </div>

        <section class="about1" id="about">
            <div class="about_img">
                <img src="images/gallery/00a1f94d49c41662e5823bc959730e4f.jpg" alt="">
            </div>
            <div class="desc">
                <h2>about <span>us</span></h2>
                <p>Nous sommes le meilleur hopital de la ville de Ngaoundere.</p>
                <p>Bienvenue à NorHealth, où votre santé est notre priorité. Nous nous engageons à offrir des soins de qualité supérieure grâce à un suivi personnalisé et continu de chaque patient.

                    Notre équipe de professionnels dévoués utilise les dernières technologies pour surveiller votre état de santé en temps réel, assurant ainsi une intervention rapide et efficace. Que ce soit pour une consultation de routine ou un traitement spécialisé, nous sommes à vos côtés à chaque étape de votre parcours de santé.

                    Découvrez un environnement où l’écoute, le respect et l’excellence médicale se conjuguent pour vous offrir le meilleur des soins.</p>
                <button class="more">lire plus</button>
            </div>
        </section>

        <section class="services" id="services">

            <h2>nos <span>services</span></h2>
            <p>Notre hopital est divise en plusieurs services dont les suivants :</p>

            <div class="services_cont">

                <div class="services_list items">
                    <button class="item active" data-service="cardiologie">cardiologie</button>
                    <button class="item" data-service="neurologie">neurologie</button>
                    <button class="item" data-service="pediatrie">pediatrie</button>
                    <button class="item" data-service="maternite">maternité</button>
                </div>

                <div class="services_desc service show" data-service="cardiologie">

                    <div class="text">
                        <h3>cardiologie</h3>
                        <p>Notre département de cardiologie est dédié à la prise en charge complète des maladies cardiovasculaires. Nous offrons une gamme étendue de services, allant de la prévention et du dépistage précoce aux traitements les plus avancés. Nos cardiologues expérimentés utilisent des technologies de pointe pour diagnostiquer et traiter des conditions telles que l’hypertension, les maladies coronariennes, et les insuffisances cardiaques. Chaque patient bénéficie d’un suivi personnalisé, avec des plans de traitement adaptés à leurs besoins spécifiques, assurant ainsi une prise en charge optimale et continue.</p>
                    </div>

                    <div class="img_container"><img src="images/gallery/cardiologie.jpeg" alt=""></div>

                </div>

                <div class="services_desc service" data-service="neurologie">

                    <div class="text">
                        <h3>neurologie</h3>
                        <p>Le département de neurologie de notre hôpital se spécialise dans le diagnostic et le traitement des maladies du système nerveux central et périphérique. Nos neurologues sont formés pour gérer une variété de conditions, y compris les troubles neurodégénératifs comme la maladie de Parkinson, les épilepsies, et les accidents vasculaires cérébraux. Grâce à des équipements de diagnostic avancés et à des approches thérapeutiques innovantes, nous offrons des soins de haute qualité. Nous nous engageons à fournir un suivi attentif et personnalisé pour améliorer la qualité de vie de nos patients.</p>
                    </div>

                    <div class="img_container"><img src="images/gallery/00a1f94d49c41662e5823bc959730e4f.jpg" alt=""></div>

                </div>

                <div class="services_desc service" data-service="pediatrie">

                    <div class="text">
                        <h3>pediatrie</h3>
                        <p>Notre service de pédiatrie est dédié à la santé et au bien-être des enfants, de la naissance à l’adolescence. Nous offrons des soins spécialisés dans divers domaines, y compris la pédiatrie générale, les maladies infectieuses, et les troubles du développement. Nos pédiatres travaillent en étroite collaboration avec les familles pour assurer un suivi attentif et adapté à chaque étape du développement de l’enfant. Nous mettons un point d’honneur à créer un environnement accueillant et rassurant pour les jeunes patients et leurs parents, garantissant ainsi des soins de qualité et une expérience positive.</p>
                    </div>

                    <div class="img_container"><img src="images/gallery/pediatrie.jpg" alt=""></div>

                </div>

                <div class="services_desc service" data-service="maternite">

                    <div class="text">
                        <h3>maternité</h3>
                        <p>La maternité de notre hôpital est un lieu où la sécurité et le bien-être des mères et des nouveau-nés sont au cœur de nos préoccupations. Nous proposons un accompagnement personnalisé tout au long de la grossesse, de l’accouchement et du post-partum. Notre équipe de sages-femmes, obstétriciens et pédiatres est à votre écoute pour répondre à vos besoins et assurer une expérience de naissance sereine et sécurisée. Nous offrons également des cours prénataux, des consultations en lactation et un soutien postnatal pour aider les nouvelles mères à se sentir confiantes et soutenues dans leur nouveau rôle.</p>
                    </div>

                    <div class="img_container"><img src="images/gallery/maternite.jpg" alt=""></div>

                </div>

            </div>
        </section>

        <section class="our_doctors">
            <h2>our <span>doctors</span></h2>
            <p>Nous avons les meilleurs docteurs de la ville en terme d'experience et de la formation acquise, certains etant issues des plus grandes ecoles de medecine du monde.</p>

            <div class="doctors">

                <div class="doctor">
                    <div class="doctor_img"><img src="images/doctors/doctor1.jpg" alt=""></div>
                    <div class="doctor_txt">
                        <h3>Ammar Ali</h3>
                        <p class="doctor_status">Neurologue</p>
                        <p>Neurologue expert en troubles du système nerveux central et périphérique, reconnu pour ses diagnostics précis et ses traitements efficaces.</p>
                    </div>
                </div>

                <div class="doctor">
                    <div class="doctor_img"><img src="images/doctors/doctor2.jpg" alt=""></div>
                    <div class="doctor_txt">
                        <h3>John Smith</h3>
                        <p class="doctor_status">Pédiatre</p>
                        <p>Pédiatre passionné, dédié à la santé et au bien-être des enfants. Il combine expertise médicale et approche bienveillante pour chaque patient.</p>
                    </div>
                </div>

                <div class="doctor">
                    <div class="doctor_img"><img src="images/doctors/doctor3.jpg" alt=""></div>
                    <div class="doctor_txt">
                        <h3>Sophie</h3>
                        <p class="doctor_status">cardiologue</p>
                        <p>Cardiologue expérimentée, spécialisée dans les maladies cardiovasculaires et la prévention des crises cardiaques. Elle offre des soins personnalisés et innovants.</p>
                    </div>
                </div>

                <div class="doctor">
                    <div class="doctor_img"><img src="images/doctors/doctor4.jpg" alt=""></div>
                    <div class="doctor_txt">
                        <h3>Bonita La Belle</h3>
                        <p class="doctor_status">Gynécologue</p>
                        <p>Gynécologue renommée, spécialisée en santé reproductive et en suivi de grossesse. Elle utilise des techniques de pointe pour des soins optimaux.</p>
                    </div>
                </div>

            </div>

        </section>

    </main>

    <footer> <?php footer(); ?> </footer>

    <script src="assets/js/menu.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/list2.js"></script>
    <script src="assets/js/testimonial.js"></script>

</body>

</html>