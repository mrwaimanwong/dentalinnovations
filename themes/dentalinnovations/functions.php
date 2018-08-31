<?php

// Add a widget.
if (function_exists('register_sidebar')) {
    register_sidebar(array(
    'name' => 'Billboard Section',
    'id' => 'billboard-section',
    'description' => 'Billboard Section',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
    ));
}
if (function_exists('register_sidebar')) {
    register_sidebar(array(
    'name' => 'Below Billboard Section',
    'id' => 'below-billboard-section',
    'description' => 'Below Billboard Section',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
    ));
}
if (function_exists('register_sidebar')) {
    register_sidebar(array(
    'name' => 'Content Section',
    'id' => 'content-section',
    'description' => 'Content Section',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
    ));
}
if (function_exists('register_sidebar')) {
    register_sidebar(array(
    'name' => 'Below Content Section',
    'id' => 'below-content-section',
    'description' => 'Below Content Section',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
    ));
}
if (function_exists('register_sidebar')) {
    register_sidebar(array(
    'name' => 'Below Content Green Section',
    'id' => 'below-content-green-section',
    'description' => 'Below Content Green Section',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
    ));
}
if (function_exists('register_sidebar')) {
    register_sidebar(array(
    'name' => 'Footer Section',
    'id' => 'footer-section',
    'description' => 'Footer Section',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
    ));
}

//Add body class for front page
function my_class_names($classes) {
    // add 'class-name' to the $classes array
    if( !is_front_page() ) $classes[] = 'not-front';
    if( is_front_page() ) $classes[] = 'front';
    // return the $classes array
    return $classes;
}
add_filter('body_class','my_class_names');

add_filter('widget_text', 'do_shortcode');

require_once( get_stylesheet_directory() . '/ww-lib/init.php');


?>
