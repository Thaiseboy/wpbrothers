<?php
function render_filter_buttons($categories = ['Toon alles', 'Blog', 'Expertise'], $sort_options = ['Datum oplopend', 'Datum aflopend', 'Populair']) {
    ?>
    <section class="py-4 bg-neutral-0 border-b border-neutral-200">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <?php foreach ($categories as $category): ?>
                    <button class="px-4 py-2 rounded-full border border-primary-300 text-body-light hover:bg-primary-500 hover:text-white"><?= esc_html($category); ?></button>
                <?php endforeach; ?>
            </div>
            <div>
                <label for="sorteren" class="mr-2 text-body-light">Sorteer op</label>
                <select id="sorteren" class="px-4 py-2 border border-neutral-300 rounded">
                    <?php foreach ($sort_options as $option): ?>
                        <option><?= esc_html($option); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </section>
    <?php
}
?>