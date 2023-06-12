export function initializeSwipersIndex() {
    var swiperHome = new Swiper(".mySwiperHome", {
        slidersPerView: "auto",
        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 2000,
        },
    });

    var swiperProduct = new Swiper(".mySwiperProduct", {
        slidesPerView: "auto",
        spaceBetween: 30,
        navigation: {
            nextEl: ".bi-arrow-right-circle-fill",
            prevEl: ".bi-arrow-left-circle-fill",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            576: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
}
