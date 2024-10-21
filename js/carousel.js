document.addEventListener('DOMContentLoaded', function() {
    const slides = [
        { id: "1", category: 'ramen', imgSrc: 'img/icon/ramen.png', label: 'Ramen' },
        { id: "2", category: 'churros', imgSrc: 'img/icon/churros.png', label: 'Churros' },
        { id: "3", category: 'satay', imgSrc: 'img/icon/satay.png', label: 'Satay' },
        { id: "4", category: 'pretzel', imgSrc: 'img/icon/pretzel.png', label: 'Pretzel' },
        { id: "5", category: 'fast-food', imgSrc: 'img/icon/burger-sandwich.png', label: 'Fast-food' },
        { id: "6", category: 'pizza', imgSrc: 'img/icon/pizza.png', label: 'Pizza' },
        { id: "7", category: 'sushi', imgSrc: 'img/icon/sushi.png', label: 'Sushi' },
        { id: "8", category: 'falafel', imgSrc: 'img/icon/falafel.png', label: 'Falafel' },
        { id: "9", category: 'meat', imgSrc: 'img/icon/food.png', label: 'Grillades' },
        { id: "10", category: 'tacos', imgSrc: 'img/icon/tacos.png', label: 'Tacos' },
        { id: "11", category: 'poke', imgSrc: 'img/icon/poke.png', label: 'Poke Bowl' },
        { id: "12", category: 'hot-dog', imgSrc: 'img/icon/hot-dog.png', label: 'Hot-dog' },
        { id: "13", category: 'pasta', imgSrc: 'img/icon/spaghetti.png', label: 'Pasta' },
        { id: "14", category: 'poutine', imgSrc: 'img/icon/poutine.png', label: 'Poutine' },
        { id: "15", category: 'after-tea', imgSrc: 'img/icon/afternoon-tea.png', label: 'Afternoon Tea' }
    ];

    const slidesContainer = document.querySelector('.index-slides-content');
    let currentSlideIndex = 0;
    const slidesPerPage = 5; // Number of slides to show per page

    function renderSlides() {
        const start = currentSlideIndex * slidesPerPage;
        const end = start + slidesPerPage;
        const visibleSlides = slides.slice(start, end);

        slidesContainer.innerHTML = visibleSlides.map(slide => `
            <div class="slide">
                <button onclick="toggleFilter(this)" id ="${slide.id}" class="index-food-filter-button" data-category="${slide.category}">
                    <img class="index-food-filter-icon" src="${slide.imgSrc}">
                </button>
                <p>${slide.label}</p>
            </div>
        `).join('');
    }

    function showPrevSlide() {
        if (currentSlideIndex > 0) {
            currentSlideIndex--;
            renderSlides();
        }
    }

    function showNextSlide() {
        if ((currentSlideIndex + 1) * slidesPerPage < slides.length) {
            currentSlideIndex++;
            renderSlides();
        }
    }

    renderSlides();

    window.showPrevSlide = showPrevSlide;
    window.showNextSlide = showNextSlide;
});

//=====FILTERS==== (2 clics sur un bouton filtre annule le filtrage)

let currentCategory = null; // déclaration de variable et non de constante pour permettre l'annulation du filtrage 
                            // (changement de valeur de currentCategory)

function toggleFilter(button) {
    const category = button.getAttribute('data-category');  // Récupère la catégorie du filtre sur le bouton

    if (currentCategory === category) {
        currentCategory = null;

        // Si le filtre est déjà actif, le désactive et affiche tous les restaurants
        document.querySelectorAll('.restaurant-article-filter').forEach(restaurant => {
            restaurant.style.display = 'block';
        });

        // retire la classe active du bouton
        button.classList.remove('active');
    } else {
        currentCategory = category;

        // Affiche les restaurants de la catégorie sélectionnée et cache les autres
        // (formulation via IA car méthode Element: computedStyleMap() incompatible avec Firefox)
        document.querySelectorAll('.restaurant-article-filter').forEach(restaurant => {
            restaurant.style.display = restaurant.getAttribute('data-category') === category ? 'block' : 'none';
        });

        // retire la classe active du bouton
        document.querySelectorAll('.index-food-filter-button').forEach(btn => {
            btn.classList.remove('active');
        });

        // ajoute la classe active du bouton
        button.classList.add('active');
    }
}






// function checkVisibility() {
//     const slides = document.querySelectorAll('.slide');
//     const observer = new IntersectionObserver((entries) => {
//         entries.forEach(entry => {
//             if (entry.isIntersecting) {
//                 entry.target.classList.add('visible');
//             } else {
//                 entry.targer.classList.remove('visible');
//             }
//         });
//     });

//     slides.forEach(slide => {
//         observer.observe(slide);
//     });
// }