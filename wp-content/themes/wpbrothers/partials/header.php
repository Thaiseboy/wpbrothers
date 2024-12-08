<?php
defined('ABSPATH') || exit('Forbidden');
?>
<header
    class="bg-neutral-100 mt-5 py-4 px-8 flex justify-between items-center fixed top-0 left-0 w-full shadow z-50 lg:static lg:shadow-none">
    <!-- Logo -->
    <div class="flex items-center">
        <a href="<?= home_url(); ?>" class="flex items-center mt-1">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/logowp.png" alt="WP Brothers" class="h-8">
        </a>
    </div>

    <!-- Navigatie + Zoekfunctie (Groot Scherm) -->
    <div class="hidden lg:flex items-center justify-end w-full lg:ml-auto space-x-8">
        <nav class="flex space-x-8 relative">
            <a href="/blog" class="text-gray-700 hover:text-primary">Blog</a>

            <!-- Dropdown Menu -->
            <?php include get_template_directory() . '/partials/dropdown/dropdown.php'; ?>
            <?php
            render_dropdown('Dropdown', [
                ['url' => '/blog', 'text' => 'Blog'],
                ['url' => '/blogdetail', 'text' => 'Blog Detail'],
                ['url' => '#', 'text' => 'Zoekfunctie'],
            ]);
            ?>
        </nav>

        <!-- Zoekbalk -->
        <?php include get_template_directory() . '/partials/search/search.php'; ?>
        <?php render_search_input(); ?>

        <!-- Contact-knop -->
        <div>
            <?php include get_template_directory() . '/partials/button/button.php'; ?>
            <?php render_button('Contact', '/contact', 'bg-primary-500 text-white px-6 py-2 rounded-full hover:bg-primary-light'); ?>
        </div>
    </div>

    <!-- Hamburger Menu (voor mobiel) -->
    <div class="lg:hidden">
        <button id="menu-toggle" class="focus:outline-none text-gray-70">
            <i class="fa-solid fa-bars text-2xl"></i>
        </button>
    </div>
</header>

<!-- Mobiel Menu -->
<div id="mobile-menu" class="hidden flex-col bg-white shadow-lg absolute top-16 left-0 w-full py-4 z-40 lg:hidden">
    <a href="/" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
    <a href="/blog" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Blog</a>
    <a href="/blogdetail" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Over Bas </a>
    <a href="/contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>
</div>