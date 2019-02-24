<?php
//Function that will enqueue styles.css
function css_styles()
{
    wp_enqueue_style('styles', get_template_directory_uri() . '/dest/styles.css');
    wp_enqueue_style('styles', get_stylesheet_directory_uri());
}
add_action('wp_enqueue_scripts', 'css_styles');

//Function that will enqueue main.js
function scripts()
{
    wp_enqueue_script('custom_scripts', get_template_directory_uri() . '/dest/main.js', array(), "1.0", true);
}
add_action('wp_enqueue_scripts', 'scripts');



?>