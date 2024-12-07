<?php
function render_search_input() {
    ?>
    <form role="search" method="get" class="relative shadow rounded-lg flex items-center px-4 py-2" action="<?= home_url('/'); ?>">
        <i class="fa-solid fa-magnifying-glass text-primary-500"></i>
        <input type="search" name="s" placeholder="Zoeken naar..." class="ml-2 text-sm focus:outline-none" value="<?= get_search_query(); ?>" />
    </form>
    <?php
}
?>