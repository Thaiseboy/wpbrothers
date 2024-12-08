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
                <h1 class="text-h2 font-heading text-black mb-5">
                    Een Dag in het Leven van <span class="text-primary-500">Bas</span>,
                    een WordPress Developer bij WP <span class="text-primary-500">Brothers</span>
                </h1>
                <p class="text-p text-gray-700">
                    Bij WP Brothers is geen enkele dag hetzelfde, en dat maakt werken hier zo ontzettend leuk. Vandaag
                    neem ik je mee in een typische werkdag van mij, Bas, een van de WordPress developers bij WP
                    Brothers.
                </p>
            </div>
            <!-- Afbeelding -->
            <div class="mt-8 md:mt-0">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/bas.jpg" alt="Leesvoer afbeelding"
                    class="w-80 rounded-lg shadow-md">
            </div>
        </div>
    </section>

    <!-- Social Media -->
    <aside>
        <?php include get_template_directory() . '/partials/aside/socialmedia.php'?>
        <?php render_socialmedia_links() ?>
    </aside>

    <!-- Inhoud Sectie -->
    <section class="py-16 bg-neutral-0">
        <div class="container mx-auto">
            <h2 class="text-black font-bold text-lg mb-4">Inhoudsopgave</h2>
            <div class="space-y-3">
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-anchor text-primary-500 text-lg"></i>
                    <p class="text-gray-700 font-medium">De start</p>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-anchor text-primary-500 text-lg"></i>
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
            <h2 class="text-h3 font-heading text-primary-500 mb-4">De start</h2>
            <p class="text-p text-gray-700">
                Na de eerste meeting duik ik meteen in de code.
                Het is geweldig om te zien hoe mijn ideeën vorm krijgen en werken voor onze klant tot leven brengen.
                Soms loop ik tegen een probleem aan dat mijn hersens laat kraken, maar gelukkig staat mijn team altijd
                klaar om mee te denken. samen vinden we altijd een oplossing.
            </p>
        </div>
    </section>

    <!-- Einde Middag Sectie -->
    <section id="middag" class="py-16 bg-neutral-0">
        <div class="container mx-auto">
            <h2 class="text-h3 font-heading text-primary-500 mb-4">Einde middag</h2>
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
            include get_template_directory() . '/partials/button/button.php';
            render_button('Button', '/', 'bg-primary-500 text-white px-6 py-2 rounded-full hover:bg-white hover:text-black hover:border-primary-500');
            ?>
            </div>
        </div>
    </section>

    <!-- Info Sectie -->
    <section class="py-16 bg-neutral-0 mb-6">
        <div class="container mx-auto">
            <div class="flex items-start bg-blue-100 border-l-4 border-blue-500 p-6 rounded-lg shadow-md">
                <!-- Icon -->
                <div class="text-blue-500 text-2xl flex-shrink-0">
                    <i class="fa-solid fa-circle-info"></i>
                </div>
                <!-- Tekst -->
                <div class="ml-4">
                    <h3 class="font-bold text-lg">Info</h3>
                    <p class="text-gray-700 mt-2">
                        Werken bij WP Brothers betekent constant leren en groeien. De dynamische omgeving en het
                        supportieve team zorgen ervoor dat elke dag met plezier naar mijn werk ga.
                        Als jij ook houdt van uitdagingen en graag deel uitmaakt van een innovatief team, dan is WP
                        Brothers de perfecte plek voor jou!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Afbeelding -->
    <div class="mt-8 md:mt-0 flex justify-center">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/bas2.jpg" alt="Leesvoer afbeelding"
            class="w-8/12 rounded-lg shadow-md">
    </div>

    <!-- Leesvoer -->
    <section class="py-16 bg-neutral-50">
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
                    get_template_part('partials/item/leesvoer-item', null, ['item' => $item]);
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>