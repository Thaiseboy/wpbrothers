document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('.filter-button');
    const blogItems = document.querySelectorAll('.blog-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');

            // Update actieve knop
            filterButtons.forEach(btn => btn.classList.remove('bg-primary-500', 'text-white'));
            button.classList.add('bg-primary-500', 'text-white');

            // Filter blog-items
            blogItems.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category').includes(category)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});

    // Sorteer functie
    sortDropdown.addEventListener('change', () => {
        const sortValue = sortDropdown.value;

        const sortedItems = Array.from(blogItems).sort((a, b) => {
            const dateA = new Date(a.getAttribute('data-date'));
            const dateB = new Date(b.getAttribute('data-date'));

            if (sortValue === 'datum_oplopend') {
                return dateA - dateB;
            } else if (sortValue === 'datum_aflopend') {
                return dateB - dateA;
            } else if (sortValue === 'populair') {
                // Voeg logica toe voor populariteit als dit nodig is
                return 0;
            }
        });

        // Update de volgorde in de DOM
        const container = document.getElementById('blog-items');
        container.innerHTML = '';
        sortedItems.forEach(item => container.appendChild(item));
    });