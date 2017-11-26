<?php

/*
 * Template Name: Special Layout
 */

get_header(); ?>

<h3 style="color: deeppink;"><u>This is Displaying of Special-Template from special-template.php</u></h3>

<?php

$args = array(
    'post_type' => 'post'
);
$post_query = new WP_Query($args);
if($post_query->have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page">
            <h2><?php the_title(); ?></h2>
            <div class="info-box">
                <h4>Disclaimer Title</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <?php the_content(); ?>
        </article>
    <?php endwhile;

else :
    echo '<p>No Content found</p>';
endif;

get_footer();

?>