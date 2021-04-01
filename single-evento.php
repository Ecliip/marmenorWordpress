<?php
get_header();
?>
<?php
while(have_posts()) {
    the_post();
    ?>

    <div class="inner-banner has-base-color-overlay text-center" style="background: url(<?php the_post_thumbnail_url('1920_280') ?>) center; background-size: cover">
        <div class="container">
            <div class="box">
                <h1> <?php the_title(); ?></h1>
            </div>
        </div>
    </div>
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="pull-left">
                <ul class="list-inline link-list">
                    <li>
                        <a href="<?php echo site_url(); ?>">Principal</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/eventos'); ?>">Todos Eventos</a>
                    </li>

                    <li>
                        <?php the_title(); ?>
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="<?php echo site_url('/contactos') ?>" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Hazte voluntario</a>
            </div>
        </div>
    </div>



    <section class="blog-single-post blog-section">
    <div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-12">
    <div class="post-area">
        <?php

        $eventCategories = get_categories(array(
            'taxonomy' => 'category',
            'type' => 'evento',
        ));


        ?>

        <article class="default-blog-news">
            <figure class="img-holder">
<!--                <img src="--><?php //echo get_theme_file_uri('assets/images/blog/l1.jpg') ?><!--" alt="News">-->
                <img src="<?php the_post_thumbnail_url('770_430'); ?>" alt="News">
            </figure>
            <div class="lower-content">
                <?php
                $eventDate =  new DateTime(get_field('fecha_de_evento'));
                $eventHour =  new DateTime(get_field('hora_de_evento'));
                $eventLocation = get_field('sitio_de_evento');
                ?>


<!--                <div class="date">-->

                    <ul class="post-meta list_inline date" style="background: rgba(11,11,11, .6);  display: flex; flex-direction: column; color: snow">
                        <li style="margin-bottom: 1rem"><i class="fa fa-calendar"></i>&nbspEmpieza a las: <span style="font-size: 25px; font-weight: 600; color: whitesmoke"><?php echo $eventDate->format('d/M/y'); ?></span></li>
                        <li style="margin-bottom: 1rem"><i class="fa fa-clock-o"></i>&nbspEmpieza a las: <span style="font-size: 25px; font-weight: 600; color: whitesmoke"><?php echo get_field('hora_de_evento'); ?></span></li>
                        <li style="margin-bottom: 1rem"><i class="fa fa-map-marker"></i>&nbspLugar: <span style="font-size: 25px; font-weight: 600; color: whitesmoke"><?php echo $eventLocation; ?></span></li>
                    </ul>

<!--                </div>-->
<!--                TODO figure out how to add custom categories and taxonomies-->

                <h4><?php the_title(); ?></h4>
            </div>
        </article>
        <div class="content-box">
            <span class="text">
<!--                <figure style="width: 200px; height: 300px; overflow: hidden; display: flex; justify-content: center; align-items: center">-->
<!--                    --><?php //the_post_thumbnail();?>
<!--                </figure>-->
                <p> <?php the_content(); ?></p>
                <ul class="post-meta list_inline" style="background: rgba(11,11,11, .6);  display: flex; flex-direction: column; color: snow; align-items: center">
                    <li style="margin-bottom: 1rem"><i class="fa fa-calendar"></i>&nbspEmpieza a las: <span style="font-size: 25px; font-weight: 600; color: whitesmoke"><?php echo $eventDate->format('d/M/y'); ?></span></li>
                    <li style="margin-bottom: 1rem"><i class="fa fa-clock-o"></i>&nbspEmpieza a las: <span style="font-size: 25px; font-weight: 600; color: whitesmoke;"><?php echo get_field('hora_de_evento'); ?></span></li>
                    <li style="margin-bottom: 1rem"><i class="fa fa-map-marker"></i>&nbspLugar: <span style="font-size: 25px; font-weight: 600; color: whitesmoke"><?php echo $eventLocation; ?></span></li>
                </ul>
            </div>


            <div class="outer-box">

                <div class="share-box clearfix">
                    <ul class="tag-box pull-left">
                        <li>Category: </li>
                        <li><a href="#">Waste,</a></li>
                        <li><a href="#">Recycling,</a></li>
                        <li><a href="#">Energy,</a></li>
                    </ul>
                    <div class="social-box pull-right">
                        <span>Compartir <i class="fa fa-share-alt"></i></span>
                        <ul class="list-inline social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>



            </div>

        </div>

    </div>
    <div class="col-md-3 col-sm-12">
        <div class="blog-sidebar sec-padd">
            <!--                        <div class="sidebar_search">-->
            <!--                            <form action="#">-->
            <!--                                <input type="text" placeholder="Search....">-->
            <!--                                <button class="tran3s color1_bg"><i class="fa fa-search" aria-hidden="true"></i></button>-->
            <!--                            </form>-->
            <!--                        </div>-->

            <?php
            $postQuery = new WP_Query(array(
                'post_type' => 'post',
                'post_per_page' => 3,
            ));

            if ($postQuery->have_posts()) {


                ?>


                <div class="popular_news">
                    <div class="section-title style-2">
                        <h4>Últimas publicaciones</h4>
                    </div>

                    <div class="popular-post">
                        <?php
                        while ($postQuery->have_posts()) {
                            $postQuery->the_post();
                            ?>

                            <div class="item" style="display: flex; padding: 0 5px 15px; justify-content: space-between">
                                <div class="post-thumb" style="position: unset; margin-right: 15px; display: block; width: 75px; height: 75px;"><a href="<?php the_permalink(); ?>"><img style="max-width: 100%" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt=""></a></div>
                                <div style="flex: 1 1;">
                                    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                    <div class="post-info"><i class="fa fa-calendar"></i><?php the_time('d M, Y') ?></div>
                                </div>
                            </div>

                        <?php    } wp_reset_postdata(); // end while ?>
                    </div>
                </div>
            <?php } //end if ?>




            <div class="feed-area">
                <div class="section-title style-2">
                    <h4>Follow On Facebook</h4>
                </div>

            </div>

            <div class="sidebar_tags wow fadeInUp">
                <div class="section-title style-2">
                    <h4>Product Tags</h4>
                </div>

                <ul>
                    <li><a href="#" class="tran3s">T-Shirts</a></li>
                    <li><a href="#" class="tran3s"><b>Clothing</b></a></li>
                    <li><a href="#" class="tran3s">Hoodies</a></li>
                    <li><a href="#" class="tran3s">Popular Brands</a></li>
                    <li><a href="#" class="tran3s"><b>Ninja</b></a>  </li>
                    <li><a href="#" class="tran3s">Books</a></li>
                    <li><a href="#" class="tran3s"><b>Music</b></a> </li>
                    <li><a href="#" class="tran3s">Accessories</a></li>
                    <li><a href="#" class="tran3s">Cookware</a></li>
                    <li><a href="#" class="tran3s"><b>Postcard</b></a></li>
                    <li><a href="#" class="tran3s">Culinary</a></li>
                </ul>
            </div>

        </div>
    </div>

    <?php
}
?>



    </div>

    </div>
    </div>
    </section>


    <section class="call-out">
        <div class="container">
            <div class="float_left">
                <h4>Vivimos en la Tierra como si tuviéramos otra a la que ir</h4>
            </div>
            <div class="float_right">
                <a href="#" class="thm-btn style-3">Únete al movimiento</a>
            </div>

        </div>
    </section>



<?php
get_footer();
?>