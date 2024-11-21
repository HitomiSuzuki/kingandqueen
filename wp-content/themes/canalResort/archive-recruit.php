<?php
/*
Template Name: 求人情報
Template Post Type: page
*/
?>
<?php get_header(); ?>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = array(
    'post_type'    => 'recruit',
    'posts_per_page'  => 20,
    'paged'  =>  $paged
);
$the_query = new WP_Query($args); /* サブクエリでデータを取得し変数（インスタンス）に格納 */
?>

<main class="recruit main">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/recruit/mv.webp" alt="採用情報メインビジュアル">
        <p class="largeHeading eng">Recruit<span>採用情報</span></p>
    </div>

    <h1 class="recruit__heading">一緒に働く仲間を<br class="spBar">募集しています</h1>
    <!-- TODO: Recruit追加され次第消す -->
    <p class="recruit__note">
        温泉バルコニーKing&Queenでは、一緒に働いてくれるスタッフを随時募集しています。<br>
        下記の店舗電話番号にお電話ください。<br>
        勤務地:埼玉県所沢市北中2丁目271<br>
        TEL:04-2924-2828
    </p>

    <!-- TODO: 求人情報が入り次第コメントアウト外す -->
    <!-- <div class=" recruit__content">
        <table class="recruit__content__table">
            <tbody>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <tr>
                            <td rowspan="3" class="title"><?php the_time('Y.m.d'); ?></td>
                            <td>
                                <a href="<?php the_permalink(); ?>">
                                    <p>
                                        <?php the_title(); ?>
                                        <span class="archive__item__title__date"></span>
                                    </p>
                                    <p class="detail">>詳細を見る</p>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    ループ終了後（endwhile）にthe_post()で使った$postをリセットします。
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p>関連アイテムはまだありません。</p>
                <?php endif; ?>
            </tbody>
        </table>
    </div> -->
</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>