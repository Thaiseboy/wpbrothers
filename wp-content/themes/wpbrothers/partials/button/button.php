<?php
if (!function_exists('render_button')) {
    function render_button($label, $url, $classes = '') {
        echo '<a href="' . esc_url($url) . '" class="' . esc_attr($classes) . '">' . esc_html($label) . '</a>';
    }
}
?>