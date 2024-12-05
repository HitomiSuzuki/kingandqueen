<?php
/*
Template Name: アクセス
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main class="access main">
    <div class="mv">
        <p class="largeHeading eng">Access<span>アクセス</span></p>
    </div>

    <div class="access__map">
        <img src="<?php echo get_template_directory_uri(); ?>/images/access/king_queen_map1.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/access/king_queen_map2.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/access/king_queen_map3.png" alt="">
    </div>

    <div class="access__bus" id="bus">
        <img src="<?php echo get_template_directory_uri(); ?>/images/access/bus.png" alt="">
    </div>
</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>