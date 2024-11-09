<?php
function my_custom_theme_enqueue_assets() {
    wp_deregister_script('jquery'); 
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], false, true);

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

    wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/style.css');

     wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/assets/libs/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('owl-carousel-theme', get_template_directory_uri() . '/assets/libs/owlcarousel/assets/owl.theme.default.min.css'); 


    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', ['jquery'], false, true);

    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], false, true);

    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/libs/owlcarousel/owl.carousel.min.js', ['jquery'], false, true);


    // wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/libs/owlcarousel/wow.js', ['jquery'], false, true);
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/libs/wow/wow.min.js', ['jquery'], false, true);
    wp_enqueue_script('animate-css', get_template_directory_uri() . '/assets/libs/animate/animate.min.css');
    wp_enqueue_script('counterup-js', get_template_directory_uri() . '/assets/libs/counterup/counterup.min.js', ['jquery'], false, true);
    wp_enqueue_script('easing-js', get_template_directory_uri() . '/assets/libs/easing/easing.min.js', ['jquery'], false, true);


    wp_enqueue_script(
        'font-awesome-kit',
        'https://kit.fontawesome.com/f3000c9832.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_assets');


