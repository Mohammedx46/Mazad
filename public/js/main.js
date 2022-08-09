(
    function($) {
        "use strict";
        jQuery(window).on('load', function() {
            $(".preloader").delay(1600).fadeOut("slow");
        });
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 80);
        });
        $('.search-btn').on("click", function() {
            $('.mobile-search').addClass('slide');
        });
        $('.search-cross-btn').on("click", function() {
            $('.mobile-search').removeClass('slide');
        });
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 300) {
                $('.scroll-btn').addClass('show');
            } else {
                $('.scroll-btn').removeClass('show');
            }
        });
        $('.scroll-btn').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, '300');
        });
        $('.mobile-menu-btn').on("click", function() {
            $('.main-menu').addClass('show-menu');
        });
        $('.menu-close-btn').on("click", function() {
            $('.main-menu').removeClass('show-menu');
        });
        $('.drop-down').on('click', function() {
            $(this).toggleClass('active').next('ul').slideToggle();
            $(this).parent().siblings().children('ul').slideUp();
            $(this).parent().siblings().children('.active').removeClass('active');
        });
        var toggleIcon = document.querySelectorAll('.sidebar-menu-icon')
        var closeIcon = document.querySelectorAll('.cross-icon')
        var searchWrap = document.querySelectorAll('.menu-toggle-btn-full-shape')
        toggleIcon.forEach((element) => { element.addEventListener('click', () => { document.querySelectorAll('.menu-toggle-btn-full-shape').forEach((el) => { el.classList.add('show-sidebar') }) }) })
        closeIcon.forEach((element) => { element.addEventListener('click', () => { document.querySelectorAll('.menu-toggle-btn-full-shape').forEach((el) => { el.classList.remove('show-sidebar') }) }) })
        window.onclick = function(event) { searchWrap.forEach((el) => { if (event.target === el) { el.classList.remove('show-sidebar') } }) }
        var swiper = new Swiper(".banner1", { slidesPerView: 1, speed: 1000, spaceBetween: 0, loop: false, effect: 'fade', centeredSlides: true, roundLengths: true, coverflowEffect: { rotate: 30, slideShadows: false, }, direction: "horizontal", pagination: { clickable: true, el: ".swiper-pagination", }, });
        var swiper = new Swiper(".category1-slider", { slidesPerView: 1, speed: 1000, spaceBetween: 15, loop: true, roundLengths: true, navigation: { nextEl: '.category-prev1', prevEl: '.category-next1', }, breakpoints: { 280: { slidesPerView: 1 }, 480: { slidesPerView: 2 }, 576: { slidesPerView: 2 }, 768: { slidesPerView: 3 }, 992: { slidesPerView: 5 }, 1200: { slidesPerView: 6 }, 1400: { slidesPerView: 7 }, } });
        var swiper = new Swiper(".c-feature-slider1", { slidesPerView: 1, speed: 1000, spaceBetween: 24, loop: true, roundLengths: true, navigation: { nextEl: '.c-feature-prev1', prevEl: '.c-feature-next1', }, breakpoints: { 280: { slidesPerView: 1 }, 480: { slidesPerView: 1 }, 768: { slidesPerView: 2 }, 992: { slidesPerView: 2 }, 1200: { slidesPerView: 3 }, } });
        var swiper = new Swiper(".blog-slider", { slidesPerView: 2, speed: 1000, spaceBetween: 24, loop: true, roundLengths: true, navigation: { nextEl: '.blog-prev1', prevEl: '.blog-next1', }, breakpoints: { 280: { slidesPerView: 1 }, 480: { slidesPerView: 1 }, 768: { slidesPerView: 2 }, 992: { slidesPerView: 2 }, 1200: { slidesPerView: 3 }, } });
        var swiper = new Swiper(".blog-slider2", { slidesPerView: 2, speed: 1000, spaceBetween: 24, loop: true, roundLengths: true, navigation: { nextEl: '.blog-prev2', prevEl: '.blog-next2', }, breakpoints: { 280: { slidesPerView: 1 }, 480: { slidesPerView: 1 }, 768: { slidesPerView: 2 }, 992: { slidesPerView: 2 }, 1200: { slidesPerView: 3 }, } });
        var swiper = new Swiper(".testimonial-slider", { slidesPerView: 2, speed: 1000, spaceBetween: 24, loop: true, roundLengths: true, navigation: { nextEl: '.testi-prev1', prevEl: '.testi-next1', }, breakpoints: { 280: { slidesPerView: 1 }, 480: { slidesPerView: 1 }, 768: { slidesPerView: 1 }, 992: { slidesPerView: 1 }, 1200: { slidesPerView: 2 }, } });
        new WOW().init();

        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        if (togglePassword) {
            togglePassword.addEventListener('click', function(e) {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.classList.toggle('bi-eye');
            });
        }

        const togglePasswordConfirmation = document.querySelector('#togglePasswordConfirmation');
        const passwordConfirmation = document.querySelector('#passwordConfirmation');
        if (togglePasswordConfirmation) {
            togglePasswordConfirmation.addEventListener('click', function(e) {
                const type = passwordConfirmation.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordConfirmation.setAttribute('type', type);
                this.classList.toggle('bi-eye');
            });
        }
        $('.video-open').magnificPopup({ type: 'iframe' });
        $('select').niceSelect();
    }(jQuery));


function route(event) {
    window.location.href = '/auction-category/?categoryId=' + event.target.value
}


function routeLogout(event) {
    window.location.href = '/logout'
}