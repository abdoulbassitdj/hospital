<?php
require_once "menu_footer.php";

?>


<!DOCTYPE html>
<html lang="en">
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

    <header> <?php menu("",""); ?> </header>

    <main>

        <div class="container">
            <div class="slider-container">

                <!-- <div class="slider people1">

                    <div class="tconsellor">
                        <h2>parlez a un <span>teleconseiller</span></h2>
                        <p>Un teleconseiller est a votre ecoute pour vous guider a trouver facilement ce que vous recherchez.</p>
                        <div>
                            <button class="start">commencer</button>
                            <button class="register"><a href="espace_patient/register.php">s'inscrire</a></button>
                        </div>
                    </div>

                    <a href="#"><img src="images/slider1/people1.png" alt=""></a>

                    <p>I'm Sophie, your conselor !</p>

                </div> -->

                <!-- <div class="slider machine1">
                </div> -->

                <div class="slider people2">

                    <div class="tconsellor">
                        <h2>rencontrez nos <span>specialistes</span></h2>
                        <p>Ils pouront vous prendre en charge de maniere efficace.</p>
                        <div>
                            <button class="register">prendre un rdv</button>
                        </div>
                    </div>

                    <a href="#"><img src="images/slider1/people2.png" alt=""></a>

                </div>


                <!-- <div class="prev" onclick="plusSlider(-1)">&#10094;</div>
                <div class="next" onclick="plusSlider(1)">&#10095;</div> -->

                <!-- <div class="lines">
                    <div class="line" onclick="currentSlider(1)"></div>
                    <div class="line" onclick="currentSlider(2)"></div>
                    <div class="line" onclick="currentSlider(3)"></div>
                </div> -->
            </div>
        </div>

        <section class="about1">
            <div class="about_img">
                <img src="images/gallery/00a1f94d49c41662e5823bc959730e4f.jpg" alt="">
            </div>
            <div class="desc">
                <h2>about <span>us</span></h2>
                <p>Nous sommes le meilleur hopital de la ville de Ngaoundere.</p>
                <p>Lorem ipsum dolor sit amet, consectetur aneque hic suscipit voluptatum quam ad nisi, possimus deserunt ab unde incidunt voluptate eveniet at aliquid itaque officiis saepe enim dignissimos tempora dicta! Obcaecati aliquam nihil iste ipsum at quis fugit ad enim! Officia molestiae mollitia atque voluptatem numquam aliquid optio ullam accusamus nemo magnam nulla totam, tempore, minima natus repellendus veritatis eius? Quam fugit neque reiciendis architecto?</p>
                <p>Nous sommes le meilleur hopital de la ville de Ngaoundere.</p>
                <button class="more">lire plus</button>
            </div>
        </section>

        <section class="services">

            <h2>nos <span>services</span></h2>
            <p>Notre hopital est divise en plusieurs services dont les suivants :</p>

            <div class="services_cont">

                <div class="services_list items">
                    <button class="item active" data-service="cardiologie">cardiologie</button>
                    <button class="item" data-service="neurologie">neurologie</button>
                    <button class="item" data-service="pediatrie">pediatrie</button>
                    <button class="item" data-service="maternite">maternite</button>
                </div>

                <div class="services_desc service show" data-service="cardiologie">

                    <div class="text">
                        <h3>cardiologie</h3>
                        <p>le deprtement de cardiologie fait partie des plus importants de notre hopital</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum iure voluptatem veniam voluptates accusamus, natus nisi ducimus et quam esse numquam, dolores at quaerat unde blanditiis fugit dolorum nobis ut.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, adipisci!</p>
                    </div>

                    <div class="img_container"><img src="images/images.jpeg" alt=""></div>

                </div>

                <div class="services_desc service" data-service="neurologie">

                    <div class="text">
                        <h3>neurologie</h3>
                        <p>le deprtement de cardiologie fait partie des plus importants de notre hopital</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum iure voluptatem veniam voluptates accusamus, natus nisi ducimus et quam esse numquam, dolores at quaerat unde blanditiis fugit dolorum nobis ut.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, adipisci!</p>
                    </div>

                    <div class="img_container"><img src="images/gallery/00a1f94d49c41662e5823bc959730e4f.jpg" alt=""></div>

                </div>

                <div class="services_desc service" data-service="pediatrie">

                    <div class="text">
                        <h3>pediatrie</h3>
                        <p>le deprtement de cardiologie fait partie des plus importants de notre hopital</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum iure voluptatem veniam voluptates accusamus, natus nisi ducimus et quam esse numquam, dolores at quaerat unde blanditiis fugit dolorum nobis ut.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, adipisci!</p>
                    </div>

                    <div class="img_container"><img src="images/images.jpeg" alt=""></div>

                </div>

                <div class="services_desc service" data-service="maternite">

                    <div class="text">
                        <h3>maternite</h3>
                        <p>le deprtement de cardiologie fait partie des plus importants de notre hopital</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum iure voluptatem veniam voluptates accusamus, natus nisi ducimus et quam esse numquam, dolores at quaerat unde blanditiis fugit dolorum nobis ut.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, adipisci!</p>
                    </div>

                    <div class="img_container"><img src="images/images.jpeg" alt=""></div>

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
                        <p class="doctor_status">cardiologue</p>
                        <p>Ammar Ali est l'un de nos meilleurs docteurs. Il est diplome de l'Universite de Colombia. Il est diplome de l'Universite de Colombia.</p>
                        <!-- <p>Il est diplome de l'Universite de Colombia.</p> -->
                        <div class="doctor_socials">
                            <!-- <span class="icon-instagram"></span>
                            <span class="icon-instagram"></span>
                            <span class="icon-instagram"></span>
                            <span class="icon-instagram"></span> -->
                        </div>
                    </div>
                </div>

                <div class="doctor">
                    <div class="doctor_img"><img src="images/doctors/doctor2.jpg" alt=""></div>
                    <div class="doctor_txt">
                        <h3>John Smith</h3>
                        <p class="doctor_status">cardiologue</p>
                        <p>Ammar Ali est l'un de nos meilleurs docteurs.</p>
                        <p>Il est diplome de l'Universite de Colombia.</p>
                        <div class="doctor_socials">
                            <!-- <span class="icon-instagram"></span>
                            <span class="icon-instagram"></span>
                            <span class="icon-instagram"></span>
                            <span class="icon-instagram"></span> -->
                        </div>
                    </div>
                </div>

                <div class="doctor">
                    <div class="doctor_img"><img src="images/doctors/doctor3.jpg" alt=""></div>
                    <div class="doctor_txt">
                        <h3>Sophie</h3>
                        <p class="doctor_status">cardiologue</p>
                        <p>Ammar Ali est l'un de nos meilleurs docteurs</p>
                        <p>Il est diplome de l'Universite de Colombia.</p>
                        <div class="doctor_socials">
                            <!-- <span class="icon-instagram"></span>
                            <span class="icon-instagram"></span>
                            <span class="icon-instagram"></span>
                            <span class="icon-instagram"></span> -->
                        </div>
                    </div>
                </div>

                <div class="doctor">
                    <div class="doctor_img"><img src="images/doctors/doctor4.jpg" alt=""></div>
                    <div class="doctor_txt">
                        <h3>Bonita La Belle</h3>
                        <p class="doctor_status">cardiologue</p>
                        <p>Ammar Ali est l'un de nos meilleurs docteurs</p>
                        <p>Il est diplome de l'Universite de Colombia.</p>
                        <div class="doctor_socials">
                            <!-- <span class="icon-instagram"></span>
                            <span class="icon-instagram"></span>
                            <span class="icon-instagram"></span>
                            <span class="icon-instagram"></span> -->
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!-- <section class="temoignages">
            <div class="temoignages-container">

                <div class="tem">
                    <div class="test">
                        <p>111</p>
                        <p>222</p>
                    </div>

                    <div class="test">
                        <p>333</p>
                        <p>444</p>
                    </div>

                    <div class="test">
                        <p>555</p>
                        <p>666</p>
                    </div>
                </div>

                <div class="lines2">
                    <div class="line2" onclick="currentSlider(1)"></div>
                    <div class="line2" onclick="currentSlider(2)"></div>
                    <div class="line2" onclick="currentSlider(3)"></div>
                </div>

            </div>

            <div class="prev2" onclick="plusSlider(-1)">&#10094;</div>
            <div class="next2" onclick="plusSlider(1)">&#10095;</div>

        </section> -->

    </main>

    <footer> <?php footer(); ?> </footer>

    <script src="assets/js/menu.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/list.js"></script>
    <script src="assets/js/testimonial.js"></script>

</body>
</html>