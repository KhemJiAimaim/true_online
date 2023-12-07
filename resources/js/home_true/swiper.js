var swiper = new Swiper('.swiper', {
    slidesPerView: 4,
    spaceBetween: 20,
    // direction: getDirection(),
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    grabCursor: 'true',
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
            slidesPerView: 4,
            
        },
    },
});

