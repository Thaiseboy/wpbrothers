<?php defined('ABSPATH') || exit('Forbidden'); ?>

<footer class="bg-grey text-white py-10" style="background-color: gray !important;">
<div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Logo en Beschrijving -->
    <div class="col-span-1 md:col-span-1">
        <div class="flex items-center space-x-4">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt="WP Brothers" class="h-8">
            <span class="font-heading text-h4">WP Brothers</span>
        </div>
        <p class="text-sm text-gray-300 mt-4">
            WP Brothers is een gespecialiseerd bureau op het gebied van het WordPress CMS en is onderdeel van Social Brothers.
        </p>
        <p class="text-white font-bold mt-4">030 737 09 02</p>
        <a href="mailto:info@wpbrothers.nl" class="text-white underline hover:text-primary">info@wpbrothers.nl</a>
    </div>

    <!-- Headings en Links -->
    <div class="col-span-1 md:col-span-2 grid grid-cols-3 gap-6">
        <div>
            <h3 class="text-white font-bold mb-4">Heading</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="text-white hover:text-primary">Label</a></li>
                <li><a href="#" class="text-white hover:text-primary">Label</a></li>
                <li><a href="#" class="text-white hover:text-primary">Label</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-white font-bold mb-4">Heading</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="text-white hover:text-primary">Label</a></li>
                <li><a href="#" class="text-white hover:text-primary">Label</a></li>
                <li><a href="#" class="text-white hover:text-primary">Label</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-white font-bold mb-4">Heading</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="text-white hover:text-primary">Label</a></li>
                <li><a href="#" class="text-white hover:text-primary">Label</a></li>
                <li><a href="#" class="text-white hover:text-primary">Label</a></li>
            </ul>
        </div>
    </div>
</div>

    <!-- Onderste Lijn -->
    <div class="mt-10  border-gray-600 pt-6">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="flex space-x-6 text-sm">
                <a href="#" class="text-white hover:text-primary">Algemene voorwaarden</a>
                <a href="#" class="text-white hover:text-primary">Privacy statement</a>
                <a href="#" class="text-white hover:text-primary">Toegankelijkheidsverklaring</a>
            </div>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" class="text-white hover:text-primary">
                    <i class="fa-brands fa-facebook text-xl"></i>
                </a>
                <a href="#" class="text-white hover:text-primary">
                    <i class="fa-brands fa-instagram text-xl"></i>
                </a>
                <a href="#" class="text-white hover:text-primary">
                    <i class="fa-brands fa-linkedin text-xl"></i>
                </a>
                <a href="#" class="text-white hover:text-primary">
                    <i class="fa-brands fa-x-twitter text-xl"></i>
                </a>
            </div>
        </div>
    </div>
</footer>