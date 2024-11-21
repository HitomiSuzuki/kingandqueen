
var swiper = new Swiper(".spaSwiper", {
    centeredSlides: true,
    spaceBetween: 24,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
    // スライドの表示枚数：500px未満の場合
    slidesPerView: 1,
    breakpoints: {
        // スライドの表示枚数：500px以上の場合
        519: {
        slidesPerView: 2.4,
        }
    }
});


var swiper = new Swiper(".topSwiper", {
    centeredSlides: true,
    loop: true,
    spaceBetween: 24,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
    // スライドの表示枚数：500px未満の場合
    slidesPerView: 1.2,
    breakpoints: {
        // スライドの表示枚数：500px以上の場合
        519: {
        slidesPerView: 3.7,
        },
        960: {
            slidesPerView: 4.7,
            }
    }
});

var swiper = new Swiper('.topMvSwiper', {
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
})