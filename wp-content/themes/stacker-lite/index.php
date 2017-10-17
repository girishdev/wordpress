<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stacker
 */

get_header(); ?>
<?php
if ( is_404() ) {
	get_template_part( 'content', 'none' );
}
if ( have_posts() ) : ?>
	<div class="demo-wrap">
		<div class="wrapper">
			<h2 class="archive-title">
				<?php
				the_archive_title()
				?>
			</h2>

			<div class="masonry">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
					?>
				<?php endwhile; ?>
			</div>
			<div class="pagination">
				<?php stacker_pagination(); ?>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php get_footer(); ?>