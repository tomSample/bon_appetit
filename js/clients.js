/* Modifier les informations personnelles */

function changeMe() {
    const btn = document.querySelector('.witcher');
    const links = document.querySelectorAll('.changed');
    const others = document.querySelectorAll('.change');

    btn.addEventListener('click', () => {
        btn.classList.add('hide');
        links.forEach(link => {
            link.classList.add('hide');
        });
        others.forEach(other => {
            other.classList.remove('hide');
        });
})
};

changeMe();


/* Ajouter adresse de facturation */

function invoiceMe() {
    const btn = document.querySelector('.addproof');
    const link = document.querySelector('#newinvoice');

    btn.addEventListener('click', () => {
        btn.parentNode.classList.add('hide');
        link.classList.remove('hide');
    });
}

invoiceMe();


/* Cacher adresse de facturation */

function hideMe() {
    const btn = document.querySelector('.proof__off');
    const link = document.querySelector('#newinvoice');
    const renew = document.querySelector('#hide__me');

    btn.addEventListener('click', () => {
        renew.classList.remove('hide');
        link.classList.add('hide');
    });
}

hideMe();


/* Ajouter moyen de paiement */

function payMe() {
    const btn = document.querySelector('.turn');
    const link = document.querySelector('#plus');

    btn.addEventListener('click', () => {
        btn.parentNode.classList.add('hide');
        link.classList.remove('hide');
    });
}

payMe();


/* Cacher moyen de paiement */

function findMe() {
    const btn = document.querySelector('.turn__off');
    const link = document.querySelector('#plus');
    const renew = document.querySelector('#find__me');

    btn.addEventListener('click', () => {
        renew.classList.remove('hide');
        link.classList.add('hide');
    });
}

findMe();


/* Choisir son restaurant favori */

function chooseMe() {
    const btn = document.querySelector('.whois');
    const link = document.querySelector('.clients__favorite');
    const other = document.querySelector('#loved');

    btn.addEventListener('click', () => {
        btn.classList.add('hide');
        link.classList.remove('hide');
        other.classList.add('hide');
    });
}

chooseMe();


/* Affichage confirmation suppression du compte*/

function deleteMe() {
    const btn = document.querySelector('.Me');
    const link = document.querySelector('.csure');

    btn.addEventListener('click', () => {
        btn.parentNode.classList.add('hide');
        btn.parentNode.classList.remove('bsure');
        link.classList.remove('hide');
    });
}

deleteMe();