<?php
/*
Template Name: コンセプト
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="concept main">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/concept/concept-mv.webp" alt="コンセプトメインビジュアル">
        <p class="largeHeading eng">Concept<span>コンセプト</span></p>
    </div>

    <section class="concept__section concept__section--catch">
        <h2 class="concept__catch">
            鏡よ鏡、この地の王は誰？<br class="sp">女王は誰？
        </h2>
        <p class="concept__sectionCatchDesc">
            あるところに、ライオンの夫婦がいました。<br>
            私の方が強い。私の方が美しい。<br>
            私の方が勇気がある。私の方が賢い。<br>
            俺が王だ。私は女王よ。<br>
            どちらが真の王か、女王か、<br class="sp">いつも言い合ってばかりいました。<br>
            よし、それなら冒険の旅で決めよう。<br class="sp">ある日、二頭は旅に出ました。
        </p>
    </section>



    <section class="concept__section">
        <div class="concept__text">
            <p class="concept__sectionDesc">
                旅の途中、灼熱の地では、<br />
                マグマの熱風を浴びる、<br class="sp">しなやかなコヨーテに出会いました。
            </p>
            <h2 class="concept__sectionHeading">
                とんでもない、<br class="sp">この暑さ！<br class="sp">彼だって灼熱の<br class="sp">キングじゃないか！
            </h2>
        </div>
        <div class="concept__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/concept/concept-1.webp" alt="">
        </div>
    </section>

    <section class="concept__section">

        <div class="concept__text">
            <p class="concept__sectionDesc">
                極寒の地では、マイナス20℃をものともせず<br />
                北極の海に白熊が飛び込んでいました。
            </p>
            <h2 class="concept__sectionHeading">
                凍えないのかしら…<br>
                彼女は氷点下の<br class="sp">クイーンよ。
            </h2>
        </div>
        <div class="concept__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/concept/concept-2.webp" alt="">
        </div>
    </section>

    <section class="concept__section">
        <div class="concept__text">
            <p class="concept__sectionDesc">
                オアシスに集まる孤高のトラ、<br class="sp">勇猛なゾウも、かよわい羊も、<br />
                ここでは争うことなく、<br class="sp">美味を分け合っています。
            </p>
            <h2 class="concept__sectionHeading">
                信じられない！<br>
                こんなに笑い合う宴があるなんて…
            </h2>
        </div>
        <div class="concept__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/concept/concept-3.webp" alt="">
        </div>
    </section>

    <section class="concept__section">
        <div class="concept__text">
            <p class="concept__sectionDesc">
                冒険の旅の終わり、地獄の峠をこえたあたり、<br />
                アライグマとクマの二匹は疲れを癒しています。
            </p>
            <h2 class="concept__sectionHeading">
                彼らはみんな、<br>
                ここで仲良く解放を<br class="sp">楽しむ存在だ。
            </h2>
        </div>
        <div class="concept__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/concept/concept-4.webp" alt="">
        </div>
    </section>

    <section class="concept__section concept__section--catch">
        <h2 class="concept__catch">
            鏡よ鏡、この地の王は誰？<br class="sp">女王は誰？
        </h2>
        <p class="concept__sectionCatchDesc">
            あるところに、ライオンの夫婦がいました。<br class="sp">どちらが真の王か、<br>
            女王か、いつも言い合ってばかりいました。<br class="sp">そして、二匹は旅の末に知ったのです。
        </p>
        <div class="concept__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/concept/concept-5.webp" alt="">
        </div>
    </section>
</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>