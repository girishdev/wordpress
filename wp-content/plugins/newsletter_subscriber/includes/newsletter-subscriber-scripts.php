<?php
/**
 * Created by PhpStorm.
 * User: qwickbit
 * Date: 20/10/17
 * Time: 11:20 PM
 */

//Adding scripts
function ns_add_scripts(){
	wp_enqueue_style('ns-main-style',plugins_url().'/newsletter_subscriber/css/style.css');
	wp_enqueue_style('ns-main-script',plugins_url().'/newsletter_subscriber/js/main.js');
}

add_action('wp_enqueue_scripts','ns_add_scripts');