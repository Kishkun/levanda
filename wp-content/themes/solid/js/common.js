// header-mobile-button
let mobileBtnEl = document.querySelector('.header-mobile-button-body');
let mobileBtnLine = document.querySelectorAll('.header-mobile-button-line');
let headerMobileEl = document.querySelector('.header-mobile');
let bodyEl = document.querySelector('body');

let clickMobileButton = function () {
    mobileBtnLine.forEach((item) => {
        item.classList.toggle('header-mobile-button-line-active')
    });
    headerMobileEl.classList.toggle('header-mobile-active');
    bodyEl.classList.toggle('no_scroll-main');
};
mobileBtnEl.addEventListener('click', clickMobileButton);