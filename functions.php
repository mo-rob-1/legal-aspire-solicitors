<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function custom_theme_features() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'custom_theme_features');

function theme_files() {
    wp_register_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', null, null, true );
    wp_enqueue_script('script', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
    wp_enqueue_style('hamburgers', get_stylesheet_directory_uri() . '/node_modules/hamburgers/dist/hamburgers.css');
    wp_enqueue_style('flickity', get_stylesheet_directory_uri() . '/node_modules/flickity/dist/flickity.min.css');
    wp_enqueue_script('script-flickity', get_theme_file_uri('/node_modules/flickity/dist/flickity.pkgd.min.js'), NULL, '1.0', true);
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', false );
}

add_action('wp_enqueue_scripts', 'theme_files');

function google_fonts() {
    wp_enqueue_style( 'google-fonts-one', 'https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap', false );
    wp_enqueue_style( 'google-fonts-two', 'https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap', false );
    wp_enqueue_style( 'google-fonts-three', 'https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );


function uikit_cdn() {
    wp_register_style( 'uikit-css', 'https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css');
    wp_enqueue_style('uikit-css');
    wp_register_script( 'uikit-js', 'https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js', null, null, true );
    wp_enqueue_script('uikit-js');
    wp_register_script( 'uikit-js-icons', 'https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js', null, null, true );
    wp_enqueue_script('uikit-js-icons');
}
add_action( 'wp_enqueue_scripts', 'uikit_cdn' );

?>