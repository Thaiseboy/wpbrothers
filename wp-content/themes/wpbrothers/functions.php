<?php defined('ABSPATH') || exit('Forbidden');

// Require theme files
require_once get_template_directory() . "/lib/init.php";

/**
 * Disable Gutenberg block editor
 * 
 * @see https://developer.wordpress.org/reference/hooks/use_block_editor_for_post/
 */
add_filter('use_block_editor_for_post', '__return_false', 10, 0);
function wpbrothers_register_menus() {
    register_nav_menus([
        'header-menu' => __('Header Menu', 'wpbrothers'),
    ]);
}
add_action('init', 'wpbrothers_register_menus');
function wpbrothers_enqueue_scripts() {
    wp_enqueue_script(
        'menu-script', 
        get_template_directory_uri() . '/assets/js/menu.js', 
        [], 
        null, 
        true
    );
}
add_action('wp_enqueue_scripts', 'wpbrothers_enqueue_scripts');

function wpbrothers_enqueue_styles() {
    // Standaard stijlbladen van de thema
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Google Fonts: Plus Jakarta Sans
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'wpbrothers_enqueue_styles');

function enqueue_custom_styles_and_scripts() {
    // font awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');