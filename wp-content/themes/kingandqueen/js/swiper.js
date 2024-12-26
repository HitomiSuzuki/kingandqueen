var swiper = new Swiper(".swiper", {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 24,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});