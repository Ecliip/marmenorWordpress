<?php
get_header();
?>

    <div class="inner-banner has-base-color-overlay text-center" style="background: url(<?php echo get_theme_file_uri('/assets/images/background/sea-surface.jpg') ?> );">
        <div class="container">
            <div class="box">
                <h1>Todos los eventos</h1>
            </div>
        </div>
    </div>
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="pull-left">
                <ul class="list-inline link-list">
                    <li>
                        <a href="<?php echo site_url(); ?>">Inicio</a>
                    </li>
                    <li>
                        Eventos
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="<?php echo site_url('/contactos') ?>" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Haz volntariado</a>
            </div>
        </div>
    </div>



    <section class="blog-large blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="post-area">


                        <?php
//                        $eventsOrdered = new WP_Query(array(
//                            'meta_key' => 'fecha_de_evento',
//                            'orderedby' => 'meta_value_num',
//                            'post_type' => 'evento',
//                            'order' => 'ASC',
//                        ));

                        while(have_posts()) {
                            the_post();
                            ?>

                            <article class="default-blog-news wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                                <figure class="img-holder">
<!--                                    <a href="--><?php //the_permalink()?><!--"><img src="--><?php //echo get_theme_file_uri('/assets/images/blog/l1.jpg') ?><!--" alt="News"></a>-->
                                    <a href="<?php the_permalink()?>"><img src="<?php the_post_thumbnail_url('770_430'); ?>" alt="News"></a>
                                    <figcaption class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="<?php the_permalink()?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </figcaption>
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
                                    <a href="<?php the_permalink()?>"><h4><?php the_title(); ?></h4></a>
                                    <div class="text">
                                        <p><?php echo wp_trim_words(get_the_content(), 100) ?></p>
                                    </div>
                                    </div>
                            </article>


                    <?php } wp_reset_postdata();

                        ?>





                        <ul class="page_pagination center">
<!--TODO style pagination-->
                            <? echo paginate_links(); ?>

<!--                            <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>-->
<!--                            <li><a href="#" class="active tran3s">1</a></li>-->
<!--                            <li><a href="#" class="tran3s">2</a></li>-->
<!--                            <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>-->
                        </ul>
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
                                <h4>??ltimas publicaciones</h4>
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

            </div>
        </div>
    </section>



    <section class="call-out">
        <div class="container">
            <div class="float_left">
                <h4>??Qu?? ser??a la juventud sin el mar? ??Conserv??moslo para las generaciones futuras!</h4>
            </div>
            <div class="float_right">
                <a href="<?php echo site_url('contactos'); ?>" class="thm-btn style-3">Participar</a>
            </div>

        </div>
    </section>

<?php
get_footer();
?>