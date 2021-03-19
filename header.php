<!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>

    <meta charset="<?php bloginfo('charset'); ?>">
<!--    <title>Eco Green || Responsive HTML 5 Template</title>-->

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php wp_head(); ?>

<!--    <link rel="stylesheet" href="assets/css/style.css">-->
<!--    <link rel="stylesheet" href="assets/css/responsive.css">-->

<!--    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/fav-icon/apple-touch-icon.png">-->
<!--    <link rel="icon" type="image/png" href="assets/images/fav-icon/favicon-32x32.png" sizes="32x32">-->
<!--    <link rel="icon" type="image/png" href="assets/images/fav-icon/favicon-16x16.png" sizes="16x16">-->

</head>
<body <?php body_class(); ?>>

<div class="boxed_wrapper">


    <div class="top-bar">
        <div class="container">
            <div class="clearfix">

                <ul class="float_left top-bar-info">
                    <li><i class="icon-phone-call"></i>Phone: (123) 0200 12345</li>
                    <li><i class="icon-e-mail-envelope"></i>Supportus@Ecogreen.com</li>
                </ul>
                <div class="right-column float_right">
                    <div id="polyglotLanguageSwitcher" class="">
                        <form action="#">
                            <select id="polyglot-language-options">
                                <option id="en" value="en" selected>Eng</option>
                                <option id="fr" value="fr">Fre</option>
                                <option id="de" value="de">Ger</option>
                                <option id="it" value="it">Ita</option>
                                <option id="es" value="es">Spa</option>
                            </select>
                        </form>
                    </div>
                    <ul class="social list_inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-feed"></i></a></li>
                    </ul>
<!--                    <button  class="thm-btn donate-box-btn">se voluntario</button>-->
                    <a  class="thm-btn" href="<?php echo site_url('/contactos'); ?>">sé voluntario</a>

                </div>


            </div>


        </div>
    </div>

    <section class="theme_menu stricky">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="main-logo">
                        <a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('/assets/images/logo/logo.png'); ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-md-9 menu-column">
                    <nav class="menuzord" id="main_menu">
                        <ul class="menuzord-menu">
                            <li><a href="<?php echo site_url() ?>"><?php echo get_the_title(40); ?></a></li>
                            <li <?php if (is_page('conocenos') or wp_get_post_parent_id(0) == 42) echo 'style="background: lightgoldenrodyellow"' ?>><a href="<?php echo get_permalink(42) ?>"><?php echo get_the_title(42) ?></a>
                                <ul class="dropdown">
                                    <?php wp_list_pages(array(
                                        'title_li' => NULL,
                                        'child_of' => 42,
                                    )) ?>
                                </ul>
                            </li>

                            <li <?php if (is_page('colabora') or wp_get_post_parent_id(0) == 50) echo 'style="background: lightgoldenrodyellow"' ?>><a href="<?php echo get_permalink(50) ?>"><?php echo get_the_title(50) ?></a>
                                <ul class="dropdown">
                                    <?php wp_list_pages(array(
                                        'title_li' => NULL,
                                        'child_of' => 50,
                                    )) ?>
                                </ul>
                            </li>

                            <li <?php if (is_page('eventos') or wp_get_post_parent_id(0) == 63) echo 'style="background: lightgoldenrodyellow"' ?>><a href="<?php echo get_permalink(63) ?>"><?php echo get_the_title(63) ?></a>
                                <ul class="dropdown">
                                    <?php wp_list_pages(array(
                                        'title_li' => NULL,
                                        'child_of' => 63,
                                    )) ?>
                                </ul>
                            </li>

                            <li  <?php if (get_post_type() === 'post') echo 'style="background: lightgoldenrodyellow"' ?>><a href="<?php echo site_url('blog') ?>">Blog</a></li>

                            <li <?php if (is_page('galeria') or wp_get_post_parent_id(0) == 71) echo 'style="background: lightgoldenrodyellow"' ?>><a href="<?php echo get_permalink(71) ?>"><?php echo get_the_title(71) ?></a>
                                <ul class="dropdown">
                                    <?php wp_list_pages(array(
                                        'title_li' => NULL,
                                        'child_of' => 71,
                                    )) ?>
                                </ul>
                            </li>

                            <li><a href="<?php echo site_url('/contactos') ?>">Contáctanos</a></li>


                        </ul>
                    </nav>
                </div>
                <div class="right-column">
                    <div class="right-area">
                        <div class="nav_side_content">
                            <div class="search_option">
                                <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                                <form action="#" class="dropdown-menu" aria-labelledby="searchDropdown">
                                    <input type="text" placeholder="Search...">
                                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


            </div>


        </div>
    </section>
