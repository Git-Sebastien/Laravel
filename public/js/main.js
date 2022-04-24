let button = document.querySelector('.btn-user');
let userMenu = document.querySelector('.nav-account');

if (button) {
    button.addEventListener('click', () => {
        userMenu.classList.toggle('reveal');
    })
};

class HeaderBackground {
    set_Header_Background_Property() {
        let position = 177;
        let header = document.querySelector('header');
        let html = document.querySelector('html');
        let htmlPosition = html.scrollTop;
        if (htmlPosition > position) {
            header.style.backgroundColor = "rgba(0,0,0,.6)";
            header.style.transition = ".2s ease-in-out";
            header.classList.add('text');

        } else {
            header.style.backgroundColor = "white";
            header.classList.remove('text');
        }
    }
}


let headerBackground = new HeaderBackground();


window.addEventListener('scroll', () => {
    headerBackground.set_Header_Background_Property();
})