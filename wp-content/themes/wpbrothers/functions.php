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
        [], // Geen afhankelijkheden
        '1.0', // Versie
        true // Laad in de footer
    );
}
add_action('wp_enqueue_scripts', 'wpbrothers_enqueue_scripts');