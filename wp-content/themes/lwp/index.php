<?php 

get_header(); ?>

	<div class="site-content clearfix">
		<div class="main-column">
            <h3 style="color: deeppink;"><u>This is Displaying of index from index.php</u></h3>
            <?php
			$args = array(
				'post_type' => 'post'
			);
			$post_query = new WP_Query($args);
			if($post_query->have_posts()) :
				while (have_posts()) : the_post();

					get_template_part('content', get_post_format());

				endwhile;

			else :
				echo '<p>No Content found</p>';
			endif; ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer();

?>