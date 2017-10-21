<?php

function learningWordPress_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 3.2, true);
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

// Get top ancestor
function get_top_ancestor_id(){
    global $post;

    if($post->post_parent){
        $ancestor = array_reverse(get_post_ancestors($post->ID));
        return $ancestor[0];
    }

    return $post->ID;

}

// Does page have children?
function has_children(){
	global $post;

	$pages = get_pages('child_of='.$post->ID);
	return count($pages);

}

// Customize excerpt word count length
function custom_excerpt_length(){
	return 25;
}

add_filter('excerpt_length','custom_excerpt_length');

// Theme setup
function learningWordPress_setup(){

	// Navigation Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
	));

	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('very-small-thumbnail', 100, 80, true);
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image',920,510,array('left','top'));

	// Add post format support
    add_theme_support('post-formats', array('aside','gallery','link'));

}

add_action('after_setup_theme', 'learningWordPress_setup');

// Add Our Widget Locations
function ourWidgetsInit(){

	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Footer Area 1',
		'id' => 'footer1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Footer Area 2',
		'id' => 'footer2',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Footer Area 3',
		'id' => 'footer3',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Footer Area 4',
		'id' => 'footer4',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>'
	));

}

add_action('widgets_init','ourWidgetsInit');

// Customize Appearance Options
function learningWordPress_customize_register($wp_customize){

	$wp_customize->add_setting('lwp_link_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('lwp_btn_color',array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	$wp_customize->add_section('lwp_standard_colors', array(
		'title' => __('Standard Colors', 'LearningWordPress'),
		'priority' => 30,
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lwp_link_color_control', array(
		'label' => __('Link Color', 'LearningWordPress'),
		'section' => 'lwp_standard_colors',
		'settings' => 'lwp_link_color',
	)));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lwp_btn_color_control', array(
		'label' => __('Button Color', 'LearningWordPress'),
		'section' => 'lwp_standard_colors',
		'settings' => 'lwp_btn_color',
	)));

}

add_action('customize_register','learningWordPress_customize_register');

// Output Customize css
function learningWordPress_customize_css(){ ?>

	<style type="text/css">
		a:link,
		a:visited {
			color: <?php echo get_theme_mod('lwp_link_color'); ?>;
		}
		.site-header nav ul li.current-menu-item a:link,
		.site-header nav ul li.current-menu-item a:visited,
		.site-header nav ul li.current-page-ancestor a:link,
		.site-header nav ul li.current-page-ancestor a:visited {
			background-color: <?php echo get_theme_mod('lwp_link_color'); ?>;
		}
		div.hd-search #searchsubmit, .one-half span {
			background-color: <?php echo get_theme_mod('lwp_btn_color'); ?>;
		}
	</style>

<?php }

add_action('wp_head','learningWordPress_customize_css');

//Test adding AdminMenu
add_action('admin_menu', 'custom_menu');
function custom_menu(){
	add_menu_page('Custom Menu', 'Custom Menu', 'manage_options', 'custom-menu-slug', 'custom_menu_page_display');
}

function custom_menu_page_display(){
	echo '<h1>Hello World</h1>';
	echo '<p>This is a custom page</p>';
}

add_action( 'get_sidebar', 'head_func' );
function head_func (){
	echo "This is a hook test";
}

add_action( 'init', 'process_post' );

function process_post() {
    global $wpdb;

//	echo get_stylesheet_uri();echo '<br />';
//	echo get_template_directory_uri();echo '<br />';
	if( isset( $_POST['formsubmit'] ) ) {
		$_POST['fname'];
		$_POST['email'];
		$_POST['password'];

		$wpdb->insert(
		        'mytable',
                array(
                        'fname' => $_POST['fname'],
                        'email' => $_POST['email'],
                        'password' => $_POST['password']
                ),
                array(
                        '%s',
                        '%s',
                        '%d'
                )
        );

		if($wpdb){
			return 'Inserted Successfully';
        } else {
		    return 'Failed to Insert data!';
        }
	}

}