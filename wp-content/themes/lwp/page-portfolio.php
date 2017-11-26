<?php

get_header(); ?>

    <h3 style="color: deeppink;"><u>Displays page called as its slug name portfolio</u></h3>

<?php
$args = array(
    'post_type' => 'post'
);
$post_query = new WP_Query($args);
if($post_query->have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page">

            <div class="column-container clearfix">
                <div class="title-column">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="text-column">
                    <?php the_content(); ?>
                </div>
            </div>

        </article>
    <?php endwhile;

else :
    echo '<p>No Content found</p>';
endif;

get_footer();

?>