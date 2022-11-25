let popup = document.querySelector('.popup');
let close = document.querySelector('.close');
let overlay = document.querySelector('#overlay');
let mobileNav = document.querySelector('.mobile-nav-links');

function buyAppear() {
    popup.classList.add('show');
    overlay.classList.add('active');
}

function buyClose() {
    popup.classList.remove('show');
    overlay.classList.remove('active');
}

function mobileNavShow() {
    mobileNav.classList.toggle('nav-btn-active');
}