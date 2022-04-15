let button = document.querySelector('.btn-user');
let userMenu = document.querySelector('.nav-account');


button.addEventListener('click', () => {
    userMenu.classList.toggle('reveal');
})