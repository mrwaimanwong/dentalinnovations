<?php

// activate/add additional scripts
add_action('wp_enqueue_scripts','ww_add_child_scripts');

function ww_add_child_scripts()
{

	wp_register_style('ww_styles', get_stylesheet_directory_uri() . '/css/ww-styles.min.css', array('bootstrap.css', 'stylesheet'), '9880649384aea9f1ee166331c0a30daa');
	wp_enqueue_style('ww_styles');

	wp_register_script( 'ww_scripts', get_stylesheet_directory_uri() . '/js/ww-scripts.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script('ww_scripts');
}
