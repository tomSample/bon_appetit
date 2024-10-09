/* Navigation */

function tabsFilters() {
    const tabs = document.querySelectorAll('.grid_nav a');
    const projets = document.querySelectorAll('.grid__item__view .search');

    const resetLinks = () => {
        tabs.forEach(elem => {
            elem.classList.remove('active');
        });
    }
    const showProjets = (elem) => {
        console.log(elem);
        projets.forEach(projet => {

            let filter = projet.getAttribute('data-category');

            console.log('test');

            filter !== elem ? projet.parentNode.classList.add('hide') : projet.parentNode.classList.remove('hide');
        });
    }

    tabs.forEach(elem => {
        elem.addEventListener('click', (event) => {
            event.preventDefault();
            let filter = elem.getAttribute('data-filter');
            showProjets(filter)
            resetLinks();
            elem.classList.add('active');
        });
    });
}

tabsFilters();