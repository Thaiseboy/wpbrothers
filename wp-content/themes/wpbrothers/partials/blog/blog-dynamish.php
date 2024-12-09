<!-- Dynamische Blogpost + zoekfunctionaliteit implementeert -->
<?php
$category_slugs = array_map(function ($cat) {
    return $cat->slug;
}, get_the_category());
?>

<div class="blog-item bg-neutral-100 shadow-md rounded-lg overflow-hidden"
    data-category="<?= esc_attr(implode(' ', $category_slugs)); ?>">
    <a href="<?= esc_url(get_permalink()); ?>">
        <!-- Afbeelding -->
        <img src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium')); ?>"
            alt="<?= esc_attr(get_the_title()); ?>" class="w-full h-64 object-cover">

        <!-- Tekst -->
        <div class="p-4">
            <h4 class="text-lg font-semibold"><?= esc_html(get_the_title()); ?></h4>
            <span class="text-sm text-gray-600"><?= esc_html(get_the_date()); ?></span>

            <!-- Categorieën -->
            <div class="flex flex-wrap items-center gap-4 mt-4 text-sm text-gray-600">
                <?php
                $categories = get_the_category();
                if (!empty($categories)) :
                    foreach ($categories as $category) : ?>
                <span
                    class="inline-block px-3 py-1 border border-primary-500 text-body-light bg-primary-300 text-sm rounded-full font-body">
                    <?= esc_html($category->name); ?>
                </span>
                <?php endforeach;
                endif; ?>

                <!-- Info: Locatie en Job Type -->
                <div class="flex items-center gap-4  text-sm text-gray-600">
                    <span class="flex items-center">
                        <i class="fa-solid fa-location-dot mr-2"></i>
                        <?= esc_html(get_post_meta(get_the_ID(), 'location', true) ?: 'Locatie'); ?>
                    </span>
                    <span class="flex items-center">
                        <i class="fa-solid fa-clock mr-2"></i>
                        <?= esc_html(get_post_meta(get_the_ID(), 'job_type', true) ?: 'Type'); ?>
                    </span>
                </div>
            </div>
        </div>
    </a>
</div>