<?php
/*
Template Name: アクセス
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="access">
    <div class="page-header">
        <div class="title-box">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <h1 class="page__title">キングアンドクイーンへの行きかた</h1>

    <div class="access__map">
        <ul>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/access/map1.png" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/access/map2.png" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/access/map3.png" alt="">
            </li>
        </ul>
    </div>

    <h1 class="page__title">シャトルバス</h1>
    <div class="access__bus">
        <img src="<?php echo get_template_directory_uri(); ?>/images/access/bus.png" alt="">
    </div>
</main>

<?php get_template_part('/sidenav'); ?>
<?php get_footer(); ?>