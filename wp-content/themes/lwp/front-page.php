<?php

get_header(); ?>

	<div class="site-content clearfix">

			<?php
			$args = array(
				'post_type' => 'post'
			);
			$post_query = new WP_Query($args);
			if($post_query->have_posts()) :
				while (have_posts()) : the_post();

					the_content();

				endwhile;

			else :
				echo '<p>No Content found</p>';
			endif;
			?>

	</div>

<?php
get_footer();

?>