/* Modifier les informations personnelles */

function changeMe() {
    const btn = document.querySelector('.witcher');
    const links = document.querySelectorAll('.changed');
    const others = document.querySelectorAll('.change');

    btn.addEventListener('click', () => {
        btn.classList.add('hiden');
        links.forEach(link => {
            link.classList.add('hiden');
        });
        others.forEach(other => {
            other.classList.remove('hiden');
        });
})
};

changeMe();


/* Ajouter adresse de facturation */

function invoiceMe() {
    const btn = document.querySelector('.addproof');
    const link = document.querySelector('#newinvoice');

    btn.addEventListener('click', () => {
        btn.parentNode.classList.add('hiden');
        link.classList.remove('hiden');
    });
}

invoiceMe();


/* Cacher adresse de facturation */

function hidenMe() {
    const btn = document.querySelector('.proof__off');
    const link = document.querySelector('#newinvoice');
    const renew = document.querySelector('#hiden__me');

    btn.addEventListener('click', () => {
        renew.classList.remove('hiden');
        link.classList.add('hiden');
    });
}

hidenMe();


/* Ajouter moyen de paiement */

function payMe() {
    const btn = document.querySelector('.turn');
    const link = document.querySelector('#plus');

    btn.addEventListener('click', () => {
        btn.parentNode.classList.add('hiden');
        link.classList.remove('hiden');
    });
}

payMe();


/* Cacher moyen de paiement */

function findMe() {
    const btn = document.querySelector('.turn__off');
    const link = document.querySelector('#plus');
    const renew = document.querySelector('#find__me');

    btn.addEventListener('click', () => {
        renew.classList.remove('hiden');
        link.classList.add('hiden');
    });
}

findMe();


/* Choisir son restaurant favori */

function chooseMe() {
    const btn = document.querySelector('.whois');
    const link = document.querySelector('.clients__favorite');
    const other = document.querySelector('#loved');

    btn.addEventListener('click', () => {
        btn.classList.add('hiden');
        link.classList.remove('hiden');
        other.classList.add('hiden');
    });
}

chooseMe();


/* Affichage confirmation suppression du compte*/

function deleteMe() {
    const btn = document.querySelector('.Me');
    const link = document.querySelector('.csure');

    btn.addEventListener('click', () => {
        btn.parentNode.classList.add('hiden');
        btn.parentNode.classList.remove('bsure');
        link.classList.remove('hiden');
    });
}

deleteMe();