<?php defined('ABSPATH') || exit('Forbidden');

get_header();
?>

<main class="pt-16">
    <!-- Hero Sectie -->
    <section class="bg-neutral-5 py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <div class="text-center md:text-left max-w-lg">
                <p class="text-primary">WP Brothers</p>
                <h1 class="text-h1 font-heading text-black">Welkom, WordPress Tovenaar!</h1>
                <p class="text-p text-gray-700 mt-4">
                    Welkom bij WP Brothers, de plek waar jouw WordPress magie werkelijkheid wordt.
                    Of je nu een CSS-kunstenaar bent, een PHP-guru of een plug-in pionier, Wij zijn op zoek naar jou!
                    Bereid jw voor om deel uit te maken van een team waar innovatie en creativiteit hoog in het vaandel staan.
                    Klaar om de uitdaging aan te gaan? Laten we samen de mooiste WordPress wonderen creeren!
                </p>
            </div>
            <div class="flex space-x-4 mt-8 md:mt-0">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo WP Brothers" class="h-40">
            </div>
        </div>
    </section>

    <!-- Features Sectie -->
    <section class="py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-h2 font-heading ">Herkenbaar?</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-8">
            <?php
            $features = [
                [
                    'icon' => '<i class="fa-solid fa-ruler-horizontal text-primary text-4xl"></i>',
                    'title' => 'Creatieve Probleemoplosser',
                    'description' => 'Je bent in staat om met out-of-the-box oplossingen te komen voor complexe uitdagingen. Geen enkele bug is veilig voor jouw innovatieve aanpak!',
                ],
                [
                    'icon' => '<i class="fa-solid fa-plug text-primary text-4xl"></i>', 
                    'title' => 'Koning(in) van de Plugins',
                    'description' => 'Je hebt uitgebreide kennis van zowel populaire als obscure plugins en weet precies welke te gebruiken om een website naar een hoger niveau te tillen.',
                ],
                [
                    'icon' => '<i class="fa-solid fa-people-group text-primary text-4xl"></i>',
                    'title' => 'Flexibele Teamspeler',
                    'description' => 'Je werkt net zo goed zelfstandig als in een team. Samenwerken met designers, marketeers en andere developers is voor jou een tweede natuur.',
                ],
                [
                    'icon' => '<i class="fa-solid fa-pen-clip text-primary text-4xl"></i>',
                    'title' => 'Nieuwsgierige Lerner',
                    'description' => 'Je bent altijd op de hoogte van de laatste trends en ontwikkelingen binnen de WordPress-community en past deze kennis toe in je werk.',
                ],
            ];

            foreach ($features as $feature) {
                get_template_part('partials/feature', null, ['feature' => $feature]);
            }
            ?>
        </div>
    </div>
</section>

    <!-- Over ons Sectie -->
    <section class="py-16 bg-neutral-5">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="max-w-lg">
                <p class="text-primary">Over ons</p>
                <h2 class="text-h2 font-heading text-black">Waarom WP Brothers?</h2>
                <p class="text-p text-gray-700 mt-4">
                    Bij WP Brothers draait alles om creativiteit, innovatie en samenwerking.
                    Wij zijn een dynamisch team van WordPress fanaten die de grenzen van webontwikkeling opzoeken en verleggen.
                    Werken bij ons betekent deel uitmaken van een hecte familie die samenwerkt om de beste WordPress oplossingen te bieden aan onze klanten.
                </p>
                <a href="#" class="mt-8 inline-block border border-primary text-primary px-6 py-2 rounded-full hover:bg-primary hover:text-white transition">Over ons</a>
            </div>
            <div class="mt-8 md:mt-0">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/about.jpg" alt="Over ons" class="h-64 rounded-lg shadow-md">
            </div>
        </div>
    </section>

<!-- Solliciteren Sectie -->
<section class="py-16">
    <div class="container mx-auto flex flex-col md:flex-row items-center">
        <!-- Afbeelding links -->
        <div class="md:w-1/3">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/solliciteren.jpg" alt="Solliciteren" class="h-64 rounded-lg shadow-md">
        </div>
        <!-- Tekst en knop -->
        <div class="md:w-2/3 md:pl-8 mt-8 md:mt-0">
            <p class="text-primary text-sm uppercase tracking-wide">Solliciteren</p>
            <h2 class="text-h2 font-heading text-black mt-4">Sluit je aan bij WP Brothers!</h2>
            <p class="text-p text-gray-700 mt-4">
                Als je klaar bent om je carrière naar een hoger niveau te tillen en deel wilt uitmaken van een team dat streeft naar uitmuntendheid, dan is WP Brothers de plek voor jou.
                We zijn altijd op zoek naar getalenteerde WordPress developers die onze passie voor webontwikkeling delen.
                Kom en ontdek waarom werken bij WP Brothers niet zomaar een baan is, maar een avontuur vol kansen en groei.
            </p>
            <div class="flex  mt-8">
                <a href="#" class="mt-8 inline-block border border-primary text-primary px-6 py-2 rounded-full hover:bg-primary hover:text-white transition">Werken bij</a>
            </div>
        </div>
    </div>
</section>

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
                ],
                [
                    'image' => 'leesvoer2.jpg',
                    'title' => 'Waarom Werken bij WP Brothers Als WordPress Developer Jouw Beste Beslissing Ooit Zal Zijn',
                    'category' => 'Expertise',
                    'info' => ['Locatie', 'Fulltime'],
                ],
                [
                    'image' => 'leesvoer3.jpg',
                    'title' => 'Van Plugin-Problemen tot Klantensuccessen: Mijn Avonturen bij WP Brothers',
                    'category' => 'Expertise',
                    'info' => ['Locatie', 'Fulltime'],
                ],
            ];

            foreach ($leesvoer as $item) {
                get_template_part('partials/leesvoer-item', null, ['item' => $item]);
            }
            ?>
        </div>
    </div>
</section>

</main>

<?php
get_footer();
?>