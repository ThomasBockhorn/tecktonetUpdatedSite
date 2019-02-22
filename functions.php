<?php
//Functions that will enqueue styles.css
function css_styles()
{
    wp_enqueue_style("css_styles", wp_enqueue_style("custom_css", get_stylesheet_uri() . "dest/styles.css"));
}
add_action('wp_enqueue_scripts', "css_styles");






?>