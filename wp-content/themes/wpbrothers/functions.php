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

// Hamburger menu
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

// Letters en thema's
function wpbrothers_enqueue_styles() {
    // Standaard stijlbladen van de thema
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Google Fonts: Plus Jakarta Sans
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700&display=swap');
}
add_action('wp_enqueue_scripts', 'wpbrothers_enqueue_styles');

// Font awesome voor icon

function enqueue_custom_styles_and_scripts() {
    // font awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');

function add_custom_meta_boxes() {
    add_meta_box(
        'blog_details',
        'Blog Details',
        'render_blog_meta_box',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_custom_meta_boxes');

function render_blog_meta_box($post) {
    $location = get_post_meta($post->ID, 'location', true);
    $job_type = get_post_meta($post->ID, 'job_type', true);
    ?>
    <label for="location">Locatie:</label>
    <input type="text" id="location" name="location" value="<?php echo esc_attr($location); ?>" style="width: 100%; margin-bottom: 10px;">
    <label for="job_type">Job Type:</label>
    <input type="text" id="job_type" name="job_type" value="<?php echo esc_attr($job_type); ?>" style="width: 100%;">
    <?php
}

function save_blog_meta_box_data($post_id) {
    if (array_key_exists('location', $_POST)) {
        update_post_meta($post_id, 'location', sanitize_text_field($_POST['location']));
    }
    if (array_key_exists('job_type', $_POST)) {
        update_post_meta($post_id, 'job_type', sanitize_text_field($_POST['job_type']));
    }
}
add_action('save_post', 'save_blog_meta_box_data');