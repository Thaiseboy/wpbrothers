<?php
function render_socialmedia_links() {
    ?>
    <div class="social-media-widget fixed top-1/2 right-4 transform -translate-y-1/2 bg-body-light p-4 rounded-lg shadow-md z-50">
        <h3 class="text-head text-lg font-bold mb-2">Deel</h3>
        <a href="https://facebook.com" target="_blank" class="text-primary hover:text-primary-hover">
            <i class="fa-brands fa-facebook fa-lg"></i>
        </a>
        <a href="https://instagram.com" target="_blank" class="text-primary hover:text-primary-hover mt-4 block">
            <i class="fa-brands fa-instagram fa-lg"></i>
        </a>
        <hr class="w-6 border-neutral-300 my-4" />
        <a href="https://wa.me/123456789" target="_blank" class="text-primary hover:text-primary-hover block">
            <i class="fa-brands fa-whatsapp fa-lg"></i>
        </a>
        <a href="mailto:info@example.com" target="_blank" class="text-primary hover:text-primary-hover block mt-4">
            <i class="fa-solid fa-envelope fa-lg"></i>
        </a>
    </div>
    <?php
}