<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="main_section">
    <nav class="navbar">
        <!--This pertains to the navbar-->
        <ul class="menu">
            <li><a href="#" class="menu-item">Home</a></li>
            <li><a href="#" class="menu-item">About Me</a></li>
            <li><a href="#" class="menu-item">Projects</a></li>
            <li><a href="#" class="menu-item">Blog</a></li>
            <li><a href="#" class="menu-item">Links</a></li>
        </ul>
        <div class="hamburger">
            <a href="#" id="navToggle"><span></span></a>
        </div>
    </nav>
    <video width="100%" height="100%" playsinline autoplay muted loop>
            <source src="<?php echo get_template_directory_uri() . '/dest/mov/Atoms.mp4' ?>" type="video/mp4">
            Sorry, your browser doesn't support the video element.
    </video>
</header> 

