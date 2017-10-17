<?php
/**
 * Stacker Theme Customizer
 *
 * @package Stacker
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function stacker_customize_register( $wp_customize )
{
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	

}

add_action( 'customize_register', 'stacker_customize_register' );

function stacker_sanitize_menu_position( $value )
{
	if ( !in_array( $value, array( 'left', 'top' ) ) ) {
		$value = 'left';
	}

	return $value;
}

function stacker_sanitize_color_hex( $value )
{
	if ( !preg_match( '/\#[a-fA-F0-9]{6}/', $value ) ) {
		$value = '#f5f5f5';
	}

	return $value;
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function stacker_customize_preview_js()
{
	wp_enqueue_script( 'stacker_customizer', get_template_directory_uri() . '/inc/js/customizer.js', array( 'customize-preview' ), '20130524', true );
}

add_action( 'customize_preview_init', 'stacker_customize_preview_js' );

// Custom Backgrounds
function stacker_register_custom_background()
{
	$args = array(
		'default-color' => '#f5f5f5',
		'default-image' => '',
	);

	$args = apply_filters( 'stacker_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( !empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_theme_support( 'custom-background' );
	}
}

add_action( 'after_setup_theme', 'stacker_register_custom_background' );