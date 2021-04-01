<?php
get_header();

while(have_posts()) {
    the_post(); ?>


    <div class="inner-banner has-base-color-overlay text-center" style="background: url(<?php echo get_theme_file_uri('/assets/images/background/scuba-diving.jpg') ?>);">
        <div class="container">
            <div class="box">
                <h1>Escribe o llámanos</h1>
            </div>
        </div>
    </div>
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="pull-left">
                <ul class="list-inline link-list">
                    <li>
                        <a href="<?php echo site_url('inicio') ?>">Inicio</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('conocenos') ?>">Sobre Abracenos Al Mar Menor</a>
                    </li>

                    <li>
                        Contactos
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
            </div>
        </div>
    </div>



    <!--Start contact area-->
    <section class="get-touch-area">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Ponte en contacto con nosotros</h1>
                <span class="border"></span>
                <p>Nos interesa tu opinión. Escríbenos y te contestarémos lo más rápido posible.</p>
            </div>
            <div class="row">
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-item hvr-grow-shadow text-center">
                        <div class="icon-holder">
                            <span class="icon-signs2"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Pregúntanos</h3>
                            <span class="border"></span>
                            <p>Ptegúntanos en qué actividades puedes participar</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-item hvr-grow-shadow text-center">
                        <div class="icon-holder">
                            <span class="icon-technology"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Contáctanos de forma más cómoda</h3>
                            <span class="border"></span>
                            <p>Móvil: +34 111 11 11 11 <br>Email: <a href="#">salmarmenor@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-item hvr-grow-shadow text-center">
                        <div class="icon-holder">
                            <span class="icon-clock"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Oficinas físicas</h3>
                            <span class="border"></span>
                            <p>de lunes a sábado: 09.00am hasta 18.00pm <br>Domingos Cerrado</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <!--End contact area-->

    <!--Start contact form area-->
    <section class="contact-form-area">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="default-form-area">

                        <?php the_content(); ?>
<!--                        <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">-->
<!--                            <div class="row clearfix">-->
<!--                                <div class="col-md-6 col-sm-6 col-xs-12">-->
<!---->
<!--                                    <div class="form-group">-->
<!--                                        <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name *" required="">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                    <div class="form-group">-->
<!--                                        <input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Mail *" required="">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                    <div class="form-group">-->
<!--                                        <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                    <div class="form-group">-->
<!--                                        <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-12 col-sm-12 col-xs-12">-->
<!--                                    <div class="form-group">-->
<!--                                        <textarea name="form_message" class="form-control textarea required" placeholder="Your Message...."></textarea>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-12 col-sm-12 col-xs-12">-->
<!--                                    <div class="form-group center">-->
<!--                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">-->
<!--                                        <button class="thm-btn style-2" type="submit" data-loading-text="Please wait...">send message</button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                        </form>-->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-right-box text-center">
<!--                        <div class="img-box">-->
<!--                            <img src="images/resource/contact-form-right.png" alt="Awesome Image">-->
<!--                        </div>-->
                        <h4>Marta Aníbarro</h4>
                        <span>Fundadora de Abracemos Al Mar Menor</span>
                        <p>Fundadora del Colectivo Internacional "Abracemos al Mar Menor". Estudió en la Universidad de Valladolid. Emprendedora y  comprometida con los temas sociales.</p>
                        <div class="border"></div>
                        <ul class="social-links">
                            <li><a target="_blank" href="https://www.facebook.com/Abracemos-al-MAR-MENOR-102408421266462"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/abrazamarmenor?lang=es"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/abracemos_al_mar_menor/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End contact form area-->



    <section class="home-google-map">

        <div
                class="google-map"
                id="contact-google-map"
                data-map-lat="40.108833"
                data-map-lng="-74.782104"
                data-icon-path="images/logo/map-marker.png"
                data-map-title="Chester"
                data-map-zoom="11" >

        </div>

    </section>





    <section class="call-out">
        <div class="container">
            <div class="float_left">
                <h4>La naturaleza no es un lugar para visitar. Es el hogar</h4>
            </div>
<!--            <div class="float_right">-->
<!--                <a href="#" class="thm-btn style-3">Get Involeved</a>-->
<!--            </div>-->

        </div>
    </section>


    <?php
} wp_reset_postdata();


get_footer();
?>