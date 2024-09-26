document.getElementById("go-back").addEventListener("click", () => {
    history.back();
});


//document.getElementById("go-back")    =>  sélectionne l'élément HTML avec l'ID go-back

// .addEventListener("click", () {    => ajoute un gestionnaire d'événements pour l'événement click 
//   =>  history.back();               => fonction fléchée qui permet de revenir à la page précédente
// });