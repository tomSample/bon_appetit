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
        // un paramètre 'articleId' par exemple 'plats-article-1'
    addUnavailable: function(articleId) {
        //création d'une variable article qui contiendra 'articleId' via la méthode 'getElementById'
        let article = document.getElementById(articleId);
        //si article est vrai / existe
        if (article) {
            // alors ajoute la classe 'unavailable' à l'élément article (définie dans le CSS)
            article.classList.add('unavailable');
            // appelle la méthode checkUnavailableArticles pour désactiver le bouton (voir plus bas)
            this.checkUnavailableArticles();
        }
    },

    removeUnavailable: function(articleId) {
        let article = document.getElementById(articleId);
        if (article) {
            // contrairement à la méthode précédente, utilise 'remove()' pour retirer la classe 'unavailable'
            article.classList.remove('unavailable');
            this.checkUnavailableArticles();
        }
    },

    togglePopup: function() {
        if (this.popup.classList.contains('unavailable')) {
            return; // Ne fait rien si la classe 'unavailable' est présente
        }
        this.popup.classList.toggle('open'); // sinon ouvre le popup normalement
    },

    // méthode qui vérifie si un article est grisé
    checkUnavailableArticles: function() {
        // créé une variable articles qui sélectionne tous les éléments 'article' de la page
        let articles = document.querySelectorAll('article');
        // crée une variable 'hasUnavailableArticle' qui contient un tableau
        // de tous les éléments 'article' avec la classe 'unavailable'
        // le parcoure avec 'some' pour vérifier si au moins un élément est grisé
        let hasUnavailableArticle = Array.from(articles).some(article => article.classList.contains('unavailable'));
        // désactive le bouton si 'hasUnavailableArticle' est vrai
        this.button.disabled = hasUnavailableArticle;
    }
};

// Initialiser ArticleManager après que le DOM est complètement chargé
// sinon erreur, en cliquant on obtient "ArticleManager is not defined"
document.addEventListener('DOMContentLoaded', function() {
    ArticleManager.init();
});

//  pour tester cette fonctionnalité
//  1/ ouvrir la console
//  2/ taper ArticleManager.addUnavailable('plats-article-1')
//  3/ vérifier que l'article correspondant est grisé
//     il est possible de cliquer sur le plat
//     il est impossible de cliquer sur le bouton addToCart du popup
//  4/ taper ArticleManager.removeUnavailable('plats-article-1') pour dégriser l'article