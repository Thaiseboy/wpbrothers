<?php
function render_dropdown($title, $items = []) {
    echo '<div class="relative group">';
    echo '<a href="#" class="text-gray-700 hover:text-orange-500 flex items-center">';
    echo esc_html($title) . ' <i class="fa-solid fa-chevron-down text-primary ml-1"></i>';
    echo '</a>';
    echo '<div class="absolute hidden group-hover:block bg-white shadow-md mt-2 w-40">';
    foreach ($items as $item) {
        echo '<a href="' . esc_url($item['url']) . '" class="block px-4 py-2 text-gray-700 hover:bg-orange-100">';
        echo esc_html($item['text']);
        echo '</a>';
    }
    echo '</div>';
    echo '</div>';
}
?>