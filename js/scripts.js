jQuery(document).ready($ => {
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function(index, className) {
                const customClass = ' custom-pagination';
                return '<span class="' + className + customClass + '" >' + (index + 1) + '</span>';
            },
        },
        slidesPerView: 1,
        //spaceBetween: 30,
        loop: true,
    });
    $(".swiper-pagination span:nth-child(1)").html('¿Qué hacemos?');
    $(".swiper-pagination span:nth-child(2)").html('¿Cómo lo hacemos?');
    $(".swiper-pagination span:nth-child(3)").html('Conoce más');
    $(".menu-bar").on('click', function() {
        $('.hero-header-nav').toggleClass('show-menu');
    });
    var altura = $('.header-desktop .hero-header-nav').offset().top;
    var barraAltura = $('.header-desktop .hero-header-nav').innerHeight();
    var queryMin = window.matchMedia('(min-width: 769px)');
    var queryMax = window.matchMedia('(max-width: 768px)');
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
});