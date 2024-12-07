<?php
defined('ABSPATH') || exit('Forbidden');

function render_dropdown($title, $items = []) {
    ?>
    <div class="relative group">
        <button class="flex items-center text-gray-700 hover:text-primary focus:outline-none">
            <?= esc_html($title); ?> <i class="fa-solid fa-chevron-down text-primary-500 ml-1"></i>
        </button>
        <div class="absolute left-0 hidden mt-2 w-40 bg-white border border-gray-300 shadow-lg group-hover:block">
            <?php foreach ($items as $item): ?>
                <a href="<?= esc_url($item['url']); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                    <?= esc_html($item['text']); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
}
?>