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
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', false );
    wp_enqueue_style('hamburgers', get_stylesheet_directory_uri() . '/node_modules/hamburgers/dist/hamburgers.css');
    wp_register_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', null, null, true );
    wp_enqueue_script('jQuery');
    wp_enqueue_script('script', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_files');

function google_fonts() {
    wp_enqueue_style( 'google-fonts-one', 'https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap', false );
    wp_enqueue_style( 'google-fonts-two', 'https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

?>