<?php

get_header(); ?>

    <h3 style="color: deeppink;"><u>This is Displaying of Archive Pages from archive.php</u></h3>

<?php

$args = array(
	'post_type' => 'post'
);
$post_query = new WP_Query($args);
if($post_query->have_posts()) : ?>

	<h2>
		<?php
			if(is_category()){
				single_cat_title(); // echo ' Category ';
			} elseif (is_tag()){
				single_tag_title();
			} elseif (is_author()){
				the_post();
				echo 'Author Archives: ' . get_the_author();
				rewind_posts();
			} elseif (is_day()){
				echo 'Daily Archives: ' . get_the_date();
			} elseif (is_month()){
				echo 'Month Archives: ' . get_the_date('F Y');
			} elseif (is_year()){
				echo 'Yearly Archives: ' . get_the_date('Y');
			} else {
				echo 'Archives';
			}
		?>
	</h2>

	<?php
	while (have_posts()) : the_post();

        get_template_part('content', get_post_format());

	endwhile;

else :
	echo '<p>No Content found</p>';
endif;

get_footer();

?>