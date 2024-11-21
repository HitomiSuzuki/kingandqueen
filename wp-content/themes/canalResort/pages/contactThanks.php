<?php
/*
Template Name: お問い合わせ完了
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="contact main">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/contact/mv.webp" alt="お問い合わせメインビジュアル">
        <p class="largeHeading eng">Contact<span>お問い合わせ</span></p>
    </div>

    <h1 class="contact__heading">お問い合わせ</h1>
    <h2 class="contact__subHeading">お電話でのお問い合わせ</h2>

    <div class="contact__phone">
        <p class="contact__phone__number">
            0000-00-0000
        </p>
        <p class="contact__phone__hour"><span>受付時間</span>：平日9：00～18：00、土日祝9：00～17：00</p>
    </div>


    <div class="contact__form">
        <h2 class="contact__subHeading">お問い合わせフォーム<br />からのお問い合わせ</h2>
        <div class="contact__form__progress">
            <p class="contact__form__progress__step title done">入力</p>
            <p class="contact__form__progress__step title contact__form__progress__step--progressLine done">確認</p>
            <p class="contact__form__progress__step title contact__form__progress__step--progressLine done">完了</p>
        </div>
        <p class="contact__form__thanks">お問い合わせありがとうございました。</p>
    </div>
</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>