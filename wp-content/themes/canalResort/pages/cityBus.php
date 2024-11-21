<?php
/*
Template Name: 市バス
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main class="cityBus main">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/contact/mv.png" alt="お問い合わせメインビジュアル">
        <p class="largeHeading eng">City bus<span>市バスご案内</span></p>
    </div>

    <div class="cityBus__content">
        <img src="<?php echo get_template_directory_uri() ?>/images/access/bus/cityBus.png" alt="" class="cityBus__content__img">
        <a href="https://www.kotsu.city.nagoya.jp/jp/pc/bus/timetable_dtl.html?name=%E5%90%8D%E5%8F%A4%E5%B1%8B%E9%A7%85&keito=%E5%90%8D%E9%A7%8519&lineindex=0" class="cityBus__content__link">時刻表はこちら</a>
    </div>
</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>