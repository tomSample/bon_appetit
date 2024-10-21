//=======CAROUSEL


// document.addEventListener('DOMContentLoaded', function() {
//     const buttons = document.querySelectorAll(".index-slider-btn");
//     const slides = document.querySelectorAll(".slide");

//     buttons.forEach(button => {
//         button.addEventListener("click", (event) => {
//             const calcNextSlide = event.target.id === "index-slider-btn-next" ? 1 : -1;

//             const currentSlide = document.querySelectorAll(".slide.active");

//             }
//         });
//     });
// });

//=========================Liste CAROUSEL

document.addEventListener('DOMContentLoaded', function() {
    const slides = [
        { category: 'ramen', imgSrc: 'img/icon/ramen.png', label: 'Ramen' },
        { category: 'churros', imgSrc: 'img/icon/churros.png', label: 'Churros' },
        { category: 'satay', imgSrc: 'img/icon/satay.png', label: 'Satay' },
        { category: 'pretzel', imgSrc: 'img/icon/pretzel.png', label: 'Pretzel' },
        { category: 'fast-food', imgSrc: 'img/icon/burger-sandwich.png', label: 'Fast-food' },
        { category: 'pizza', imgSrc: 'img/icon/pizza.png', label: 'Pizza' },
        { category: 'sushi', imgSrc: 'img/icon/sushi.png', label: 'Sushi' },
        { category: 'falafel', imgSrc: 'img/icon/falafel.png', label: 'Falafel' },
        { category: 'meat', imgSrc: 'img/icon/food.png', label: 'Grillades' },
        { category: 'tacos', imgSrc: 'img/icon/tacos.png', label: 'Tacos' },
        { category: 'poke', imgSrc: 'img/icon/poke.png', label: 'Poke Bowl' },
        { category: 'hot-dog', imgSrc: 'img/icon/hot-dog.png', label: 'Hot-dog' },
        { category: 'pasta', imgSrc: 'img/icon/spaghetti.png', label: 'Pasta' },
        { category: 'poutine', imgSrc: 'img/icon/poutine.png', label: 'Poutine' },
        { category: 'after-tea', imgSrc: 'img/icon/afternoon-tea.png', label: 'Afternoon Tea' }
    ];

    const slidesContainer = document.querySelector('.index-slides-content');
    slidesContainer.innerHTML = slides.map(slide => `
        <div class="slide">
            <button id="index-food-filter-button" data-category="${slide.category}" onclick="toggleFilter(this)">
                <img id="index-food-filter-icon" src="${slide.imgSrc}">
            </button>
            <p>${slide.label}</p>
        </div>
    `).join('');
});
