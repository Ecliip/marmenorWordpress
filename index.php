<?php
get_header();
?>

<div class="inner-banner has-base-color-overlay text-center" style="background: url(<?php echo get_theme_file_uri('/assets/images/background/sea-surface.jpg') ?>);">
    <div class="container">
        <div class="box">
            <h1>Sigue las últimas noticias</h1>
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
                    Blog
                </li>
            </ul>
        </div>
        <div class="pull-right">
            <a href="<?php echo site_url('/contactos') ?>" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Haz volntariado</a>
        </div>
    </div>
</div>



<section class="all-blog blog-section sec-padd">
    <div class="container">
        <div class="row">
            <?php while(have_posts()) {
                the_post(); ?>
                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="default-blog-news wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                        <figure class="img-holder">
                            <a href="blog-details.html"><img src="<?php echo the_post_thumbnail_url('570_300') ?>" alt="News"></a>
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="<?php the_permalink() ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <div class="date"><?php the_time('d/m/Y'); ?></div>
<!--                            <div class="post-meta">by --><?php //the_author_posts_link(); ?><!--  |  14 Comments</div>-->
                            <div class="post-meta">Autor: <?php the_author_posts_link(); ?></div>
                            <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                            <div class="text">
                                <p><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                            </div>
                            <p>Categorías: <?php echo get_the_category_list(', ') ?></p>
                        </div>
                    </div>

                </article>

           <?php } wp_reset_postdata();


           ?>


        </div>

        <ul class="page_pagination center">
            <!--        // TODO add styling later https://developer.wordpress.org/reference/functions/paginate_links/-->
            <? echo paginate_links(); ?>
<!--            <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>-->
<!--            <li><a href="#" class="active tran3s">1</a></li>-->
<!--            <li><a href="#" class="tran3s">2</a></li>-->
<!--            <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>-->
        </ul>
    </div>
</section>


<section class="call-out">
    <div class="container">
        <div class="float_left">
            <h4>Si piensas que, no tendremos una sociedad si destruimos el medio ambiente, entonces</h4>
        </div>
        <div class="float_right">
            <a href="<?php echo site_url('contactos') ?>" class="thm-btn style-3">Contáctanos</a>
        </div>
                
    </div>
</section>

<?php
get_footer();
?>