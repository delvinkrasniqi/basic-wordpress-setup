<?php
/**
 * Loads scripts
 * css
 * js
 */
function style_on_load()
{
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/styles/style.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'style_on_load');
/**
 * Adds two menu styles:
 * Primary - Top Navbar,
 * Footer - Bootom Navbar
 */
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));

/**
 * Adds theme support:
 * Custom Logo
 * Custom Header
 * Post Thumbnails
 */
add_theme_support("custom-logo");
add_theme_support("custom-header");
add_theme_support("post-thumbnails");