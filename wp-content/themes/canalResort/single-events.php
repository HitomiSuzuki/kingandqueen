<?php get_header(); ?>

<main class="event main">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/event/mv.png" alt="ご利用案内メインビジュアル">
        <p class="largeHeading eng">Event<span>イベント</span></p>
    </div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="event__heading"><?php the_title(); ?></h1>
            <div class="event__content"><?php the_content(); ?></div>

    <?php endwhile;
    endif; ?>

</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>