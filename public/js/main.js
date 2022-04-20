let button = document.querySelector('.btn-user');
let userMenu = document.querySelector('.nav-account');

if (button) {
    button.addEventListener('click', () => {
        userMenu.classList.toggle('reveal');
    })
};