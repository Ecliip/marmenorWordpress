<?php
get_header();
?>


    <!--SLIDER START-->
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider"  data-version="5.0">
            <ul>
    <?php
        $collaboratePages = new WP_Query(array(
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post_parent'    => 50,
            'order'          => 'ASC',
            'orderby'        => 'menu_order'
        ));

        while ($collaboratePages->have_posts()) {
            $collaboratePages->the_post();
            ?>
            <li data-transition="fade">
<!--                <img src="--><?php //echo get_theme_file_uri('/assets/images/slider/1.jpg') ?><!--"  alt="" width="1920" height="888" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >-->
                <img src="<?php the_post_thumbnail_url('1920_790') ?>"  alt="" width="1920" height="888" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                <div class="tp-caption  tp-resizeme"
                     data-x="left" data-hoffset="15"
                     data-y="top" data-voffset="260"
                     data-transform_idle="o:1;"
                     data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     data-start="700">
                    <div class="slide-content-box">
                        <h1><?php the_title() ?></h1>
                        <h3 style="width: 50vw; white-space: break-spaces"><?php the_field('subtitulo'); ?></h3>
                        <p style="font-weight: 500; color: white; padding: .5rem 1rem; background: rgba(0,114,118, .5);"><?php echo wp_trim_words(get_the_content(), 20) ?></p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="left" data-hoffset="15"
                     data-y="top" data-voffset="480"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     data-start="2300">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn" href=<?php the_permalink(); ?>>leer</a>
                        </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="left" data-hoffset="200"
                     data-y="top" data-voffset="480"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     data-start="2600">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn style-3" href="<?php echo site_url('/contactos') ?>">forma parte del equipo</a>
                        </div>
                    </div>
                </div>
            </li>
        <?php } wp_reset_postdata();

    ?>
            </ul>
        </div>
    </section>
    <!--SLIDER END-->


<!-- create a WP page for this section and serve it dynamically-->
    <section class="service sec-padd3">
        <div class="container">


            <div class="section-title center">
                <h2>Somos "Abracemos al Mar Menor" <span class="thm-color">una organización que lucha contra la contaminación de aguas en el Mar Menor </span>en la región de Murcia</h2>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-x-12">
                    <div class="service-item center">
                        <div class="icon-box">
                            <span class="icon-can"></span>
                        </div>
                        <h4>Recogidas de basura</h4>
                        <p>El paraiso perdido. Un ecositema echado a perder por la falta de voluntad política y ciudadana</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-x-12">
                    <div class="service-item center">
                        <div class="icon-box">
                            <span class="icon-tool"></span>
                        </div>
                        <h4>Ecosistema único</h4>
                        <p>Un medio ambiente único en todos los sentidos, con una variedad de flora y fauna.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-x-12">
                    <div class="service-item center">
                        <div class="icon-box">
                            <span class="icon-nature-1"></span>
                        </div>
                        <h4>Aguas contaminadas</h4>
                        <p>Pondremos fin a la injusticia medioambiental. El Mar Menor suplica que lo protejamos</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-x-12">
                    <div class="service-item center">
                        <div class="icon-box">
                            <span class="icon-deer"></span>
                        </div>
                        <h4>Especies en riesgo</h4>
                        <p>Muchas especies del Mar Menor morirán si no pararémos el ecocidio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="fact-counter style-2 sec-padd" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/background/tractor.jpeg') ?> );">
        <div class="container">
            <div class="section-title center">
                <h2 style="display: inline-block; background: rgba(0,0,0, .5); padding: 1rem;">¿Sabías que...?</h2>
            </div>
            <div class="row clearfix">
                <div class="counter-outer clearfix">
                    <!--Column-->
                    <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                        <div class="item">
                            <div class="icon"><i class="icon-heart2"></i></div>
<!--                            TODO calculate dynamically-->
                            <div style="color: antiquewhite" class="count-outer"><span class="count-text" data-speed="3000" data-stop="2">0</span>+</div>
                            <h4 class="counter-title">Años de experiencia</h4>
                        </div>

                    </article>

                    <!--Column-->
                    <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                        <div class="item">
                            <div class="icon"><i class="icon-money"></i></div>
                            <div style="color: antiquewhite" class="count-outer"><span class="count-text" data-speed="3000" data-stop="40">0</span>+</div>
                            <h4 class="counter-title">Actividades realizadas</h4>
                        </div>
                    </article>

                    <!--Column-->
                    <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                        <div class="item">
                            <div class="icon"><i class="icon-people3"></i></div>
                            <div style="color: antiquewhite" class="count-outer"><span class="count-text" data-speed="3000" data-stop="347">0</span></div>
                            <h4 class="counter-title">Voluntarios participando</h4>
                        </div>
                    </article>

                    <!--Column-->
                    <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                        <div class="item">
                            <div class="icon"><i class="icon-animals"></i></div>
                            <div style="color: antiquewhite" class="count-outer"><span class="count-text" data-speed="3000" data-stop="485">0</span>kg</div>
                            <h4 class="counter-title">De basura recogida</h4>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>





    <section class="about sec-padd2">
        <div class="container">
            <div class="section-title center">
                <h2>Abracemos al Mar Menor</h2>
                <p>Cada voz cuenta, elige en que campaña quieres participar y haz algo por el Mar Menor</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <figure class="img-box">
                        <img src="<?php echo get_theme_file_uri('/assets/images/resource/water.jpg') ?> " alt="">
                    </figure>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="content">
                        <h2>Juntos podemos cambiar la realidad, incorporate, te necesitamos</h2>
                        <div class="text">
                            <p>When you give to Our Ecogreen, you know your donation is making a difference. Whether you are supporting one of our Signature Programs or our carefully curated list of Gifts That Give More, our professional staff works hard every day <br>to ensure every dollar has impact for the cause of your choice. </p>
                        </div>
                        <h4>Our Partner</h4>
                        <div class="text">
                            <p>We partner with over 320 amazing projects worldwide, and have given over $150 million in cash and product grants to other groups since 2011. We also operate our own dynamic suite of Signature Programs.</p>
                        </div>
                        <div class="link"><a href="<?php echo site_url('/contactos') ?>" class="thm-btn style-2">Únete también</a></div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section class="why-chooseus">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <div class="inner-box">
                            <!--icon-box-->
                            <div class="icon_box">
                                <span class="icon-shapes"></span>
                            </div>
                            <a href="3"><h4>Supporting Good Cause</h4></a>
                        </div>
                        <div class="text"><p>Your contrbution used locally to help charitable causes and support the organization, Support only for good causes.  </p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <div class="inner-box">
                            <!--icon-box-->
                            <div class="icon_box">
                                <span class="icon-star"></span>
                            </div>
                            <a href="#"><h4>Most Trusted One</h4></a>
                        </div>
                        <div class="text"><p>Your contrbution used locally to help charitable causes and support the organization, Support only for good causes.  </p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <div class="inner-box">
                            <!--icon-box-->
                            <div class="icon_box">
                                <span class="icon-people-1"></span>
                            </div>
                            <a href="#"><h4>Supporting Good Cause</h4></a>
                        </div>
                        <div class="text"><p>Your contrbution used locally to help charitable causes and support the organization, Support only for good causes.  </p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!--TODO has to do gallery section-->
<?php $galleryPage = get_post(160) ?>
                <?php
                    $espArgs = array(
                        'post_status' => 'inherit',
                        'posts_per_page' => 4,
                        'post_type' => 'attachment',
                    );
                    $espArgs['tax_query'] = array(
                        array(
                            'taxonomy' => 'categoria-galeria',
                            'terms' => array( 'especies' ),
                            'field' => 'slug',
                        ),
                    );
                    $especiesQuery =  new WP_Query( $espArgs );

                    if ($especiesQuery->have_posts()) { ?>

    <section class="gallery sec-padd3 style-2" style="background: url(<?php echo get_the_post_thumbnail_url(160, '1920_790') ?> ) rgb(0,0,0)" ;>
        <div class="container">
            <div class="section-title">
                <h2 style="display: inline-block; background: rgba(0,0,0, .5); padding: 1rem;">Especies del Mar Menor</h2>
            </div>

            <div class="row filter-layout">
                <?php
                        while($especiesQuery->have_posts()) {
                            $especiesQuery->the_post();
                ?>

                            <article class="col-md-3 col-sm-6 col-xs-12 filter-item Wild-Animals Pollution Water">
                    <div class="item" style="background: rgba(14,94,94,0.59)">
                        <div class="img-box">
                            <img src="<?php echo wp_get_attachment_image_url( get_the_ID(), $size ='570_300' ); ?> " alt="">
                            <div class="overlay">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <a data-group="1" href="<?php echo wp_get_attachment_image_url( get_the_ID(), $size ='full' ) ?> " class="img-popup"><i class="fa fa-search-plus"></i></a>
                                        <a href="single-gallery.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content center">
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </div>
                </article>

                <?php
                        } wp_reset_postdata();

                ?>
            </div>
            <a class="thm-btn" href="<?php echo site_url('/galerias'); ?>">Ir a galería</a>
        </div>
    </section>
                        <?php } // end if?>


<?php
$espArgs = array(
    'post_status' => 'inherit',
    'posts_per_page' => 6,
    'post_type' => 'attachment',
);
$espArgs['tax_query'] = array(
    array(
        'taxonomy' => 'categoria-galeria',
        'terms' => array( 'infografias' ),
        'field' => 'slug',
    ),
);
$especiesQuery =  new WP_Query( $espArgs );

if ($especiesQuery->have_posts()) {
        ?>


    <section class="urgent-cause2 sec-padd">
        <div class="container">
            <div class="section-title">
                <h2>Infografías</h2>
                <p>Vivimos en la tierra como si tuviéramos otra a la que ir</p>
            </div>

            <div class="cause-carousel">
                <?php
                while($especiesQuery->have_posts()) {
                    $especiesQuery->the_post();
                ?>

                <div class="item clearfix">
                    <figure class="img-box">
                            <img src="<?php echo wp_get_attachment_image_url( get_the_ID(), $size ='570_300' ); ?> " alt="">
                            <div class="overlay">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <a data-group="1" href="<?php echo wp_get_attachment_image_url( get_the_ID(), $size ='full' ) ?> " class="img-popup"><i class="fa fa-search-plus"></i></a>
                                        <a href="single-gallery.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                    </figure>

                    <div class="content">

                        <div class="text center">
                            <a href="#"><h4 class="title"><?php the_title(); ?></h4></a>
                            <p>We are dedicated to ending homelessness by delive- ring life-changing services for change the poor childrens life...</p>
                        </div>
                    </div>
                </div>
                        <?php
                    }
                } wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

<!--TODO The upcoming event-->
    <section class="event-style1" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/background/mountain_1920_776.jpg') ?> )";>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-10 col-xs-12">
                    <div class="section-title">
                        <h2 style="display: inline-block; background: rgba(0,0,0, .5); padding: 1rem;">Participa en actividades</h2>
                    </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-12">
                    <a style="background: rgba(0,88,104, .5); color: whitesmoke;" href="#" class="thm-btn style-2 float_right">All Events</a>
                </div>
            </div>
            <div class="row">
                <?php
                $homepageEvents = new WP_Query(array(
                        'posts_per_page' => 2,
                        'meta_key' => 'fecha_de_evento',
                        'orderby' => 'meta_value_num',
                        'post_type' => 'evento',
                        'order' => 'ASC',
                        'meta_query' => array(
                                array(
                                    'key' => 'fecha_de_evento',
                                    'compare' => '>=',
                                    'value' => date('Ymd'),
                                    'type' => 'numeric'
                                )
                        )
                ));
                    while($homepageEvents->have_posts()) {
                        $homepageEvents->the_post();

                        $eventDate =  new DateTime(get_field('fecha_de_evento'));
                        $eventHour =  new DateTime(get_field('hora_de_evento'));
                        $eventLocation = get_field('sitio_de_evento');

                        ?>
                        <article class="col-md-6 col-sm-12 col-xs-12">
                            <div class="item style-1" style="background: rgba(0,110,120, .5)">
                                <div class="img-column">
                                    <figure class="img-holder">
<!--                                        <a href="--><?php //the_permalink(); ?><!--"><img src="--><?php //echo get_theme_file_uri('/assets/images/resource/1.jpg') ?><!-- " alt=""></a>-->
                                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('570_300'); ?> " alt=""></a>
                                        <div class="date"><?php echo $eventDate->format('d'); ?> <br><span><?php echo $eventDate->format('M'); ?></span></div>
                                    </figure>
                                </div>
                                <div class="text-column">
                                    <div class="lower-content">
                                        <p>Anunciado por: <?php the_author_posts_link(); ?> </p>
                                        <a href="<?php the_permalink(); ?>"><h4><?php the_title() ?></h4></a>
                                        <div class="text">
                                            <p><?php echo wp_trim_words(get_the_content(), 18) ?></p>
                                        </div>
                                    </div>

                                    <ul class="post-meta list_inline" style="background: rgba(11,11,11, .6);  ">
                                        <li><i class="fa fa-clock-o"></i>Empieza a las: <span style="font-size: 25px; font-weight: 600; color: whitesmoke"><?php echo get_field('hora_de_evento'); ?></span></li>
                                        <li><i class="fa fa-map-marker"></i>Lugar: <span style="font-size: 25px; font-weight: 600; color: whitesmoke"><?php echo $eventLocation; ?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </article>

                <?php } wp_reset_postdata();

                ?>

            </div>
        </div>
    </section>

<!-- Blog posts-->
    <section class="blog-section sec-padd2">
        <div class="container">
            <div class="section-title center">
                <h2>Últimas noticias</h2>
            </div>
            <div class="row">


                <?php
                $homepagePosts = new WP_Query(array(
                    'posts_per_page' => 4,
                    'post_type' => 'post'
                ));

                while($homepagePosts->have_posts()) {
                    $homepagePosts->the_post();
                    ?>

                    <article class="col-md-3 col-sm-6 col-xs-12">
                        <div class="default-blog-news wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                            <figure class="img-holder">
                                <a href="blog-details.html"><img src="<?php echo the_post_thumbnail_url('570_300') ?> " alt="News"></a>
                                <figcaption class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="<?php the_permalink(); ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="lower-content">
                                <div class="date"><?php the_time('d/m/Y'); ?></div>
                                <div class="post-meta">Autor: <?php the_author_posts_link(); ?></div>
                                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                <div class="text">
                                    <p><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                                </div>
                            </div>
                        </div>
                    </article>



                <?php } wp_reset_postdata();
                ?>
            </div>
            <a class="thm-btn" href="<?php echo site_url('/blog'); ?>">Leer todas las noticias</a>
        </div>
    </section>

    <div class="border-bottom"></div>


    <section class="call-out">
        <div class="container">
            <div class="float_left">
                <h4>Involúcrate y haz que nuestro planeta sea un lugar mejor</h4>
            </div>
            <div class="float_right">
                <a href="<?php echo site_url('/contactos') ?>" class="thm-btn style-3">Incorpórate</a>
            </div>

        </div>
    </section>

<?php
get_footer();
?>