var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,       // Shows 3 slides at once
    spaceBetween: 30,       // 30px space between slides
    freeMode: true,         // Allows scrolling through slides freely
    pagination: {
      el: ".swiper-pagination",
      clickable: true,      // Enables clicking on pagination bullets
    },
    autoplay: {
      delay: 3000,          // 3000ms = 3 seconds between slides
      disableOnInteraction: false, // Keeps autoplay active after interaction
    },
    loop: true,             // Loops through slides continuously
});
