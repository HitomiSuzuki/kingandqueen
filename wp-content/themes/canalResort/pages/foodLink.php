<?php
// 引数に値が入っているかチェックの上、それぞれ変数に格納
$term = isset($args) && isset($args['term']) ? $args['term'] : '';
$name = isset($args) && isset($args['name']) ? $args['name'] : '';
$imgPath = isset($args) && isset($args['imgPath']) ? $args['imgPath'] : '';
$isComingSoon = isset($args) && isset($args['isComingSoon']) ? $args['isComingSoon'] : '';

// 固定ページに特定のカテゴリーを表示
$args = array(
    'post_type' => 'foodmenu', // 投稿を指定
    'posts_per_page' => 1,
    'tax_query' => array(
        array(
            'taxonomy' => 'foodmenu-cat',  // タクソノミーを指定
            'field' => 'slug',             // term_id(デフォルト),name,slug のいずれかを指定
            'terms' => array($term),    // ターム(文字列かIDを指定)
        ),
    ),
);

$the_query = new WP_Query($args);
// 投稿があった時
if ($the_query->have_posts()) :
?>

    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <a class="food__shopList__shops__item" href="<?php the_permalink(); ?>">
            <div>
                <img src="<?php echo get_template_directory_uri() . $imgPath; ?>" alt="<?php echo $name; ?>">
                <img src="<?php echo get_template_directory_uri() ?>/images/food/menuCorner.png" class="menu-corner">
            </div>
            <p><?php echo $name; ?></p>
        </a>
    <?php endwhile; ?>
<?php else : ?>
    <div class="food__shopList__shops__item" href="<?php the_permalink(); ?>">
        <?php if ($isComingSoon) : ?>
            <div class="coming-soon">
                <img src="<?php echo get_template_directory_uri() . $imgPath; ?>" alt="<?php echo $name; ?>">
            </div>
        <?php else : ?>
            <div>
                <img src="<?php echo get_template_directory_uri() . $imgPath; ?>" alt="<?php echo $name; ?>">
            </div>
        <?php endif; ?>
        <p><?php echo $name; ?></p>
    </div>
<?php endif;
wp_reset_postdata();
?>