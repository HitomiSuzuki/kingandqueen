// ハンバーガーメニューに開閉機能をつける
$(window).on('load', function() {
    
    const humburger = document.getElementById('humburger');

    const toggleOpen = () => {
        const header = document.getElementById('header');
        header.classList.toggle('open');
    }
    
    humburger.addEventListener('click', toggleOpen);
})

// タブレット以下サイズからウィンドウ幅をPCまで広げた時にもヘッダーが表示されるように
window.addEventListener('resize', function() {
    if(this.window.innerWidth >= 1025) {
        $('#header').addClass('visible');
    }
})

// const toggleBtns = $('.js-toggle');
// $.each(toggleBtns, (i, el) => {
//   el.addEventListener('touchstart', (e) => {
//     e.preventDefault();
//     e.stopPropagation();
//     const self = $(e.currentTarget);
//     console.log(self)
//     self.toggleClass('is-open');
//     self.next().not(':animated').slideToggle(200);
//   }, { passive: false });
// });

$('#header').on("click", ".js-toggle", function(e) {
    const self = $(e.currentTarget);
    self.toggleClass('is-open');
    self.next().not(':animated').slideToggle(200);
});