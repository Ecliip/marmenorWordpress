<?php
function marmenor_assets() {
    wp_enqueue_style('marmenor_styles', get_template_directory_uri(). '/assets/css/style.css', true, '1.1', 'all');
    wp_enqueue_style('marmenor_responsive', get_template_directory_uri(). '/assets/css/responsive.css', true, '1.1', 'all');

    wp_enqueue_script('script21', get_template_directory_uri(). '/assets/js/jquery.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script22', get_template_directory_uri(). '/assets/js/bootstrap.min.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script23', get_template_directory_uri(). '/assets/js/menu.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script24', get_template_directory_uri(). '/assets/js/owl.carousel.min.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script25', get_template_directory_uri(). '/assets/js/jquery.mixitup.min.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script26', get_template_directory_uri(). '/assets/js/jquery.fancybox.pack.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script27', get_template_directory_uri(). '/assets/js/imagezoom.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script28', get_template_directory_uri(). '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script29', get_template_directory_uri(). '/assets/js/jquery.polyglot.language.switcher.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script30', get_template_directory_uri(). '/assets/js/SmoothScroll.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script31', get_template_directory_uri(). '/assets/js/jquery.appear.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script32', get_template_directory_uri(). '/assets/js/jquery.countTo.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script33', get_template_directory_uri(). '/assets/js/validation.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script34', get_template_directory_uri(). '/assets/js/wow.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script35', get_template_directory_uri(). '/assets/js/jquery.fitvids.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script36', get_template_directory_uri(). '/assets/js/nouislider.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script37', get_template_directory_uri(). '/assets/js/isotope.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script38', get_template_directory_uri(). '/assets/js/pie-chart.js', array('jquery'), '1.1', true);

    wp_enqueue_script('script1', get_template_directory_uri(). '/assets/js/rev-slider/jquery.themepunch.tools.min.js', null, null, true);
    wp_enqueue_script('script2', get_template_directory_uri(). '/assets/js/rev-slider/jquery.themepunch.revolution.min.js', null, null, true);
    wp_enqueue_script('script3', get_template_directory_uri(). '/assets/js/rev-slider/revolution.extension.actions.min.js', null, null, true);
    wp_enqueue_script('script4', get_template_directory_uri(). '/assets/js/rev-slider/revolution.extension.carousel.min.js', null, null, true);
    wp_enqueue_script('script5', get_template_directory_uri(). '/assets/js/rev-slider/revolution.extension.kenburn.min.js', null, null, true);
    wp_enqueue_script('script6', get_template_directory_uri(). '/assets/js/rev-slider/revolution.extension.layeranimation.min.js', null, null, true);
    wp_enqueue_script('script7', get_template_directory_uri(). '/assets/js/rev-slider/revolution.extension.migration.min.js', null, null, true);
    wp_enqueue_script('script8', get_template_directory_uri(). '/assets/js/rev-slider/revolution.extension.navigation.min.js', null, null, true);
    wp_enqueue_script('script9', get_template_directory_uri(). '/assets/js/rev-slider/revolution.extension.parallax.min.js', null, null, true);
    wp_enqueue_script('script10', get_template_directory_uri(). '/assets/js/rev-slider/revolution.extension.slideanims.min.js', null, null, true);
    wp_enqueue_script('script11', get_template_directory_uri(). '/assets/js/rev-slider/revolution.extension.video.min.js', null, null, true);
    wp_enqueue_script('script12', get_template_directory_uri(). '/assets/js/custom.js', null, null, true);

}

add_action('wp_enqueue_scripts', 'marmenor_assets');