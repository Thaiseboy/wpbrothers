<?php defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<main class="pt-16">
    <!-- Titel -->
    <section class="py-16 bg-neutral-5">
        <div class="container mx-auto">
            <h1 class="text-h2 font-heading text-black">Leesvoer</h1>
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
                    get_template_part('partials/leesvoer-item', null, ['item' => $item]);
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
</main>

<?php
get_footer();
?>