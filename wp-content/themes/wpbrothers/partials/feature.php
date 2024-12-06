<?php
if (!isset($args['feature'])) return;
$feature = $args['feature'];
?>

<div class="flex flex-col items-center text-center">
    <?= $feature['icon']; ?>
    <h3 class="text-h3 font-heading text-primary mt-4"><?= esc_html($feature['title']); ?></h3>
    <p class="text-p text-gray-700 mt-2"><?= esc_html($feature['description']); ?></p>
</div>