<?php
/*
Template Name: イベント一覧
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="archiveEvent main">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/event/mv.png" alt="ご利用案内メインビジュアル">
        <p class="largeHeading eng">Event<span>イベント</span></p>
    </div>
    <h1 class="archiveEvent__heading">Event</h1>

    <div class="archiveEvent__wrapper">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'events', // 投稿タイプを指定
            'posts_per_page' => 12,  // 表示する記事数
            'paged' => $paged // ページ番号を指定
        );
        $news_query = new WP_Query($args);
        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) :
                $news_query->the_post();
        ?>
                <a class="archiveEvent__item eventItem" href="<?php the_permalink(); ?>">
                    <div class="archiveEvent__item__img eventItem__img">
                        <?php
                        if (isset($_GET['name'])) {
                            echo $_GET['name'];
                        }
                        ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('thumbnail'); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top/noImage.png" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>

                    <div class="archiveEvent__item__title eventItem__title">
                        <p class="archiveEvent__item__title__date eventItem__title__date"><span><?php echo get_the_date('d'); ?><span><?php echo get_post_time('n月Y'); ?></span></span></p>
                        <p class="archiveEvent__item__title__title eventItem__title__title"><?php the_title(); ?></p>
                    </div>
                </a>

        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>

        <!-- ページネーションの表示 -->
        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
    </div>

</main>

<?php get_template_part('/pages/sidenav'); ?>
<?php get_footer(); ?>