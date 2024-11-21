<?php
/*
Template Name: キンクイメニュー
Template Post Type: page
*/
?>

<?php get_header(); ?>
<main>
    <div class="mv">
        <p class="largeHeading eng"> <?php the_title(); ?></p>
    </div>
    <div class="kingQueenMenu__content">
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>