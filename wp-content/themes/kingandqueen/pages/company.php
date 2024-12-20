<?php
/*
Template Name: 会社概要
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="company">
    <div class="page-header">
        <div class="title-box">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <h1 class="page__title">会社概要</h1>

    <div class="company__content">
        <dl>
            <dt>社名</dt>
            <dd>ZIP株式会社</dd>
            <dt>住所</dt>
            <dd>東京都墨田区錦糸２丁目４－６</dd>
        </dl>
    </div>
</main>

<?php get_template_part('/sidenav'); ?>
<?php get_footer(); ?>