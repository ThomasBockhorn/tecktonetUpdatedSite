<?php get_header(); ?>
<!--The main image for the website-->
<section id="main_section">
    <video width="100%" height="100%" playsinline autoplay muted loop>
        <source src="<?php echo get_template_directory_uri() . '/dest/mov/Atoms.mp4' ?>" type="video/mp4">
        Sorry, your browser doesn't support the video element.
    </video>
</section>

<?php get_footer(); ?>