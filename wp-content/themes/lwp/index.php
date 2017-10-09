<?php 

get_header();
    $args = array(
        'post_type' => 'post'
    );
    $post_query = new WP_Query($args);
	if($post_query->have_posts()) :
	 	while (have_posts()) : the_post(); ?>

            <article class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
            </article>
	 	<?php endwhile;

	else :
	 	echo '<p>No Content found</p>';
	endif;

get_footer();

?>