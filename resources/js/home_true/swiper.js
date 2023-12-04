var swiper = new Swiper('.swiper', {
    slidesPerView: 4,
    spaceBetween: 0,
    // direction: getDirection(),
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    grabCursor: 'true',
    breakpoints: {
        340: {
            slidesPerView: 1,
            spaceBetween: 5,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1280: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1536: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
    },
});