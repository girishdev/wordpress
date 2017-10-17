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
			endif; ?>

            <div class="home-columns clearfix">

                <div class="one-half">

	                <?php
	                // sports posts loop begins here
	                // $sportsPosts = new WP_Query('cat=5&posts_per_page=2&orderby=title&order=DESC');
	                // $sportsPosts = new WP_Query('cat=5&posts_per_page=2&orderby=title&order=ASC');
	                $sportsPosts = new WP_Query('cat=5&posts_per_page=2&orderby=title&order=ASC');

	                if($sportsPosts->have_posts()) : ?>
                        <h2>Latest Sports News: </h2>
                        <?php
		                while ($sportsPosts->have_posts()) : $sportsPosts->the_post(); ?>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><span><?php echo date('d/m/Y'); ?></span>
                            <div class="very-small-thumbnail">
                                <?php the_post_thumbnail('very-small-thumbnail'); ?>
                            </div>
                            <p><?php the_excerpt(); ?></p>
		                <?php endwhile;

	                else:

	                endif;
	                wp_reset_postdata(); ?>

                </div>

                <div class="one-half last">

	                <?php
	                // News posts loop begins here
	                $newsPosts = new WP_Query('cat=4&posts_per_page=2&orderby=title&order=ASC');

	                if($newsPosts->have_posts()) : ?>
		                <h2>Latest News: </h2>
		                <?php
                        while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><span><?php echo date('d/m/Y'); ?></span>
			                <p><?php the_excerpt(); ?></p>
		                <?php endwhile;

	                else:

	                endif;
	                wp_reset_postdata();
	                ?>

                </div>

            </div>

	</div>

<?php
get_footer();

?>