document.addEventListener("DOMContentLoaded", function () {
    var swiper1 = new Swiper(".swiper1", {
        slidesPerView: 8,
        spaceBetween: 20,
        // direction: getDirection(),
        navigation: {
            nextEl: ".swiper-button-next1",
            prevEl: ".swiper-button-prev1",
        },
        grabCursor: "true",
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

    var swiper2 = new Swiper(".swiper2", {
        slidesPerView: 8,
        spaceBetween: 20,
        // direction: getDirection(),
        navigation: {
            nextEl: ".swiper-button-next2",
            prevEl: ".swiper-button-prev2",
        },
        grabCursor: "true",
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
                spaceBetween: 15,
            },
        },
    });
});
