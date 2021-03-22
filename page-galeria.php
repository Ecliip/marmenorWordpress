<?php
$args = array(
    'post_status' => 'inherit',
    'posts_per_page' => 2,
    'post_type' => 'attachment',
);

$args['tax_query'] = array(
    array(
        'taxonomy' => 'categoria-galeria',
        'terms' => array( 'especies' ),
        'field' => 'marmenor_galeria',
    ),
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo wp_get_attachment_image( get_the_ID(), $size='thumbnail' );
    }
}

/* Restore original Post Data */
wp_reset_postdata();