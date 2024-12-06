<header class="bg-white py-4 px-8 flex justify-between items-center fixed top-0 left-0 w-full shadow-md z-50">
    <!-- Logo -->
    <div class="flex items-center space-x-4">
        <a href="<?= home_url(); ?>" class="flex items-center space-x-2">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt="WP Brothers" class="h-8">
            <span class="font-heading text-h4">WP <span class="text-primary">Brothers</span></span>
        </a>
    </div>

    <!-- Navigatie + Zoekfunctie (groot scherm) -->
    <div class="hidden lg:flex items-center justify-end w-full lg:ml-auto space-x-8">
        <nav class="flex space-x-8 relative">
            <a href="/blog" class="text-gray-700 hover:text-primary">Blog</a>

            <!-- Dropdown Menu -->
            <div class="relative group">
                <button class="flex items-center text-gray-700 hover:text-primary focus:outline-none">
                    Dropdown <i class="fa-solid fa-caret-down ml-1"></i>
                </button>
                <div
                    class="absolute left-0 hidden mt-2 w-40 bg-white border border-gray-300 shadow-lg group-hover:block">
                    <a href="http://localhost:10003/blog/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Blog</a>
                    <a href="http://localhost:10003/blogdetail/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bas</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Zoek functie</a>
                </div>
            </div>
        </nav>

        <!-- Zoekbalk -->
        <div class="relative shadow rounded-lg flex items-center px-4 py-2">
            <?php include get_template_directory() . '/partials/search.php'; ?>
            <i class="fa-solid fa-magnifying-glass text-primary"></i>
            <input type="text" placeholder="Zoeken naar..." class="ml-2 text-sm focus:outline-none">
        </div>

        <!-- Contact-knop -->
        <div>
            <?php include get_template_directory() . '/partials/button.php'; ?>
            <?php render_button('Contact', '/contact', 'bg-primary text-white px-6 py-2 rounded-full hover:bg-primary-light'); ?>
        </div>
    </div>

    <!-- Hamburger Menu (voor mobiel) -->
    <div class="lg:hidden">
        <button id="menu-toggle" class="focus:outline-none text-gray-700">
            <i class="fa-solid fa-bars text-2xl"></i>
        </button>
    </div>
</header>

<!-- Mobiel Menu -->
<div id="mobile-menu" class="hidden flex-col bg-white shadow-lg absolute top-16 left-0 w-full py-4 z-40 lg:hidden">
    <a href="/blog" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Blog</a>
    <a href="/blogdetail" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Bas</a>
    <a href="/contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>
</div>