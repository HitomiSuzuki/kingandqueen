// 全てのhref="#"のaタグを取得
const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');

// 1のaタグにそれぞれクリックイベントを設定
for (let i = 0; i < smoothScrollTrigger.length; i++) {
    smoothScrollTrigger[i].addEventListener('click', (e) => {
        
        // ターゲットの位置を取得
        e.preventDefault();
        let href = smoothScrollTrigger[i].getAttribute('href'); // 各a要素のリンク先を取得
        let targetElement = document.getElementById(href.replace('#', '')); // リンク先の要素（コンテンツ）を取得
        
        const rect = targetElement.getBoundingClientRect().top; // ブラウザからの高さを取得
        const offset = window.scrollY; // 現在のスクロール量を取得
        let gap = 160; // 固定ヘッダー分の高さ
        const target = rect + offset - gap; //最終的な位置を割り出す

        // スムースにスクロール
        window.scrollTo({
            top: target,
            behavior: 'smooth',
        });
    });

}



// jQuery(window.onload = function() {
//     jQuery("svg a").click(function() {
//     //スクロールのスピード
//     var speed = 500;
//     //リンク元を取得
//     var href = jQuery(this).attr("xlink:href");
//     //リンク先を取得
//     var target = jQuery(href == "#" || href == "" ? 'html' : href);
//     //リンク先までの距離を取得
//     var position = target.offset().top;
//     //スムーススクロール
//     jQuery("html, body").animate({
//     scrollTop: position
//     }, speed, "swing");
//     return false;
    
//     });
//     });