<?php

get_header();
$args = array(
    'post_type' => 'post'
);
$post_query = new WP_Query($args);
if($post_query->have_posts()) : ?>

    <h2>Search results for: <?php the_search_query(); ?></h2>

    <?php
    while (have_posts()) : the_post();

        get_template_part('content', get_post_format());

    endwhile;

else :
    echo '<p>No Content found</p>';
endif;

get_footer();

?>