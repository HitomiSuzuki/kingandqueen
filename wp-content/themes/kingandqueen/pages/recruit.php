<?php
/*
Template Name: 採用情報
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="recruit">
    <div class="page-header">
        <div class="title-box">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <h1 class="page__title">一緒に働く仲間を募集しています</h1>

    <div class="recruit__content">
        <p class="recruit__catch">温泉バルコニーKing&Queenでは、<br>一緒に働いてくれるスタッフを随時募集しています。</p>
        <a href="tel:0429242828">04-2924-2828</a>
        <p class="recruit__place"><span>勤務地</span>:埼玉県所沢市北中2丁目271</p>
    </div>
</main>

<?php get_template_part('/sidenav'); ?>
<?php get_footer(); ?>