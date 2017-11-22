(function () {
    var burger     = document.querySelector('.burger_button');
    var overlay    = document.querySelector('.nav_overlay');
    var headerBar  = document.querySelector('.header_bar_container');
    var headerLogo = document.querySelector('#header_logo');
    var noScroll   = document.querySelector('body');

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