// Initialize the nested Swiper for .mini-swiper-mySwiper
var miniSwiper = new Swiper(".mini-swiper-mySwiper", {
    autoplay: {
        delay: 2500,
        disableOnInteraction: true
    },
    loop: true, // Optional, to continuously loop through slides
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    }
});
