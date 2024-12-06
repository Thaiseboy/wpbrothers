<?php
function render_search_input($placeholder = 'Zoeken naar...') {
    echo '<div class="relative flex items-center border py-1 px-4 rounded-lg">';
    echo '<i class="fa-solid fa-magnifying-glass text-primary"></i>';
    echo '<input type="text" placeholder="' . esc_attr($placeholder) . '" class="ml-2 flex-1 text-sm focus:outline-none focus:ring focus:ring-primary">';
    echo '</div>';
}
?>