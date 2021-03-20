<?php
get_header();
?>

    <div class="inner-banner has-base-color-overlay text-center" style="background: url(<?php echo get_theme_file_uri('/assets/images/background/4.jpg') ?>);">
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
                <a href="#" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Hazte voluntario</a>
            </div>
        </div>
    </div>



    <section class="blog-large blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="post-area">


                        <?php
                        while(have_posts()) {
                            the_post();
                            ?>

                            <article class="default-blog-news wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                                <figure class="img-holder">
                                    <a href="<?php the_permalink()?>"><img src="<?php echo get_theme_file_uri('/assets/images/blog/l1.jpg') ?>" alt="News"></a>
                                    <figcaption class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="<?php the_permalink()?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="lower-content">
                                    <?php $eventDate = new DateTime(get_field('fecha_de_evento')) ?>

                                    <div class="date"><?php  echo $eventDate->format('d/m/Y'); ?></div>
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
                                    <div class="post-thumb"><a href="blog-details.html"><img src="<?php echo get_theme_file_uri('/assets/images/blog/thumb3.jpg') ?>" alt=""></a></div>
                                    <a href="blog-details.html"><h4>Change the lives of 40 <br> disabled people </h4></a>
                                    <div class="post-info"><i class="fa fa-calendar"></i>October 21, 2016 </div>
                                </div>
                                <div class="item">
                                    <div class="post-thumb"><a href="blog-details.html"><img src="<?php echo get_theme_file_uri('/assets/images/blog/thumb4.jpg') ?>" alt=""></a></div>
                                    <a href="blog-details.html"><h4>Gorantalo earthquake <br> Relief Project </h4></a>
                                    <div class="post-info"><i class="fa fa-calendar"></i>January 14, 2016</div>
                                </div>
                                <div class="item">
                                    <div class="post-thumb"><a href="blog-details.html"><img src="<?php echo get_theme_file_uri('/assets/images/blog/thumb5.jpg') ?>" alt=""></a></div>
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
                                        <img src="<?php echo get_theme_file_uri('/assets/images/blog/i1.jpg') ?>" alt="Awesome Image">
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
                                        <img src="<?php echo get_theme_file_uri('/assets/images/blog/i2.jpg') ?>" alt="Awesome Image">
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
                                        <img src="<?php echo get_theme_file_uri('/assets/images/blog/i3.jpg') ?>" alt="Awesome Image">
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
                                        <img src="<?php echo get_theme_file_uri('/assets/images/blog/i4.jpg') ?>" alt="Awesome Image">
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
                                        <img src="<?php echo get_theme_file_uri('/assets/images/blog/i5.jpg') ?>" alt="Awesome Image">
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
                                        <img src="<?php echo get_theme_file_uri('/assets/images/blog/i6.jpg') ?>" alt="Awesome Image">
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
                                        <img src="<?php echo get_theme_file_uri('/assets/images/blog/i7.jpg') ?>" alt="Awesome Image">
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
                                        <img src="<?php echo get_theme_file_uri('/assets/images/blog/i8.jpg') ?>" alt="Awesome Image">
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
                                        <img src="<?php echo get_theme_file_uri('/assets/images/blog/i9.jpg') ?>" alt="Awesome Image">
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
                                    <img src="<?php echo get_theme_file_uri('/assets/images/blog/feedbg.jpg') ?>" alt="">
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <div class="logo"><img src="<?php echo get_theme_file_uri('/assets/images/logo/1.jpg') ?>" alt=""></div>
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
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/blog/p1.jpg') ?>" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/blog/p1.jpg') ?>" alt=""></a></li>
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