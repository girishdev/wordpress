<?php

get_header(); ?>

    <div class="site-content clearfix">
		<div class="main-column">
            <?php
            $args = array(
                'post_type' => 'post'
            );
            $post_query = new WP_Query($args);
            if($post_query->have_posts()) :
                while (have_posts()) : the_post(); ?>

                    <article class="post page">
                        <?php if(has_children() OR $post->post_parent > 0) { ?>
                        <nav class="site-nav children-links clearfix">
                            <span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>
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
                        <?php } ?>
                        <h2><?php // the_title(); ?></h2>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile;

            else :
                echo '<p>No Content found</p>';
            endif;
            ?>

        </div>

	    <?php get_sidebar(); ?>

    </div>

<?php
get_footer();

?>