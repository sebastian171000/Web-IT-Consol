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




});