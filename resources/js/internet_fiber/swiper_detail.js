var swiper = new Swiper('.swiper', {
    slidesPerView: 6,
    spaceBetween: 10,
    grabCursor: 'true',
    // direction: getDirection(),
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
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
            slidesPerView: 3,
         
            // centerSlide: true,
        },
        1280: {
            slidesPerView: 4,
            // centerSlide: true,
        },
        1536: {
            slidesPerView: 6,
            // centerSlide: true,
        },
    },
});