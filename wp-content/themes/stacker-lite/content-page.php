<?php
/**
 * @package Stacker
 */
?>

<div <?php post_class( 'inside item' ); ?>>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'post-page', array( 'class' => 'featured-image' ) ); ?></a>

	<div class="commentcount">
		<?php if ( !post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span><?php comments_popup_link( '0', '1', '%' ); ?></span>
		<?php endif; ?>
	</div>
	<h2 class="itemtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<div class="itemdate"><a href="<?php the_permalink(); ?>"><?php stacker_posted_on(); ?></a></div>
	<div class="itemcat">
<?php the_category( ' ' ); ?>
	</div>
	<div id="content">
		<?php
			wp_link_pages();
			the_content();
			edit_post_link( __( 'Edit', 'stacker-lite' ), '<span class="edit-link">', '</span>' );
		?>
	</div>