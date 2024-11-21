<?php
/*
Template Name: リラクゼーション
Template Post Type: page
*/

?>
<?php get_header(); ?>

<main class="relaxation main">
    <div class="mv">
        <p class="largeHeading eng accentColor">
            Relaxation
            <span>リラクゼーションエリア</span>
        </p>
    </div>

    <div class="relaxation__scrollButtons">
        <a href="#relaxation_1" class="relaxation__scrollButton relaxation">はり・きゅう laugh 温泉バルコニーKing&Queen院</a>
        <a href="#relaxation_2" class="relaxation__scrollButton relaxation">ボディケア・フット・エステ「SpaRe・Ra・Ku」</a>
        <a href="#relaxation_3" class="relaxation__scrollButton relaxation">アカスリ・エステ Beauty Pier</a>
    </div>


    <!-- リラクゼーションアイテム はり・きゅう laugh-->
    <div class="relaxation__item" id="relaxation_1">
        <div class="relaxation__item__img"><img src="<?php echo get_template_directory_uri(); ?>/images/relaxation/harikyuLaugh.webp" alt="はり・きゅうlaugh"></div>
        <div class="relaxation__item__content">
            <h2 class="relaxation__item__content__title">はり・きゅう laugh 温泉バルコニーKing&Queen院</h2>
            <p class="relaxation__item__content__desc">
                本格的なはり・灸治療や美容鍼を受けられます。温泉療法と伝統医療で最高の癒しをお届けします。
            </p>
            <!-- <dl class="relaxation__item__content__table">
                <dt>時間</dt>
                <dd>
                    <p>テキストが入ります</p>
                </dd>
            </dl> -->
            <a href="https://www.peakmanager.com/online/index/z7q6r4/eNpLtDK0qi62MjSyUsovKMnMzytJTI_PTFGyLrYys1IyMTAxtDBVsq4FXDD01Qub" class="relaxation__item__content__menu">ネット予約はこちら</a>
            <p class="relaxation__item__content__phone">
                <span>ご予約・お問い合わせ</span>
                070-1257-0913
            </p>
        </div>
    </div>

    <!-- リラクゼーションアイテム Spa Re・Ra・Ku -->
    <div class="relaxation__item" id="relaxation_2">
        <div class="relaxation__item__img"><img src="<?php echo get_template_directory_uri(); ?>/images/relaxation/spaRe.Ra.Ku.webp" alt="ボディケア・フット・エステ「SpaRe・Ra・Ku」"></div>
        <div class="relaxation__item__content">
            <h2 class="relaxation__item__content__title">SpaRe.Ra.Ku</h2>
            <p class="relaxation__item__content__desc">
                首都圏No.1リラクゼーションブラント「Re.Ra.Ku」SPA Re.Ra.Kuとして誕生!!<br>
                独自のボディケアとストレッチで疲れを溜めない健康的な毎日をサポート。
            </p>
            <!-- <dl class="relaxation__item__content__table">
                <dt>時間</dt>
                <dd>
                    <p>テキストが入ります</p>
                </dd>
            </dl> -->
            <a href="<?php echo get_template_directory_uri(); ?>/images/relaxation/spaRe.ra.ku.pdf" class="relaxation__item__content__menu">メニューを見る</a>
            <a href="https://reraku.jp/studio/king-and-queen/booking" class="relaxation__item__content__menu">ネット予約はこちら</a>
        </div>
    </div>

    <!-- リラクゼーションアイテム アカスリ・エステ Beauty Pier -->
    <div class="relaxation__item" id="relaxation_3">
        <div class="relaxation__item__img"><img src="<?php echo get_template_directory_uri(); ?>/images/relaxation/beautyPier.webp" alt="アカスリ・エステ Beauty Pier"></div>
        <div class="relaxation__item__content">
            <h2 class="relaxation__item__content__title">アカスリ・エステ Beauty Pier</h2>
            <p class="relaxation__item__content__desc">
                本場韓国のアカスリの手技は、身体の表面に溜まったアカ「角質」をこすり落とすことによる血行促進と新陳代謝の上昇が期待できます。<br>
                韓流エステによる癒しのひとときをぜひご堪能ください。
            </p>
            <!-- <dl class="relaxation__item__content__table">
                <dt>時間</dt>
                <dd>
                    <p>テキストが入ります</p>
                </dd>
            </dl> -->
            <a href="<?php echo get_template_directory_uri(); ?>/images/relaxation/beautyPier.pdf" class="relaxation__item__content__menu">メニューを見る</a>
            <p class="relaxation__item__content__phone">
                <span>ご予約・お問い合わせ</span>
                042-941-6966
            </p>
        </div>
    </div>


</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>