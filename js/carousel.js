//=======CAROUSEL


document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll(".index-slider-btn");
    const slides = document.querySelectorAll(".slide");

    buttons.forEach(button => {
        button.addEventListener("click", (event) => {
            const calcNextSlide = event.target.id === "index-slider-btn-next" ? 1 : -1;

            const currentSlide = document.querySelector(".slide.car-active");

            console.log(currentSlide);
        });
    });
});

//=========================Liste CAROUSEL

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
    slidesContainer.innerHTML = slides.map(slide => `
        <div class="slide">
            <button id ="${slide.id}" class="index-food-filter-button" data-category="${slide.category}" onclick="toggleFilter(this)">
                <img class="index-food-filter-icon" src="${slide.imgSrc}">
            </button>
            <p>${slide.label}</p>
        </div>
    `).join('');
});
