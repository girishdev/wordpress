<?php

get_header();
$args = array(
    'post_type' => 'post'
);
$post_query = new WP_Query($args);
if($post_query->have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post page">

            <nav class="site-nav children-links clearfix">
                <span><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>
                <ul>
                    <?php

                        $args = array(
                            'child_of' => get_top_ancestor_id(),
                            'title_li' =>''
                        );
                        wp_list_pages($args);

                    ?>
                </ul>
            </nav>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
    <?php endwhile;

else :
    echo '<p>No Content found</p>';
endif;

get_footer();

?>