<?php defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<main class="pt-16 bg-neutral-100">
    <!-- Titel -->
    <section class="py-16 ">
        <div class="container mx-auto">
            <h1 class="text-h2 font-heading"><span class="text-primary-500">Lees</span>voer</h1>
        </div>
    </section>

    <?php
    include get_template_directory() . '/partials/button/filter-buttons.php';
    render_filter_buttons(
    ['Toon alles', 'Blog', 'Expertise'],
    ['Datum oplopend', 'Datum aflopend', 'Populair']
);
?>

    <!-- Leesvoer -->
    <section class="py-16 bg-neutral-0">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <?php
                $leesvoer = [
                    [
                        'image' => 'leesvoer1.jpg',
                        'title' => 'Een Dag in het Leven van een WP Brothers Developer: Verwacht het Onverwachte!',
                        'category' => 'Blog',
                        'info' => ['Locatie', 'Fulltime'],
                        'link' => site_url('/blogdetail/'),
                    ],
                    [
                        'image' => 'leesvoer2.jpg',
                        'title' => 'Waarom Werken bij WP Brothers Als WordPress Developer Jouw Beste Beslissing Ooit Zal Zijn',
                        'category' => 'Expertise',
                        'info' => ['Locatie', 'Fulltime'],
                        'link' => site_url('/blogdetail/'),
                    ],
                    [
                        'image' => 'leesvoer3.jpg',
                        'title' => 'Van Plugin-Problemen tot Klantensuccessen: Mijn Avonturen bij WP Brothers',
                        'category' => 'Expertise',
                        'info' => ['Locatie', 'Fulltime'],
                        'link' => site_url('/blogdetail/'),
                    ],
                ];

                foreach ($leesvoer as $item) {
                    get_template_part('partials/item/leesvoer-item', null, ['item' => $item]);
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Paginering -->
    <section class="py-8">
        <div class="container mx-auto text-center">
            <?php
            the_posts_pagination([
                'prev_text' => __('&laquo; Vorige'),
                'next_text' => __('Volgende &raquo;'),
                'mid_size'  => 2,
            ]);
            ?>
        </div>
    </section>

    <!-- Test Dynamishe blogpost via WordPress Admin-->
    <div class="container mx-auto py-12">
    <h1 class="text-3xl font-bold mb-8">Dynamishe blog via WordPress Admin</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/blog-post'); ?>
        <?php endwhile; else : ?>
            <p>Geen berichten gevonden.</p>
        <?php endif; ?>
    </div>
    <div class="mt-8">
        <?php the_posts_pagination(); ?>
    </div>
</main>

<?php
get_footer();
?>