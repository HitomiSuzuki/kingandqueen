<?php
/*
Template Name: リラクゼーション
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="relaxation">
    <section class="mv"></section>
    <section class="relaxation__main">
        <div class="relaxation__links">
            <a href="#relaxation_1" class="relaxation__link">
                <div>
                    <p>はり・きゅう laugh<br>温泉バルコニーKing&Queen院</p>
                </div>
            </a>
            <a href="#relaxation_2" class="relaxation__link">
                <div>
                    <img class="relaxation__link__logo--spareraku" src="<?php echo get_template_directory_uri(); ?>/images/relaxation/logo/spareraku.png" alt="">
                    <p>SpaRe.Ra.Ku<span>（スパリラク）</span></p>
                </div>
            </a>
            <a href="#relaxation_3" class="relaxation__link">
                <div>
                    <img class="relaxation__link__logo--beautypier" src="<?php echo get_template_directory_uri(); ?>/images/relaxation/logo/beautyPier.png" alt="">
                    <p>アカスリ・エステ Beauty Pier<br><span>（ビューティー ピアー）</span></p>
                </div>
            </a>

        </div>

        <ul class="relaxation__shops">
            <li class="relaxation__shop" id="relaxation_1">
                <div class="relaxation__shop__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/relaxation/harikyuLaugh.png" alt="">
                </div>

                <div class="relaxation__shop__text">
                    <h3 class="relaxation__shop__name">はり・きゅう laugh<br>温泉バルコニーKing&Queen院</h3>
                    <p class="relaxation__shop__desc">本格的なはり・灸治療や美容鍼を受けられます。温泉療法と伝統医療で最高の癒しをお届けします。</p>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/relaxation/pdf/laugh.pdf" target="_blank" class="relaxation__shop__link relaxation__shop__link--menu">メニューを見る</a>
                    <a href="https://www.peakmanager.com/online/index/z7q6r4/eNpLtDK0qi62MjSyUsovKMnMzytJTI_PTFGyLrYys1IyMTAxtDBVsq4FXDD01Qub" target="_blank" class="relaxation__shop__link relaxation__shop__link--web">ネット予約はこちら</a>
                    <p class="relaxation__shop__phone__note">お電話でのご予約・お問い合わせ</p>
                    <a href="tel:07012570913" class="relaxation__shop__link relaxation__shop__link--phone">070-1257-0913</a>
                </div>
            </li>
            <li class="relaxation__shop" id="relaxation_2">
                <div class="relaxation__shop__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/relaxation/spareraku.png" alt="">
                </div>

                <div class="relaxation__shop__text">
                    <h3 class="relaxation__shop__name">SpaRe.Ra.Ku</h3>
                    <p class="relaxation__shop__desc">首都圏No.1リラクゼーションブラント「Re.Ra.Ku」SPA Re.Ra.Kuとして誕生!!
                        独自のボディケアとストレッチで疲れを溜めない健康的な毎日をサポート。</p>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/relaxation/pdf/spaReraku.pdf" target="_blank" class="relaxation__shop__link relaxation__shop__link--menu">メニューを見る</a>
                    <a href="https://reraku.jp/studio/king-and-queen/booking" target="_blank" class="relaxation__shop__link relaxation__shop__link--web">ネット予約はこちら</a>
                </div>
            </li>
            <li class="relaxation__shop" id="relaxation_3">
                <div class="relaxation__shop__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/relaxation/beautypier.png" alt="">
                </div>

                <div class="relaxation__shop__text">
                    <h3 class="relaxation__shop__name">アカスリ・エステ Beauty Pier</h3>
                    <p class="relaxation__shop__desc">本場韓国のアカスリの手技は、身体の表面に溜まったアカ「角質」をこすり落とすことによる血行促進と新陳代謝の上昇が期待できます。
                        韓流エステによる癒しのひとときをぜひご堪能ください。</p>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/relaxation/pdf/beautyPier.pdf" target="_blank" class="relaxation__shop__link relaxation__shop__link--menu">メニューを見る</a>
                    <p class="relaxation__shop__phone__note">お電話でのご予約・お問い合わせ</p>
                    <a href="tel:0429416966" class="relaxation__shop__link relaxation__shop__link--phone">042-941-6966</a>
                </div>
            </li>
        </ul>
    </section>
</main>

<?php get_template_part('/sidenav'); ?>
<?php get_footer(); ?>