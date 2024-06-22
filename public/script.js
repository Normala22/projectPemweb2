const navToggler = document.querySelector('.overlay_open');
const navCloser = document.querySelector('.overlay_close');
navToggler.addEventListener('click', navToggle);
navCloser.addEventListener('click', navClose)

function navToggle() {
    navToggler.classList.toggle('active');
    const  nav = document.querySelector('.app__navbar_smallscreen_overlay ');
    nav.classList.toggle('open');
    if(nav.classList.contains('open')) {
        nav.style.display = "flex"
    }
    else {
        nav.removeAttribute('style');
    }
}

function navClose() {
    navCloser.classList.toggle('active');
    const nav = document.querySelector('.app__navbar_smallscreen_overlay');
    nav.classList.toggle('close');
    if(nav.classList.contains('close')){
        nav.style.display = "none"
    }
    else {
        nav.removeAttribute('style');
    }
}

AOS.init();