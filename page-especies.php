<?php
get_header();
?>

    <div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/4.jpg);">
        <div class="container" >
            <div class="box">
                <h1>Gallery Grid View</h1>
            </div>
        </div>
    </div>
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="pull-left">
                <ul class="list-inline link-list" style="display: block">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="gallery-1.html">gallery</a>
                    </li>

                    <li>
                        Gallery Grid View
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
            </div>
        </div>
    </div>


    <section class="gallery sec-padd style-2 grid-page">
        <div class="container" style="display: flex; flex-direction: column">

            <ul class="post-filter style-2 list-inline float_left">
                <li class="active" data-filter=".filter-item">
                    <span>View All</span>
                </li>
                <li data-filter=".Ecology">
                    <span>Ecology</span>
                </li>
                <li data-filter=".Wild-Animals">
                    <span>Wild Animals</span>
                </li>
                <li data-filter=".Recycling">
                    <span>Recycling</span>
                </li>
                <li data-filter=".Water">
                    <span>Water</span>
                </li>
                <li data-filter=".Pollution">
                    <span>Pollution</span>
                </li>
            </ul>

            <div class="row filter-layout" style="display: flex; flex-direction: row; flex-wrap: wrap;">

                <?php
                $args = array(
                    'post_status' => 'inherit',
                    'posts_per_page' => 8,
                    'post_type' => 'attachment',
                    'paged' => get_query_var('paged', 1),

                );

                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'categoria-galeria',
                        'terms' => array( 'especies' ),
                        'field' => 'slug',
                    ),
                );

                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();  ?>


                        <article class="col-md-3 col-sm-6 col-xs-12 filter-item Water">
                            <div class="item">
                                <div class="img-box">
                                    <?php
                                    $theImageSm = wp_get_attachment_image_url( get_the_ID(), $size ='570_300' );
                                    $theImageBig = wp_get_attachment_image_url( get_the_ID(), $size ='original' );
                                    ?>
                                    <img src="<?php echo $theImageSm ?>" alt="">
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <div class="content-box">
                                                <a data-group="1" href="<?php echo $theImageBig ?>" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                                <a target="_blank" href="<?php echo $theImageBig?>"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content center">
                                    <h4><?php echo get_the_title(get_the_ID()) ?></h4>
<!--                                    <p>Pollution</p>-->
                                </div>
                            </div>
                        </article>

                    <?php }
                    ?>



                <?php } ?>






            </div>
            <ul class="page_pagination center">
                <!--            <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>-->
                <!--            <li><a href="#" class="active tran3s">1</a></li>-->
                <!--            <li><a href="#" class="tran3s">2</a></li>-->
                <!--            <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>-->

                <? echo paginate_links(array(
                    'total' => $the_query->max_num_pages
                )); ?>
            </ul>
        </div>
    </section>



    <section class="call-out">
        <div class="container">
            <div class="float_left">
                <h4>Join Our Mission to Improve a Child's Feature, Pet’s Life and Our Planet.</h4>
            </div>
            <div class="float_right">
                <a href="#" class="thm-btn style-3">Get Involeved</a>
            </div>

        </div>
    </section>



<?php
get_footer();
?>