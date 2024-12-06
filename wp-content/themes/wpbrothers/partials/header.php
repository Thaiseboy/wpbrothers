<header class="bg-white py-4 px-8 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
        <a href="<?= home_url(); ?>" class="flex items-center space-x-2">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt="WP Brothers" class="h-8">
            <span class="font-heading text-h4">WP <span class="text-primary">Brothers</span></span>
        </a>
    </div>

    <!-- Navigatie + Zoekfunctie + Contact -->
    <div class="flex items-center space-x-12">
        <!-- Navigatie -->
        <nav class="flex space-x-8">
            <?php
            if (has_nav_menu('header-menu')) {
                wp_nav_menu([
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_class' => 'flex space-x-8',
                    'link_before' => '<span class="text-gray-700 hover:text-primary">',
                    'link_after' => '</span>',
                ]);
            } else {
                echo '<a href="/blog" class="text-gray-700 hover:text-orange-500">Blog</a>';
            }
            ?>
            <?php
            include get_template_directory() . '/partials/dropdown.php';
            render_dropdown('Dropdown', [
                ['text' => 'Optie 1', 'url' => '#'],
                ['text' => 'Optie 2', 'url' => '#'],
            ]);
            ?>
        </nav>

        <!-- Zoeken -->
        <div class="flex items-center border rounded-lg px-4 py-2">
            <?php include get_template_directory() . '/partials/search.php'; ?>
            <i class="fa-solid fa-magnifying-glass text-primary"></i>
            <input type="text" placeholder="Zoeken naar..." class="ml-2 text-sm focus:outline-none focus:ring focus:ring-primary">
        </div>

        <!-- Contact-knop -->
        <div>
            <?php include get_template_directory() . '/partials/button.php'; ?>
            <?php render_button('Log in', '/login', 'bg-primary text-white px-6 py-2 rounded-full hover:bg-primary-light'); ?>
        </div>
    </div>
</header>