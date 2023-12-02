var swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    spaceBetween: 0,
    // direction: getDirection(),
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        340: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 50,
        },
        1280: {
            slidesPerView: 2,
            spaceBetween: 50,
        },
        1536: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
});