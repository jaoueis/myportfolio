(function ($) {
    var burger = document.querySelector('.burger_button'),
        overlay = document.querySelector('.nav_overlay'),
        headerBar = document.querySelector('.header_bar_container'),
        headerLogo = document.querySelector('#header_logo'),
        noScroll = document.querySelector('body'),
        backToTop = document.querySelector('.backToTop_wrap'),
        deActive = document.querySelectorAll('.de-active');

    function toggleClass() {
        burger.classList.toggle('active');
        overlay.classList.toggle('show_menu');
        noScroll.classList.toggle('no-scroll');
    }

    function shrinkNav() {
        if (window.pageYOffset > 100) {
            backToTop.style.opacity = 1;
            headerBar.classList.add('shrink');
            headerLogo.src = headerLogo.getAttribute('data-src-black');
        } else {
            backToTop.style.opacity = 0;
            headerBar.classList.remove('shrink');
            headerLogo.src = headerLogo.getAttribute('data-src-white');
        }
    }

    burger.addEventListener('click', toggleClass, false);
    window.addEventListener('scroll', shrinkNav, false);
    deActive.forEach(function (menu) {
        menu.addEventListener('click', toggleClass, false);
    });

    $(window).on('load', function () {
        $('body').addClass('loaded');
    });
})(jQuery);