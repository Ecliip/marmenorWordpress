<?php
get_header();

while(have_posts()) {
    the_post(); ?>
    <div class="inner-banner has-base-color-overlay text-center" style="background: url(<?php the_post_thumbnail_url('1920_280');?> );">
        <div class="container">
            <div class="box">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="pull-left">
                <!--                LINKS UNCOMMENT LATER-->
                <?php
                $parentID = wp_get_post_parent_id(get_the_ID());
                if ($parentID) { ?>
                    <ul class="list-inline link-list">
                        <li>
                            <a href="<?php echo site_url(); ?>">Home</a>
                        </li>

                        <li>
                            <a href="<?php echo get_permalink($parentID) ?>"><?php echo get_the_title($parentID) ?></a>
                        </li>

                        <li>
                            <?php the_title() ?>
                        </li>
                    </ul>
                <?php  } else { ?>
                    <ul class="list-inline link-list">
                        <li>
                            <a href="<?php echo site_url() ?>">Inicio</a>
                        </li>

                        <li>
                            <?php the_title() ?>
                        </li>
                    </ul>
                <?php } ?>

            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
            </div>
        </div>
    </div>


    <section class="about sec-padd2">
        <div class="container">


            <div class="section-title center">
                <h2><?php the_title(); ?></h2>
                <p><?php the_field('subtitulo') ?></p>
            </div>
            <div class="row" style="display: flex;  align-items: center; flex-wrap: wrap; width: 100vw;">

                <!--CHILD PAGES BLOCK-->
                <?php
                $pages = get_pages(array(
                    'child_of' => get_the_ID()
                ));
                if ($parentID or $pages) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-12" style="flex: 0 1 300px; margin-right: 20px">
                        <div class="default-sidebar">
                            <h2 style="margin-bottom: 20px"><a href="<?php echo get_permalink($parentID) ?>"><?php echo get_the_title($parentID) ?></a></h2>
                            <ul class="service-catergory">

                                <?php if ($parentID) {
                                    $findChildrenOf = $parentID;
                                } else {
                                    $findChildrenOf = get_the_ID();
                                }?>

                                <?php wp_list_pages(array(
                                    'title_li' => NULL,
                                    'child_of' => $findChildrenOf,
                                )) ?>
<!--                                                            <li><a href="--><?php //echo site_url('../especies') ?><!--">Especies</a></li>-->
<!--                                                            <li><a href="--><?php //echo site_url('../infografias') ?><!--">Infografías</a></li>-->
<!--                                                            <li><a href="Save-Water.html">Save Water</a></li>-->
<!--                                                            <li><a href="Save-Animals.html">Save Animals</a></li>-->
<!--                                                            <li><a href="Organic-Living.html">Organic Living</a></li>-->
<!--                                                            <li><a href="Good-Nature.html">Good Nature</a></li>-->
                            </ul>
                            <!--                        <div class="link"><a href="#" class="thm-btn style-2">Become a Volunteer</a></div>-->
                        </div>
                    </div>
                    <?php
                    wp_reset_query(); // this function fixes a bug...
                } ?>
                <!--END CHILD PAGES BLOCK-->

                <!--                <div class="col-md-6 col-sm-12" style="display: flex; justify-content: center; width: 100%; flex: 1 1 300px">-->
                <!--                    <iframe src="https://player.vimeo.com/video/9519939" width="570" height="350" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen autoplay></iframe>-->
                <!--                </div>-->


                <figure class="img-holder" style="margin-bottom: 20px;">
                    <!--                <img src="--><?php //echo get_theme_file_uri('assets/images/blog/l1.jpg') ?><!--" alt="News">-->
                    <img src="<?php the_post_thumbnail_url('770_430'); ?>" alt="News">
                </figure>
            </div>
            <div class="row" style="display: flex; flex-direction: column; align-items: center; justify-content: center">
                <div class="link" style="margin-bottom: 2rem"><a href="#" class="thm-btn style-2">Become a Volunteer</a></div>
                <div class="col-md-6 col-sm-6 col-xs-12">


                    <div class="content">
                        <!--                        <h2>Together we can make a difference</h2>-->

                        <div class="text">
                            <?php the_content(); ?>
                        </div>
                        <h4>Our Partner</h4>
                        <div class="text">
                            <p>We partner with over 320 amazing projects worldwide, and have given over $150 million in cash and product grants to other groups since 2011. We also operate our own dynamic suite of Signature Programs.</p>
                        </div>

                    </div>
                </div>
                <div class="link"><a href="#" class="thm-btn style-2">Join With Us</a></div>
            </div>
        </div>
    </section>
    <div class="border-bottom"></div>
    <section class="our-team sec-padd2">
        <div class="container">
            <div class="section-title">
                <h2>Meat Our team</h2>
                <a href="#" class="thm-btn style-2">VIEW ALL</a>
            </div>
            <div class="row">
                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-team-member">
                        <figure class="img-box">
                            <a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/team/t1.jpg')?> " alt=""></a>
                            <div class="overlay">
                                <div class="inner-box">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </figure>
                        <div class="author-info">
                            <a href="#"><h4>Felicity BNovak</h4></a>
                            <p>CEO & Founder</p>
                            <ul>
                                <li><i class="fa fa-phone-square"></i>Phone: +123-456-7890</li>
                                <li><i class="fa fa-envelope-square"></i><a href="#">Felicity@Experts.com</a></li>
                            </ul>
                        </div>

                    </div>
                </article>
                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-team-member">
                        <figure class="img-box">
                            <a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/team/t2.jpg')?> " alt=""></a>
                            <div class="overlay">
                                <div class="inner-box">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </figure>
                        <div class="author-info">
                            <a href="#"><h4>Mark Richarson</h4></a>
                            <p>Board of Trustee</p>
                            <ul>
                                <li><i class="fa fa-phone-square"></i>Phone: +123-456-7890</li>
                                <li><i class="fa fa-envelope-square"></i><a href="#">Felicity@Experts.com</a></li>
                            </ul>
                        </div>

                    </div>
                </article>
                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-team-member">
                        <figure class="img-box">
                            <a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/team/t3.jpg')?> " alt=""></a>
                            <div class="overlay">
                                <div class="inner-box">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </figure>
                        <div class="author-info">
                            <a href="#"><h4>Jom Caraleno</h4></a>
                            <p>Board of Trustee</p>
                            <ul>
                                <li><i class="fa fa-phone-square"></i>Phone: +123-456-7890</li>
                                <li><i class="fa fa-envelope-square"></i><a href="#">Felicity@Experts.com</a></li>
                            </ul>
                        </div>

                    </div>
                </article>
                <article class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-team-member">
                        <figure class="img-box">
                            <a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/team/t4.jpg')?> " alt=""></a>
                            <div class="overlay">
                                <div class="inner-box">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </figure>
                        <div class="author-info">
                            <a href="#"><h4>Asahtan Marsh</h4></a>
                            <p>Board of Advisor</p>
                            <ul>
                                <li><i class="fa fa-phone-square"></i>Phone: +123-456-7890</li>
                                <li><i class="fa fa-envelope-square"></i><a href="#">Felicity@Experts.com</a></li>
                            </ul>
                        </div>

                    </div>
                </article>

            </div>
        </div>

    </section>

    <section class="why-chooseus style-2 sec-padd-top" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/background/9.jpg')?> );">
        <div class="container">

            <div class="col-md-8 col-md-offset-4 col-sm-12">
                <div class="section-title">
                    <h2>Why Choose Us</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
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
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="item">
                            <div class="inner-box">
                                <!--icon-box-->
                                <div class="icon_box">
                                    <span class="icon-people-1"></span>
                                </div>
                                <a href="#"><h4>Goodwill Volunteers</h4></a>
                            </div>
                            <div class="text"><p>Your contrbution used locally to help charitable causes and support the organization, Support only for good causes.  </p></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="item">
                            <div class="inner-box">
                                <!--icon-box-->
                                <div class="icon_box">
                                    <span class="icon-medal"></span>
                                </div>
                                <a href="3"><h4>Certified Campaign</h4></a>
                            </div>
                            <div class="text"><p>Your contrbution used locally to help charitable causes and support the organization, Support only for good causes.  </p></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="item">
                            <div class="inner-box">
                                <!--icon-box-->
                                <div class="icon_box">
                                    <span class="icon-shapes"></span>
                                </div>
                                <a href="#"><h4>20 Years Experince</h4></a>
                            </div>
                            <div class="text"><p>Your contrbution used locally to help charitable causes and support the organization, Support only for good causes.  </p></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="testimonials-section2 sec-padd" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/background/10.jpg')?> );">
        <div class="container">

            <div class="section-title center">
                <h1>What People Say About Us</h1>
            </div>

            <!--Slider-->
            <div class="testimonials-slider2">

                <!--Slide-->
                <article class="slide-item center">

                    <div class="slide-text">
                        <span class="icon-null"></span>
                        <p>Explain to you how all this mistaken idea <br>denouncing pleasure and praising pain was <br>born and I will give you a complete.</p>
                    </div>
                    <ul class="rating">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <div class="author">
                        <h4>Astley Jenifer</h4>
                        <p>California</p>
                    </div>
                </article>
                <!--Slide-->
                <article class="slide-item center">

                    <div class="slide-text">
                        <span class="icon-null"></span>
                        <p>How all this mistaken idea of denouncing <br>pleasure and praising pain was born and I will  <br>expound the actual teachings.</p>
                    </div>
                    <ul class="rating">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star-half-o"></i></li>
                    </ul>
                    <div class="author">
                        <h4>Nathan Duckvat</h4>
                        <p>Nawyork</p>
                    </div>
                </article>
                <!--Slide-->
                <article class="slide-item center">

                    <div class="slide-text">
                        <span class="icon-null"></span>
                        <p> Denouncing pleasure and praising pain was <br>born and I will give you a complete and <br>builder of human happiness.</p>
                    </div>
                    <ul class="rating">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <div class="author">
                        <h4>Stephen Jimmy</h4>
                        <p>Los Angeles</p>
                    </div>
                </article>


            </div>

            <div class="donate-us center">
                <h2>We are ECO Green, Our Mission is <span class="thm-color"> save water, animals and environment</span> <br>our activities are taken around the world.</h2><br>
                <button class="thm-btn donate-box-btn">donate now</button>
            </div>

        </div>
    </section>




    <div class="border-bottom"></div>

    <section class="clients-section sec-padd">
        <div class="container">
            <div class="section-title center">
                <h2>our partners</h2>
            </div>
            <div class="client-carousel owl-carousel owl-theme">

                <div class="item tool_tip" title="media partner">
                    <img src="<?php echo get_theme_file_uri('/assets/images/clients/1.jpg')?> " alt="Awesome Image">
                </div>
                <div class="item tool_tip" title="media partner">
                    <img src="<?php echo get_theme_file_uri('/assets/images/clients/2.jpg')?> " alt="Awesome Image">
                </div>
                <div class="item tool_tip" title="media partner">
                    <img src="<?php echo get_theme_file_uri('/assets/images/clients/3.jpg')?> " alt="Awesome Image">
                </div>
                <div class="item tool_tip" title="media partner">
                    <img src="<?php echo get_theme_file_uri('/assets/images/clients/4.jpg')?> " alt="Awesome Image">
                </div>
                <div class="item tool_tip" title="media partner">
                    <img src="<?php echo get_theme_file_uri('/assets/images/clients/5.jpg')?> " alt="Awesome Image">
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
} wp_reset_postdata();


get_footer();
?>