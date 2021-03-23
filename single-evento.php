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
                    $eventDate = new DateTime(get_field('fecha_de_evento'));
                ?>


                <div class="date"><?php echo $eventDate->format('d/m/Y'); ?></div>
<!--                TODO figure out how to add custom categories and taxonomies-->


                <div class="post-meta">Categorías:</div>
                <div class="post-meta">Categorías: <?php echo get_the_ID(); ?></div>
                <h4><?php the_title(); ?></h4>
            </div>
        </article>
        <div class="content-box">
            <span class="text">
<!--                <figure style="width: 200px; height: 300px; overflow: hidden; display: flex; justify-content: center; align-items: center">-->
<!--                    --><?php //the_post_thumbnail();?>
<!--                </figure>-->
                <p> <?php the_content(); ?></p>
            </div>
            <div class="author">
                <!-- Image -->
                <img src="<?php echo get_theme_file_uri('assets/images/blog/author.jpg') ?>" alt="">
<!--                <img src="--><?php //the_post_thumbnail_url(); ?><!--" alt="">-->
                <div class="author-comment">
                    <div class="quote">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <p>They have got my project on time with competition seds with a highly skilled, well-organized and denouncing of pleasures experienced team of professional.</p>
                    <h5>Dohn Gaskel</h5>
                    <p class="a-title">Manager</p>
                </div>
            </div>
            <div class="text">
                <p>Know how to pursue pleasure rationally encounter consequences that are extremely painful seds or again is there anyone who loves or pursues or desires to obtain pain of itself, because seds our it pain, but because occasionally circumstances occur which toil and pain can  undertakes laborious physical exercise.</p>
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
                        <span>Share <i class="fa fa-share-alt"></i></span>
                        <ul class="list-inline social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="post-author">
                    <div class="inner-box">
                        <figure class="author-thumb"><img src="<?php echo get_theme_file_uri('assets/images/blog/author2.jpg') ?>" alt=""></figure>
                        <h4>Mark Richardson</h4>
                        <div class=""><p>We will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <ul class="list-inline social">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="comments">

                    <div class="section-title style-2">
                        <h3>Comments (2)</h3>
                    </div>

                    <div class="single-comment">
                        <div class="img-holder">
                            <img src="<?php echo get_theme_file_uri('assets/images/blog/thumb6.jpg') ?>" alt="Awesome Image">
                        </div>
                        <div class="text-holder">
                            <div class="top">
                                <div class="name pull-left">
                                    <h4>Steven Rich – Sep 17, 2016:</h4>
                                </div>
                                <div class="rating pull-right">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text">
                                <p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-comment">
                        <div class="img-holder">
                            <img src="<?php echo get_theme_file_uri('assets/images/blog/thumb7.jpg') ?>" alt="Awesome Image">
                        </div>
                        <div class="text-holder">
                            <div class="top">
                                <div class="name pull-left">
                                    <h4>William Cobus – Aug 21, 2016:</h4>
                                </div>
                                <div class="rating pull-right">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text">
                                <p>there anyone who loves or pursues or desires to obtain pain itself, because it is pain, but because occasionally circumstances occur some great pleasure.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="feedback">
                    <div class="section-title style-2">
                        <h3>Add Your comments</h3>
                    </div>

                    <p>Your Rating</p>
                    <ul class="rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                    <ul class="active rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                    <ul class="rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                    <ul class="rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                    <ul class="rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>



                </div>


                <div class="default-form-area">
                    <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post" novalidate="novalidate">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <p>Your Name *</p>
                                    <input type="text" name="form_name" class="form-control" value="" placeholder="" required="" aria-required="true">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <p>Your Mail *</p>
                                    <input type="email" name="form_email" class="form-control required email" value="" placeholder="" required="" aria-required="true">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <p>Phone</p>
                                    <input type="text" name="form_phone" class="form-control" value="" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <p>Subject</p>
                                    <input type="text" name="form_subject" class="form-control" value="" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <p>Your Comments*</p>
                                    <textarea name="form_message" class="form-control textarea required" placeholder="" aria-required="true"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="thm-btn" type="submit" data-loading-text="Please wait...">submit now</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
        <div class="col-md-3 col-sm-12">
        <div class="blog-sidebar sec-padd">
            <div class="sidebar_search">
                <form action="#">
                    <input type="text" placeholder="Search....">
                    <button class="tran3s color1_bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>

            <div class="popular_news">
                <div class="section-title style-2">
                    <h4>recent post</h4>
                </div>

                <div class="popular-post">
                    <div class="item">
                        <div class="post-thumb"><a href="blog-details.html"><img src="<?php echo get_theme_file_uri('assets/images/blog/thumb3.jpg') ?>" alt=""></a></div>
                        <a href="blog-details.html"><h4>Change the lives of 40 <br> disabled people </h4></a>
                        <div class="post-info"><i class="fa fa-calendar"></i>October 21, 2016 </div>
                    </div>
                    <div class="item">
                        <div class="post-thumb"><a href="blog-details.html"><img src="<?php echo get_theme_file_uri('assets/images/blog/thumb4.jpg') ?>" alt=""></a></div>
                        <a href="blog-details.html"><h4>Gorantalo earthquake <br> Relief Project </h4></a>
                        <div class="post-info"><i class="fa fa-calendar"></i>January 14, 2016</div>
                    </div>
                    <div class="item">
                        <div class="post-thumb"><a href="blog-details.html"><img src="<?php echo get_theme_file_uri('assets/images/blog/thumb5.jpg') ?>" alt=""></a></div>
                        <a href="blog-details.html"><h4>Used equipments can <br> treat poor patients</h4></a>
                        <div class="post-info"><i class="fa fa-calendar"></i>December 17, 2015 </div>
                    </div>
                </div>
            </div>

            <div class="sidebar-archive">
                <div class="section-title style-2">
                    <h4>Blog Archives</h4>
                </div>
                <select class="text-capitalize selectpicker" name="form_subject" data-style="g-select" data-width="100%">
                    <option value="0" selected="">September</option>
                    <option value="1">August</option>
                    <option value="2">November</option>
                    <option value="3">December</option>
                </select>
            </div>

            <div class="sidebar-intsgram">
                <div class="section-title style-2">
                    <h4>Instagram</h4>
                </div>
                <ul class="list-inline clearfix">
                    <li>
                        <div class="inner-box">
                            <img src="<?php echo get_theme_file_uri('assets/images/blog/i1.jpg') ?>" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div><!-- /.content -->
                                </div><!-- /.box -->
                            </div><!-- /.overlay -->
                        </div>
                    </li>
                    <li>
                        <div class="inner-box">
                            <img src="<?php echo get_theme_file_uri('assets/images/blog/i2.jpg') ?>" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div><!-- /.content -->
                                </div><!-- /.box -->
                            </div><!-- /.overlay -->
                        </div>
                    </li>
                    <li>
                        <div class="inner-box">
                            <img src="<?php echo get_theme_file_uri('assets/images/blog/i3.jpg') ?>" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div><!-- /.content -->
                                </div><!-- /.box -->
                            </div><!-- /.overlay -->
                        </div>
                    </li>
                    <li>
                        <div class="inner-box">
                            <img src="<?php echo get_theme_file_uri('assets/images/blog/i4.jpg') ?>" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div><!-- /.content -->
                                </div><!-- /.box -->
                            </div><!-- /.overlay -->
                        </div>
                    </li>
                    <li>
                        <div class="inner-box">
                            <img src="<?php echo get_theme_file_uri('assets/images/blog/i5.jpg') ?>" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div><!-- /.content -->
                                </div><!-- /.box -->
                            </div><!-- /.overlay -->
                        </div>
                    </li>
                    <li>
                        <div class="inner-box">
                            <img src="<?php echo get_theme_file_uri('assets/images/blog/i6.jpg') ?>" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div><!-- /.content -->
                                </div><!-- /.box -->
                            </div><!-- /.overlay -->
                        </div>
                    </li>
                    <li>
                        <div class="inner-box">
                            <img src="<?php echo get_theme_file_uri('assets/images/blog/i7.jpg') ?>" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div><!-- /.content -->
                                </div><!-- /.box -->
                            </div><!-- /.overlay -->
                        </div>
                    </li>
                    <li>
                        <div class="inner-box">
                            <img src="<?php echo get_theme_file_uri('assets/images/blog/i8.jpg') ?>" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div><!-- /.content -->
                                </div><!-- /.box -->
                            </div><!-- /.overlay -->
                        </div>
                    </li>
                    <li>
                        <div class="inner-box">
                            <img src="<?php echo get_theme_file_uri('assets/images/blog/i9.jpg') ?>" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div><!-- /.content -->
                                </div><!-- /.box -->
                            </div><!-- /.overlay -->
                        </div>
                    </li>

                </ul>
            </div>


            <div class="feed-area">
                <div class="section-title style-2">
                    <h4>Follow On Facebook</h4>
                </div>
                <div class="facebook-feed">
                    <figure class="img-box">
                        <img src="<?php echo get_theme_file_uri('assets/images/blog/feedbg.jpg') ?>" alt="">
                        <div class="overlay">
                            <div class="inner-box">
                                <div class="logo"><img src="<?php echo get_theme_file_uri('assets/images/logo/1.jpg') ?>" alt=""></div>
                                <h4>The Ecogreen</h4>
                                <div class="like">890 likes</div>
                            </div>
                            <div class="link clearfix">
                                <a href="#" class="float_left"><i class="fa fa-facebook fb-icon"></i>Like page</a>
                                <a href="contact.html" class="float_right"><i class="fa fa-envelope mail"></i>contact us</a>
                            </div>
                        </div>
                    </figure>
                    <div class="like-people">
                        <p>Be the first of your friends to like this</p>
                        <ul class="list_inline">
                            <li><a href="#"><img src="<?php echo get_theme_file_uri('assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_theme_file_uri('assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_theme_file_uri('assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_theme_file_uri('assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_theme_file_uri('assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_theme_file_uri('assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_theme_file_uri('assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_theme_file_uri('assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                        </ul>
                    </div>

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