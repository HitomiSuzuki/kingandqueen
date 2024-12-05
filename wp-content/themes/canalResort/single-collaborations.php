<?php get_header(); ?>

<main class="collaboration main">
    <div class="mv">
        <p class="largeHeading eng accentColor">Collaboration Menu<span>コラボメニュー</span></p>
    </div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="collaboration__heading"><?php the_title(); ?></h1>
            <div class="collaboration__content"><?php the_content(); ?></div>
    <?php endwhile;
    endif; ?>

</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>