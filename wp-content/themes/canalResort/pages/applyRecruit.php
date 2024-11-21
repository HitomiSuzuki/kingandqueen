<?php
/*
Template Name: 求人応募
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="contact main">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/recruit/mv.webp" alt="お問い合わせメインビジュアル">
        <p class="largeHeading eng">Recruit<span>求人応募フォーム</span></p>
    </div>

    <div class="contact__form">
        <h2 class="contact__subHeading">求人応募</h2>
        <div class="contact__form__progress">
            <p class="contact__form__progress__step title done">入力</p>
            <p class="contact__form__progress__step title contact__form__progress__step--progressLine">確認</p>
            <p class="contact__form__progress__step title contact__form__progress__step--progressLine">完了</p>
        </div>
        <ul class="contact__form__note">
            <li>入力されたお客様の個人情報は個人情報保護法に従い厳重に管理します。</li>
            <li>お問い合わせフォームに必要事項のご入力をして送信ボタンをクリックしてください。</li>
            <li>メールアドレスは正しくご入力ください（弊社より返信メールが届きません。）</li>
            <li>半角カナ入力は文字化けの原因になりますので、全角カナでご入力頂きますようお願いします。</li>
            <li>必須項目は必ず入力してください。</li>
        </ul>

        <!-- 問い合わせフォーム本体はContactForm7で管理 -->
        <?php echo apply_shortcodes('[contact-form-7 id="d26430e" title="求人応募"]') ?>
    </div>
</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>