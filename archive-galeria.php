<?php
get_header();
?>

<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/4.jpg);">
    <div class="container">
        <div class="box">
            <h1>Gallery Grid View</h1>
        </div>
    </div>
</div>
<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
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
    <div class="container">

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

        <div class="row filter-layout">

<?php while(have_posts()) {
    the_post();
    // arguments for get_posts
    $args = array(
        'post_status' => 'null',
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'orderby' => 'post_date',
        'post_parent' => get_the_ID(),
        'showposts' => 4 );
//    $attachment_args = array(
//        'showposts' => 4,
//        'post_type' => 'attachment',
//        'post_mime_type' => 'image',
//        'post_status' => null, // attachments don't have statuses
//        'post_parent' => get_the_ID(),
//        'orderby' => 'post_date',
//    );

    $this_posts_attachments = get_posts( $args );

    foreach ($this_posts_attachments as $attachment) { ?>

<!--        --><?php //echo wp_get_attachment_url( $attachment->ID ) ?>


        <article class="col-md-3 col-sm-6 col-xs-12 filter-item Water">
            <div class="item">
                <div class="img-box">
                    <?php
                        $theImageSm = wp_get_attachment_image_src( $attachment->ID, $size ='570_300' );
                        $theImageBig = wp_get_attachment_image_src( $attachment->ID, $size ='770_430' );
                    ?>
                    <img src="<?php echo $theImageSm[0] ?>" alt="">
                    <div class="overlay">
                        <div class="inner-box">
                            <div class="content-box">
                                <a data-group="1" href="<?php echo $theImageBig[0] ?>" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                <a href="single-gallery.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content center">
                    <h4><?php echo get_the_title($attachment->ID) ?></h4>
                    <p>Pollution</p>
                </div>
            </div>
        </article>

   <?php }
    ?>



<?php } ?>









<!--            <article class="col-md-3 col-sm-6 col-xs-12 filter-item Wild-Animals Pollution Recycling">-->
<!--                <div class="item">-->
<!--                    <div class="img-box">-->
<!--                        <img src="images/project/2.jpg" alt="">-->
<!--                        <div class="overlay">-->
<!--                            <div class="inner-box">-->
<!--                                <div class="content-box">-->
<!--                                    <a data-group="1" href="images/project/2.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a>-->
<!--                                    <a href="single-gallery.html"><i class="fa fa-link"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="content center">-->
<!--                        <h4>Windmill Power</h4>-->
<!--                        <p>Ecology, Recycling</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--            <article class="col-md-3 col-sm-6 col-xs-12 filter-item Wild-Animals Pollution Ecology Recycling">-->
<!--                <div class="item">-->
<!--                    <div class="img-box">-->
<!--                        <img src="images/project/3.jpg" alt="">-->
<!--                        <div class="overlay">-->
<!--                            <div class="inner-box">-->
<!--                                <div class="content-box">-->
<!--                                    <a data-group="1" href="images/project/3.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a>-->
<!--                                    <a href="single-gallery.html"><i class="fa fa-link"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="content center">-->
<!--                        <h4>Save White Tiger</h4>-->
<!--                        <p>Wild Animals</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--            <article class="col-md-3 col-sm-6 col-xs-12 filter-item Wild-Animals Pollution Water">-->
<!--                <div class="item">-->
<!--                    <div class="img-box">-->
<!--                        <img src="images/project/4.jpg" alt="">-->
<!--                        <div class="overlay">-->
<!--                            <div class="inner-box">-->
<!--                                <div class="content-box">-->
<!--                                    <a data-group="1" href="images/project/4.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a>-->
<!--                                    <a href="single-gallery.html"><i class="fa fa-link"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="content center">-->
<!--                        <h4>Wiliwili Recycling</h4>-->
<!--                        <p>Recycling</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--            <article class="col-md-3 col-sm-6 col-xs-12 filter-item Wild-Animals Pollution Water">-->
<!--                <div class="item">-->
<!--                    <div class="img-box">-->
<!--                        <img src="images/project/5.jpg" alt="">-->
<!--                        <div class="overlay">-->
<!--                            <div class="inner-box">-->
<!--                                <div class="content-box">-->
<!--                                    <a data-group="1" href="images/project/5.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a>-->
<!--                                    <a href="single-gallery.html"><i class="fa fa-link"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="content center">-->
<!--                        <h4>Plant Challenge</h4>-->
<!--                        <p>Ecology</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--            <article class="col-md-3 col-sm-6 col-xs-12 filter-item Pollution Ecology Recycling">-->
<!--                <div class="item">-->
<!--                    <div class="img-box">-->
<!--                        <img src="images/project/6.jpg" alt="">-->
<!--                        <div class="overlay">-->
<!--                            <div class="inner-box">-->
<!--                                <div class="content-box">-->
<!--                                    <a data-group="1" href="images/project/6.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a>-->
<!--                                    <a href="single-gallery.html"><i class="fa fa-link"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="content center">-->
<!--                        <h4>Natural Breathing</h4>-->
<!--                        <p>Ecology, Recycling</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--            <article class="col-md-3 col-sm-6 col-xs-12 filter-item Wild-Animals Pollution Ecology Recycling">-->
<!--                <div class="item">-->
<!--                    <div class="img-box">-->
<!--                        <img src="images/project/7.jpg" alt="">-->
<!--                        <div class="overlay">-->
<!--                            <div class="inner-box">-->
<!--                                <div class="content-box">-->
<!--                                    <a data-group="1" href="images/project/7.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a>-->
<!--                                    <a href="single-gallery.html"><i class="fa fa-link"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="content center">-->
<!--                        <h4>Reduced Littering</h4>-->
<!--                        <p>Water, Pollution</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--            <article class="col-md-3 col-sm-6 col-xs-12 filter-item Wild-Animals Pollution Water">-->
<!--                <div class="item">-->
<!--                    <div class="img-box">-->
<!--                        <img src="images/project/8.jpg" alt="">-->
<!--                        <div class="overlay">-->
<!--                            <div class="inner-box">-->
<!--                                <div class="content-box">-->
<!--                                    <a data-group="1" href="images/project/8.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a>-->
<!--                                    <a href="single-gallery.html"><i class="fa fa-link"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="content center">-->
<!--                        <h4>Innovation Effort</h4>-->
<!--                        <p>Recycling</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--            <article class="col-md-3 col-sm-6 col-xs-12 filter-item Wild-Animals Pollution Water">-->
<!--                <div class="item">-->
<!--                    <div class="img-box">-->
<!--                        <img src="images/project/9.jpg" alt="">-->
<!--                        <div class="overlay">-->
<!--                            <div class="inner-box">-->
<!--                                <div class="content-box">-->
<!--                                    <a data-group="1" href="images/project/9.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a>-->
<!--                                    <a href="single-gallery.html"><i class="fa fa-link"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="content center">-->
<!--                        <h4>Protecting Nature</h4>-->
<!--                        <p>Recycling, Water</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--            <article class="col-md-3 col-sm-6 col-xs-12 filter-item Wild-Animals Pollution Ecology Recycling">-->
<!--                <div class="item">-->
<!--                    <div class="img-box">-->
<!--                        <img src="images/project/10.jpg" alt="">-->
<!--                        <div class="overlay">-->
<!--                            <div class="inner-box">-->
<!--                                <div class="content-box">-->
<!--                                    <a data-group="1" href="images/project/10.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a>-->
<!--                                    <a href="single-gallery.html"><i class="fa fa-link"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="content center">-->
<!--                        <h4>Fresh Air Solution</h4>-->
<!--                        <p>Water, Pollution</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--            <article class="col-md-3 col-sm-6 col-xs-12 filter-item Wild-Animals Pollution Ecology Recycling">-->
<!--                <div class="item">-->
<!--                    <div class="img-box">-->
<!--                        <img src="images/project/11.jpg" alt="">-->
<!--                        <div class="overlay">-->
<!--                            <div class="inner-box">-->
<!--                                <div class="content-box">-->
<!--                                    <a data-group="1" href="images/project/11.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a>-->
<!--                                    <a href="single-gallery.html"><i class="fa fa-link"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="content center">-->
<!--                        <h4>Cooling Products</h4>-->
<!--                        <p>Ecology</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--            <article class="col-md-3 col-sm-6 col-xs-12 filter-item Wild-Animals Pollution Water">-->
<!--                <div class="item">-->
<!--                    <div class="img-box">-->
<!--                        <img src="images/project/12.jpg" alt="">-->
<!--                        <div class="overlay">-->
<!--                            <div class="inner-box">-->
<!--                                <div class="content-box">-->
<!--                                    <a data-group="1" href="images/project/12.jpg" class="img-popup"><i class="fa fa-search-plus"></i></a>-->
<!--                                    <a href="single-gallery.html"><i class="fa fa-link"></i></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="content center">-->
<!--                        <h4>Clean Power Plan</h4>-->
<!--                        <p>Ecology</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
        </div>
        <ul class="page_pagination center">
<!--            <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>-->
<!--            <li><a href="#" class="active tran3s">1</a></li>-->
<!--            <li><a href="#" class="tran3s">2</a></li>-->
<!--            <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>-->

            <? echo paginate_links(); ?>
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
