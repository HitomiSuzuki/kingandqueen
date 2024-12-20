<?php get_header(); ?>

<main class="collaboration main">
    <div class="mv">
        <p class="largeHeading eng accentColor">Menu<span>メニュー</span></p>
    </div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="menu__content"><?php the_content(); ?></div>
    <?php endwhile;
    endif; ?>

</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>