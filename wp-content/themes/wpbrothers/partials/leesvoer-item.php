<?php
if (!isset($args['item'])) return;
$item = $args['item'];
?>

<div class="rounded-lg overflow-hidden shadow-md">
    <!-- Afbeelding -->
    <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/' . $item['image']); ?>" alt="<?= esc_attr($item['title']); ?>" class="w-full h-64 object-cover">
    <!-- Tekst -->
    <div class="p-4">
        <h4 class="text-h4 font-heading"><?= esc_html($item['title']); ?></h4>
        <!-- Categorie -->
        <span class="inline-block mt-4 px-3 py-1 border border-primary text-primary text-sm rounded-full">
            <?= esc_html($item['category']); ?>
        </span>
        <!-- Info -->
        <div class="flex items-center space-x-4 mt-4 text-gray-400">
            <span class="flex items-center">
                <i class="fa-solid fa-location-dot text-primary mr-2"></i><?= esc_html($item['info'][0]); ?>
            </span>
            <span class="flex items-center">
                <i class="fa-solid fa-clock text-primary mr-2"></i><?= esc_html($item['info'][1]); ?>
            </span>
        </div>
    </div>
</div>