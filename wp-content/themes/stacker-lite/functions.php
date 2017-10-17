<?php
/**
 * Stacker functions and definitions
 *
 * @package Stacker
 */


 // Stacker functions and definitions
if ( !function_exists( 'stacker_setup' ) ) :
	function stacker_setup()
	{
		load_theme_textdomain( 'stacker-lite', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'stacker-lite' ),
		) );
		register_nav_menu( 'social', __( 'Social', 'stacker-lite' ) );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );
		
	/**
	Custom Logo
	 */
	add_theme_support( 'custom-logo', array(
	'height'      => 300,
	'width'       => 600,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

		// Post Thumbnails
		if ( function_exists( 'add_image_size' ) ) {
			add_theme_support( 'post-thumbnails' );
			add_image_size( 'post-page', 1200 );
			add_image_size( 'post-thumb', 400 );
		}
	}
endif;
add_action( 'after_setup_theme', 'stacker_setup' );

function stacker_fallback_menu()
{
	wp_nav_menu( array(
			'menu'       => 'stacker-primary',
			'container'  => false,
			'items_wrap' => '<ul>%3$s</ul>',
			'depth'      => 0,
		)
	);
}

/**
 * Content Width
 */
if ( ! isset( $content_width ) ) $content_width = 900;




// Style the Tag Cloud
function stacker_custom_tag_cloud_widget( $args )
{
	$args['largest'] = 14; //largest tag
	$args['smallest'] = 14; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['number'] = '8'; //number of tags
	return $args;
}

add_filter( 'widget_tag_cloud_args', 'stacker_custom_tag_cloud_widget' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function stacker_widgets_init()
{

	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'stacker-footer-1',
		'before_widget' => '<div class="footerwidget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footerheading">',
		'after_title'   => '</h4>',
	) );
}

add_action( 'widgets_init', 'stacker_widgets_init' );

// Load Varela Font
function stacker_fonts_url()
{
	$fonts_url = '';
	$varela = _x( 'on', 'Varela font: on or off', 'stacker-lite' );

	if ( 'off' !== $varela ) {
		$font_families = array();
		$font_families[] = 'Varela';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts and styles.
 */
function stacker_scripts()
{
	wp_enqueue_style( 'stacker-style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'stacker-top-menu', get_template_directory_uri() . '/inc/js/script.js', array( 'jquery' ), '20130115', true );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/inc/font-awesome-4.3.0/css/font-awesome.min.css', 'style' );
	wp_enqueue_style( 'stacker-fonts', stacker_fonts_url(), array(), null );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'themefurnace-keyboard-image-navigation', get_template_directory_uri() . 'inc/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'stacker_scripts' );

// Numbered Pagination
function stacker_pagination()
{
	global $wp_query;
	$big = 999999999; // need an unlikely integer
	echo paginate_links( array(
		'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format'  => '?paged=%#%',
		'current' => max( 1, get_query_var( 'paged' ) ),
		'total'   => $wp_query->max_num_pages
	) );
}






// Load Extra Functions
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';