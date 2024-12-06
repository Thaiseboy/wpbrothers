<?php
defined('ABSPATH') || exit;

get_header();
?>

<main class="pt-16">
    <!-- Hero Sectie -->
    <section class="bg-neutral-5 py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <!-- Tekstkolom -->
            <div class="text-center md:text-left max-w-lg">
                <h1 class="text-h1 font-heading text-black mb-5">
                    Een Dag in het Leven van Bas, een WordPress Developer bij WP Brothers
                </h1>
                <p class="text-p text-gray-700">
                    Bij WP Brothers is geen enkele dag hetzelfde, en dat maakt werken hier zo ontzettend leuk. Vandaag neem ik je mee in een typische werkdag van mij, Bas, een van de WordPress developers bij WP Brothers.
                </p>
            </div>
            <!-- Afbeelding -->
            <div class="mt-8 md:mt-0">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/bas.jpg" alt="Leesvoer afbeelding" class="w-80 rounded-lg shadow-md">
            </div>
        </div>
    </section>

<!-- Inhoud Sectie -->
<section class="py-16 bg-neutral-0">
    <div class="container mx-auto">
        <h2 class="text-black font-bold text-lg mb-4">Inhoudsopgave</h2>
        <div class="space-y-3">
            <div class="flex items-center space-x-3">
                <i class="fa-solid fa-anchor text-primary text-lg"></i>
                <p class="text-gray-700 font-medium">De start</p>
            </div>
            <div class="flex items-center space-x-3">
                <i class="fa-solid fa-anchor text-primary text-lg"></i>
                <p class="text-gray-700 font-medium">Einde middag</p>
            </div>
        </div>
        <p class="text-gray-700 mt-6">
            De dag begint met een kop koffie en een stand-up meeting met het hele team. 
            We bespreken de projecten waar we aan werken en de uitdagingen die we tegenkomen. 
            Vandaag werk ik aan een custom plugin voor een grote klant. 
            De eisen zijn uitdagend, maar dat maakt het juist zo interessant.
        </p>
    </div>
</section>

    <!-- De Start Sectie -->
    <section id="start" class="py-16 bg-neutral-0">
        <div class="container mx-auto">
            <h2 class="text-h3 font-heading text-black mb-4">De start</h2>
            <p class="text-p text-gray-700">
                Na de eerste meeting duik ik meteen in de code. 
                Het is geweldig om te zien hoe mijn ideeën vorm krijgen en werken voor onze klant tot leven brengen.
                Soms loop ik tegen een probleem aan dat mijn hersens laat kraken, maar gelukkig staat mijn team altijd klaar om mee te denken. samen vinden we altijd een oplossing.
            </p>
        </div>
    </section>

<!-- Einde Middag Sectie -->
<section id="middag" class="py-16 bg-neutral-0">
    <div class="container mx-auto">
        <h2 class="text-h3 font-heading text-black mb-4">Einde middag</h2>
        <p class="text-p text-gray-700 mb-4">
            Voor gedefinieerd moet de website minimaal een structuur hebben bestaande uit:
        </p>

        <!-- Ongeordende lijst -->
        <ul class="list-disc list-inside text-gray-700 space-y-2">
            <li>H1 t/m H6 + Subheading</li>
            <li>Intro tekst</li>
            <li>Brood tekst + Kleine tekst</li>
            <li>Knoppen</li>
            <li>Caption</li>
        </ul>

        <!-- Geordende lijst -->
        <ol class="list-decimal list-inside text-gray-700 mt-6 space-y-2">
            <li>H1 t/m H6 + Subheading</li>
            <li>Intro tekst</li>
            <li>Brood tekst + Kleine tekst</li>
            <li>Knoppen</li>
            <li>Caption</li>
        </ol>
        
        <!-- Knop -->
        <div class="mt-8">
            <?php
            include get_template_directory() . '/partials/button.php';
            render_button('Button', '/', 'bg-primary text-white px-6 py-2 rounded-full hover:bg-primary-light');
            ?>
        </div>
    <div>

</div>
    </div>
</section>

    <!-- Info Sectie -->
    <section class="py-16 bg-neutral-5">
        <div class="container mx-auto">
            <div class="p-6 bg-primary-100 rounded-lg">
                <p class="text-primary font-bold">Info</p>
                <p class="text-gray-700">
                    Werken bij WP Brothers betekent constant leren en groeien. De dynamische omgeving en het supportieve team zorgen ervoor dat elke dag met plezier naar mijn werk ga.
                </p>
            </div>
        </div>
    </section>

    <!-- Gerelateerde Blogs -->
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