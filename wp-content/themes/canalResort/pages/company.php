<?php

/*
Template Name: 会社概要
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main class="company main">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/company/mv.png" alt="ご利用案内メインビジュアル">
        <p class="largeHeading eng">Company Profile<span>会社概要</span></p>
    </div>

    <h1 class="company__heading">会社概要</h1>

    <!-- 会社概要 -->
    <dl class="company__descList">

        <dt>社名</dt>
        <dd>ZIP株式会社</dd>

        <dt>住所</dt>
        <dd>東京都墨田区錦糸２丁目４－６</dd>
    </dl>
</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>