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
