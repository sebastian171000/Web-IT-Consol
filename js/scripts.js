jQuery(document).ready($ => {
    var swiper = new Swiper('.swiper-container', {

        slidesPerView: 1,
        //spaceBetween: 30,
        loop: true,
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,
        // },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    var swiper2 = new Swiper('.swiper-container2', {

        slidesPerView: 1,
        //spaceBetween: 30,
        loop: true,
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,
        // },
        pagination: {
            el: '.swiper-pagination2',
            clickable: true,
        },
    });

    var swiper3 = new Swiper('.swiper-container3', {

        slidesPerView: 1,
        //spaceBetween: 10,
        loop: true,
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,
        // },
        pagination: {
            el: '.swiper-pagination3',
            clickable: true,
        },
    });

    var swiper4 = new Swiper('.swiper-container4', {

        slidesPerView: 1,
        //spaceBetween: 10,
        loop: true,
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,
        // },
        pagination: {
            el: '.swiper-pagination4',
            clickable: true,
        },
    });

    $(".navegacion-principal a").on('click', function() {
        $(".navegacion-principal a").removeClass('right10px');
        $(this).addClass('right10px');
    });
    let contador = 0;
    $(".menu-bar").on('click', function() {
        if (contador == 0) {
            $('.hero-header-nav').removeClass('left-100');
            $('.hero-header-nav').addClass('show-menu');
            contador = 1;
        } else {
            $('.hero-header-nav').removeClass('show-menu');
            contador = 0;
        }

    });
    $(".contenido-header-nav a").on('click', function() {
        if (contador == 1) {
            $('.hero-header-nav').addClass('left-100');
            contador = 0;
        }
    })
    var altura = $('.header-desktop .hero-header-nav').offset().top;
    var barraAltura = $('.header-desktop .hero-header-nav').innerHeight();
    var queryMin = window.matchMedia('(min-width: 977px)');
    var queryMax = window.matchMedia('(max-width: 976px)');
    $('.header-desktop .contenido-header-inferior img').css('opacity', 0);

    $(window).on('scroll', function() {
        if ($(window).scrollTop() > altura) {
            $('.header-desktop .hero-header-nav').addClass('fixed');
            $('.contenido-header-inferior').addClass('transicion0');
            $('.header-desktop .contenido-header-inferior img').css('opacity', 1);
            if (queryMin.matches) {
                $('body').css({ 'margin-top': barraAltura + 'px' });

            }
        } else {
            $('.header-desktop .hero-header-nav').removeClass('fixed');
            $('.contenido-header-inferior').removeClass('transicion0');
            $('.header-desktop .contenido-header-inferior img').css('opacity', 0);
            if (queryMin.matches) {
                $('body').css({ 'margin-top': '0px' });

            }
        }
    });
    //$('.your-name input ').prop("placeholder", "Nombre");
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 800,
        offset: 100
    });
});