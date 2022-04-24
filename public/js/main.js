let button = document.querySelector('.btn-user');
let userMenu = document.querySelector('.nav-account');

if (button) {
    button.addEventListener('click', () => {
        userMenu.classList.toggle('reveal');
    })
};

let anchorAppear = function() {
    let position = 177;
    let header = document.querySelector('header');
    let html = document.querySelector('html');
    let x = html.scrollTop;
    if (x > position) {
        header.style.backgroundColor = "rgba(0,0,0,.6)";
        header.style.transition = ".2s ease-in-out";
        header.classList.add('text');

    } else {
        header.style.backgroundColor = "white";
        header.classList.remove('text');
    }
}


window.addEventListener('scroll', () => {
    anchorAppear();
});