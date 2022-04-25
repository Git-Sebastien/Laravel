let button = document.querySelector('.btn-user');
let userMenu = document.querySelector('.nav-account');

if (button) {
    button.addEventListener('click', () => {
        userMenu.classList.toggle('reveal');
    })
};

class HeaderBackground {
    set_Header_Background_Property() {
        let position = 167;
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

let progress = function() {
    let body = document.body;
    let properties = {
        "pageY": window.pageYOffset,
        "scrollTop_doc": document.documentElement.scrollTop,
        "scrollTop_body": document.body.scrollTop
    }

    let scrolltop = properties["pageY"] || properties["scrollTop_doc"] || properties["scrollTop_body"] || 0;

    const winHeight = window.innerHeight;
    const docHeight = body.clientHeight;

    let percent = (scrolltop) / (docHeight - winHeight);
    let percentRounded = Math.round(percent * 100);
    let progress = document.querySelector('.progress-bar');
    return progress.style.width = percentRounded + "%";
}


let headerBackground = new HeaderBackground();


window.addEventListener('scroll', () => {
    progress();
    headerBackground.set_Header_Background_Property();
})