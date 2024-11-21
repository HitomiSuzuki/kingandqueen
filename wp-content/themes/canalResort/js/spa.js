const noscroll = (e) => {
    e.preventDefault();
 }

 var spaSwiper1 = new Swiper(".spaSwiper1", {
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
var spaSwiper2 = new Swiper(".spaSwiper2", {
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
var spaSwiper3 = new Swiper(".spaSwiper3", {
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

const openModal = ([modalNum, slideNum]) => {
    const modalBgs = document.getElementsByClassName('spa__bath__content__modalBg');
    const modals = document.getElementsByClassName('spa__bath__content__modalContainer');

    modalBgs[modalNum].classList.add('show');
    modals[modalNum].classList.add('show');

    var modalSwiper1 = new Swiper(".modalSwiper1", {
        initialSlide: slideNum,
        loop: true,
        navigation: {
            nextEl: ".modalSwiper-button-next",
            prevEl: ".modalSwiper-button-prev"
        },
        pagination: {
            el: ".modalSwiper-pagination",
            clickable: true
        },  
        loop: true,
        loopAdditionalSlides: 1,
        observer: true,
        observeParents: true,
    });
    var modalSwiper2 = new Swiper(".modalSwiper2", {
        initialSlide: slideNum,
        loop: true,
        navigation: {
            nextEl: ".modalSwiper-button-next",
            prevEl: ".modalSwiper-button-prev"
        },
        pagination: {
            el: ".modalSwiper-pagination",
            clickable: true
        },  
        loop: true,
        loopAdditionalSlides: 1,
        observer: true,
        observeParents: true,
    });
    var modalSwiper3 = new Swiper(".modalSwiper3", {
        initialSlide: slideNum,
        loop: true,
        navigation: {
            nextEl: ".modalSwiper-button-next",
            prevEl: ".modalSwiper-button-prev"
        },
        pagination: {
            el: ".modalSwiper-pagination",
            clickable: true
        },  
        loop: true,
        loopAdditionalSlides: 1,
        observer: true,
        observeParents: true,
    });

    document.body.classList.add('noscroll');
}

const closeModal = (modalNum) => {
    const modalBgs = document.getElementsByClassName('spa__bath__content__modalBg');
    const modals = document.getElementsByClassName('spa__bath__content__modalContainer');

    modalBgs[modalNum].classList.remove('show');
    modals[modalNum].classList.remove('show');

    document.body.classList.remove('noscroll');
}