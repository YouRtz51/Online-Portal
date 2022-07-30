// script for slider
const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    autoplay: {
        delay: 2500
    },
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
});

