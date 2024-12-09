
<!-- Dynamishche Blogpost -->
<?php
$link = get_permalink();
$image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : get_template_directory_uri() . '/assets/images/placeholder.jpg';
$title = get_the_title();
$category = get_the_category();
$location = get_post_meta(get_the_ID(), 'location', true);
$job_type = get_post_meta(get_the_ID(), 'job_type', true);
?>

<div class="bg-neutral-100 shadow">
    <a href="<?= esc_url($link); ?>" class="block">
        <!-- Afbeelding -->
        <img src="<?= esc_url($image); ?>" alt="<?= esc_attr($title); ?>" class="w-full h-64 object-cover rounded-lg">
        
        <!-- Tekst -->
        <div class="p-4">
            <h4 class="text-h4 font-heading"><?= esc_html($title); ?></h4>
            
            <!-- Info + Categorie -->
            <div class="flex items-center space-x-4 mt-4 text-gray-400 font-body font-light">
                <!-- Category -->
                <?php if (!empty($category)) : ?>
                    <span
                        class="inline-block px-3 py-1 border border-primary-500 text-body-light bg-primary-300 text-sm rounded-full font-body">
                        <?= esc_html($category[0]->name); ?>
                    </span>
                <?php endif; ?>
                <!-- Info -->
                <span class="flex items-center">
                    <i class="fa-solid fa-location-dot mr-2"></i><?= esc_html($location ? $location : 'Locatie'); ?>
                </span>
                <span class="flex items-center">
                    <i class="fa-solid fa-clock mr-2"></i><?= esc_html($job_type ? $job_type : 'Type'); ?>
                </span>
            </div>
        </div>
    </a>
</div>