<?php
/*
Template Name: アクセス(地下鉄から)
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main class="access main">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/contact/mv.png" alt="お問い合わせメインビジュアル">
        <p class="largeHeading eng">Access<span>アクセス</span></p>
    </div>

    <div class="access__subway">
        <div class="access__subway__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/access/bus/fushimi.jpg" alt="伏見バス">
            <a href="<?php echo get_home_url() ?>/timetable#fushimi" class="access__content__route__timetable timetableButton">時刻表</a>
        </div>
        <div class="access__subway__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/access/bus/kanayama.jpg" alt="金山バス">
            <a href="<?php echo get_home_url() ?>/timetable#kanayama" class="access__content__route__timetable timetableButton">時刻表</a>
        </div>
        <div class="access__subway__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/access/bus/nagoya.jpg" alt="名古屋バス">
            <a href="<?php echo get_home_url() ?>/timetable#fushimi" class="access__content__route__timetable timetableButton">時刻表</a>
        </div>
        <div class="access__subway__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/access/bus/rokubantyo.jpg" alt="六番町バス">
            <a href="<?php echo get_home_url() ?>/timetable#kanayama" class="access__content__route__timetable timetableButton">時刻表</a>
        </div>
    </div>

</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>