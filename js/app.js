// objet ArticleManager et méthodes permettant de gérer les articles (griser)
// et le bouton addToCart du popup (désactivé si un article est grisé)

const ArticleManager = {
    //initialisation des propriétés
    popup: null,
    button: null,

    //initialisation des méthodes
    init: function() {
        //sélectionne l'élément du DOM avec l'id 'popup-overlay' et 'popup-button-addToCart'
        // permet aux autres méthodes de l'objet d'accéder facilement à cet élément en utilisant this.qqchose
        this.popup = document.querySelector('#popup-overlay'); 
        this.button = document.querySelector('#popup-button-addToCart');
    },

        // création de la signature d'une méthode addUnavailable qui prend
        // un paramètre 'articleId' par exemple 'plats-article-1' pour cibler un plat en particulier

    addUnavailable: function(articleId) {

        //création d'une variable article qui contiendra 'articleId' via la méthode 'getElementById'
        let article = document.getElementById(articleId);

        //si article est vrai / existe
        if (article) {

            // alors ajoute la classe 'unavailable' à l'élément article (définie dans le CSS)
            article.classList.add('unavailable');
            
        }
    },

    removeUnavailable: function(articleId) {
        let article = document.getElementById(articleId);
        if (article) {

            // contrairement à la méthode précédente, utilise 'remove()' pour retirer la classe 'unavailable'
            article.classList.remove('unavailable');
        }
    },

    togglePopup: function() {
        this.popup.classList.toggle('open');
    },

    addToCart: function() {
        console.log('Bouton ajouté au panier cliqué');
        // Ajoutez ici la logique pour ajouter l'article au panier
    },
};

// Initialiser ArticleManager après que le DOM est complètement chargé
// sinon erreur, en cliquant on obtient "ArticleManager is not defined"
document.addEventListener('DOMContentLoaded', function() {
    ArticleManager.init();
});


//  pour tester cette fonctionnalité
//  1/ ouvrir la console
//  2/ taper ArticleManager.addUnavailable('plats-article-1')
//  3/ vérifier que l'article ait bien disparu.


function quickAddToCart(event) {
    event.stopPropagation();
    const button = event.target.closest('button');
    const articleId = event.target.closest('article').id;

    // Remplace le contenu du bouton par les éléments de quantité
    button.innerHTML = `
        <div class="quantity-controls">
            <button class="decrease-quantity" onclick="decreaseQuantity(event, '${articleId}')"><strong>-</strong></button>
            <span class="quantity">1</span>
            <button class="increase-quantity" onclick="increaseQuantity(event, '${articleId}')"><strong>+</strong></button>
        </div>
    `;

    // Ajoutez l'article au panier (logique à définir)
    console.log('Article ajouté au panier:', articleId);
}

function increaseQuantity(event, articleId) {
    event.stopPropagation();
    const quantitySpan = event.target.previousElementSibling;
    let quantity = parseInt(quantitySpan.textContent);
    quantity++;
    quantitySpan.textContent = quantity;

    // Mettez à jour la quantité dans le panier (logique à définir)
    console.log('Quantité augmentée pour:', articleId, 'Nouvelle quantité:', quantity);
}

function decreaseQuantity(event, articleId) {
    event.stopPropagation();
    const quantitySpan = event.target.nextElementSibling;
    let quantity = parseInt(quantitySpan.textContent);
    quantity--;
    if (quantity > 0) {
        quantitySpan.textContent = quantity;
        // Mettez à jour la quantité dans le panier (logique à définir)
        console.log('Quantité diminuée pour:', articleId, 'Nouvelle quantité:', quantity);
    } else {
        // Restaurer le bouton initial
        const button = event.target.closest('.quantity-controls').parentElement;
        button.innerHTML = `<strong>+</strong>`;
        button.onclick = quickAddToCart;
        // Retirer l'article du panier (logique à définir)
        console.log('Article retiré du panier:', articleId);
    }
}

//=====DRAWER====

function toggleDrawer() {
    document.getElementById('restaurant-drawer-content').classList.toggle('open');
    document.getElementById('restaurant-drawer-overlay').classList.toggle('open');
    document.body.classList.toggle('no-scroll');
}

//=====CART====

function toggleCart() {
    document.getElementById('restaurant-drawer-item-content').classList.toggle('close');
    document.getElementById('recap-arrow').classList.toggle('close');
}

//=====RADIO BUTTON====

function checkRadio(value) {
    document.getElementById(value).checked = true;
}

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
        document.querySelectorAll('#index-food-filter-button').forEach(btn => {
            btn.classList.remove('active');
        });

        // ajoute la classe active du bouton
        button.classList.add('active');
    }
}



//=====DROPDOWN MENU====

function toggleDropdown() {
    document.getElementById('header-dropdown-container').classList.toggle('open');
}

// Sélectionner l'élément déclencheur
const triggerElement = document.getElementById('dropdown-trigger');

// Ajouter des écouteurs d'événements pour les clics et les touches
triggerElement.addEventListener('click', toggleDropdown);
triggerElement.addEventListener('touchstart', toggleDropdown);



