<?php

get_header(); ?>

	<div class="site-content clearfix">
            <h3 style="color: deeppink;"><u>This is Displaying of front-page from front-page.php</u></h3>
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

            <div class="form-class clearfix">
                <h3>Please Fill this form:</h3>
                <form method="post">
                    <div class="form-group">
                        <label for="fname">Your Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" name="formsubmit" class="btn btn-primary">Submit</button>
                </form>

                <div class="get_alldata">
                    <form method="post">
                        <button type="submit" name="getdata" class="btn btn-primary">Get All Data</button>
                    </form>

                    <?php
                        if( isset( $_POST['getdata'] ) ) {
                            global $wpdb;
	                        $htmlOut = '';
                            $results = $wpdb->get_results( "SELECT * FROM mytable" );
//                            echo '<pre>';
//                            print_r( $result );
	                        $htmlOut .= '<table class="table table-striped">';
	                        $htmlOut .= '<thead>';
                            $htmlOut .= '<tr>';
                            $htmlOut .= '<th>Name</th>';
                            $htmlOut .= '<th>Email</th>';
                            $htmlOut .= '<th>Password</th>';
                            $htmlOut .= '</tr>';
	                        $htmlOut .= '</thead>';
                            foreach($results as $result){
                                $htmlOut .= '<tr>';
                                $htmlOut .= '<td>'.$result->fname.'</td>';
                                $htmlOut .= '<td>'.$result->email.'</td>';
                                $htmlOut .= '<td>'.$result->password.'</td>';
                                $htmlOut .= '</tr>';

                            }
	                        echo $htmlOut .= '</table>';

                        }
                        ?>

                </div>
            </div>

	</div>

<?php
get_footer();

?>