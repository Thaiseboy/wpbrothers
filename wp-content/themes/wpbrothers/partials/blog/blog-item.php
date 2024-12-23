<?php
if (!isset($args['item'])) return;
$item = $args['item'];

$link = isset($item['link']) ? $item['link'] : site_url('/');
?>
<div class="bg-neutral-100 shadow-md rounded-lg overflow-hidden">
    <a href="<?= esc_url($link); ?>" class="block">
        <!-- Afbeelding -->
        <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/' . $item['image']); ?>"
            alt="<?= esc_attr($item['title']); ?>" class="w-full h-64 object-cover rounded-lg">
        <!-- Tekst -->
        <div class="p-4">
            <h4 class="text-h4 font-heading"><?= esc_html($item['title']); ?></h4>
            <!-- Categorie en Info -->
            <div class="flex flex-wrap items-center gap-4 mt-4 text-sm text-gray-600">
                <!-- Categorie -->
                <span class="inline-block px-3 py-1 border border-primary-500 text-body-light bg-primary-300 text-sm rounded-full font-body">
                    <?= esc_html($item['category']); ?>
                </span>
                <!-- Info -->
                <div class="flex items-center gap-4">
                    <span class="flex items-center">
                        <i class="fa-solid fa-location-dot mr-2"></i><?= esc_html($item['info'][0]); ?>
                    </span>
                    <span class="flex items-center">
                        <i class="fa-solid fa-clock mr-2"></i><?= esc_html($item['info'][1]); ?>
                    </span>
                </div>
            </div>
        </div>
    </a>
</div>