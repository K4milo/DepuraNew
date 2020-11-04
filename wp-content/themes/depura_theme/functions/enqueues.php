<?php

/**
Depura_Child_assets()
*/

function Depura_Child_assets()
{

    wp_enqueue_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', false, null, 'all');
    wp_enqueue_style('material-icons', '//fonts.googleapis.com/icon?family=Material+Icons', false, null, 'all');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', false, null, 'all');
    // Styles
    $theme_info = wp_get_theme();

    wp_enqueue_style('my-styles', get_stylesheet_directory_uri().'/assets/css/theme.css', array(), $theme_info->get('Version'));

    // Scripts
    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', false, null, true);
    wp_enqueue_script('lottie-js', '//unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', false, null, true);
    wp_enqueue_script('theme-scripts', get_stylesheet_directory_uri().'/assets/js/theme.js', false, null, true);
}

add_action('wp_enqueue_scripts', 'Depura_Child_assets', 300);
