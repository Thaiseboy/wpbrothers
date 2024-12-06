<?php
function render_button($text, $url = '#', $extra_classes = '') {
  echo '<a href="' . esc_url($url) . '" class="bg-primary text-white py-1 px-4 rounded-full hover:bg-primary-light ' . esc_attr($extra_classes) . '">' . esc_html($text) . '</a>';
}
?>