<?php
/*
Template Name: 求人応募完了
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="contact main">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/recruit/mv.webp" alt="お問い合わせメインビジュアル">
        <p class="largeHeading eng">Recruit<span>求人応募</span></p>
    </div>

    <div class="contact__form">
        <h2 class="contact__subHeading">求人応募</h2>
        <div class="contact__form__progress">
            <p class="contact__form__progress__step title done">入力</p>
            <p class="contact__form__progress__step title contact__form__progress__step--progressLine done">確認</p>
            <p class="contact__form__progress__step title contact__form__progress__step--progressLine done">完了</p>
        </div>
        <p class="contact__form__thanks">ご応募ありがとうございました。</p>
    </div>
</main>


<?php get_template_part('/pages/sidenav'); ?>
<?php get_footer(); ?>