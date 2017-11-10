$(document).ready(function () {
    'use strict';
    console.log('SEAF fired');

    $('.hamburger_button').click(function () {
        $(this).toggleClass('active');
        $('.overlay').toggleClass('show');
        $('body').toggleClass('no-scroll');
    });

});