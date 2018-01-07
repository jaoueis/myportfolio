(function () {
    var burger = document.querySelector('.burger_button'),
        overlay = document.querySelector('.nav_overlay'),
        headerBar = document.querySelector('.header_bar_container'),
        headerLogo = document.querySelector('#header_logo'),
        noScroll = document.querySelector('body');

    function toggleClass() {
        burger.classList.toggle('active');
        overlay.classList.toggle('show_menu');
        noScroll.classList.toggle('no-scroll');
    }

    function shrinkNav() {
        if (window.pageYOffset > 80) {
            headerBar.classList.add('shrink');
            headerLogo.src = 'images/shan-logo-3.0-name-black.svg';
        } else {
            headerBar.classList.remove('shrink');
            headerLogo.src = 'images/shan-logo-3.0-name-white.svg';
        }
    }

    burger.addEventListener('click', toggleClass, false);
    window.addEventListener('scroll', shrinkNav, false);
})();