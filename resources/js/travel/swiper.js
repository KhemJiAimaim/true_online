var swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    spaceBetween: 20,
    grabCursor: 'true',
    // direction: getDirection(),
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    navigation: {
        nextEl: '.swiper-button-next1',
        prevEl: '.swiper-button-prev1',
    },
   
    breakpoints: {
        340: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 2,
        },
        1280: {
            slidesPerView: 3,
        },
        1536: {
            slidesPerView: 3,
        },
    },
});