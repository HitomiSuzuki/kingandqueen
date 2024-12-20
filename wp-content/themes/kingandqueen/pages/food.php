<?php
/*
Template Name: お食事ゾーン
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="food">
    <div class="page-header">
        <div class="title-box">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <h1 class="page__title">お食事ゾーン</h1>

    <div class="food__image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/food/food-visual.png" alt="">
    </div>

    <p class="food__desc">
        <span>旬の食材を味わうオリジナルメニューから、</span><br>
        <span>各地の人気飲食ブランドまで。</span><br>
        <span>話題のメニュー満載の館内フードコートエリア。</span>
    </p>

    <section class="food__area">

        <div class="food__area__title food__area__title--kingandqueendining">
            <?php
            $args = array(
                'post_type' => 'foodmenu', // 投稿を指定
                'posts_per_page' => 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'foodmenu-cat',  // タクソノミーを指定
                        'field' => 'slug',             // term_id(デフォルト),name,slug のいずれかを指定
                        'terms' => array('kingandqueendining'),    // ターム(文字列かIDを指定)
                    ),
                ),
            );
            $the_query = new WP_Query($args);
            ?>
            <p>大人気のコラボメニューが集合</p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/food/sectionLogo/KingQueenDining.png" alt="">
            <h2>キングアンドクイーンダイニング</h2>
            <?php // 投稿があった時
            if ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>">グランドメニューを見る</a>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>

        <div class="food__area__shops">
            <?php
            $shopArray = array(
                'yucchan' => array(
                    'name' => 'ユッチャン。',
                    'term' => 'yucchan',
                    'imgPath' => '/images/food/kingQueenDining/yucchan.JPG',
                    'isComingSoon' => false
                ),
                'hanabi' => array(
                    'name' => '麺屋はなび',
                    'term' => 'hanabi',
                    'imgPath' => '/images/food/kingQueenDining/hanabi.png',
                    'isComingSoon' => false
                ),
                'yoyogi-ichihachi' => array(
                    'name' => '代々木一八',
                    'term' => 'yoyogi-ichihachi',
                    'imgPath' => '/images/food/kingQueenDining/yoyogiIchihachi.jpg',
                    'isComingSoon' => false
                ),
                'fujiyama55' => array(
                    'name' => 'フジヤマ55',
                    'term' => 'fujiyama55',
                    'imgPath' => '/images/food/kingQueenDining/fujiyama55.png',
                    'isComingSoon' => false
                ),
                'grillers' => array(
                    'name' => 'GRILLERS',
                    'term' => 'grillers',
                    'imgPath' => '/images/food/kingQueenDining/grillers.png',
                    'isComingSoon' => false
                ),
                'callan-column' => array(
                    'name' => 'callan column',
                    'term' => 'callan-column',
                    'imgPath' => '/images/food/kingQueenDining/callan-column.png',
                    'isComingSoon' => false
                ),
                'ramens-japan' => array(
                    'name' => 'Ramen’s Japan',
                    'term' => 'ramens-japan',
                    'imgPath' => '/images/food/kingQueenDining/ramensJapan.png',
                    'isComingSoon' => false
                ),
                'yabuya' => array(
                    'name' => 'やぶ屋',
                    'term' => 'yabuya',
                    'imgPath' => '/images/food/kingQueenDining/yabuya.png',
                    'isComingSoon' => false
                ),
                'the-corner' => array(
                    'name' => 'THE CORNER',
                    'term' => 'the-corner',
                    'imgPath' => '/images/food/kingQueenDining/theCorner.png',
                    'isComingSoon' => false
                ),
                'teppan-rush' => array(
                    'name' => '鉄板ラッシュ！',
                    'term' => 'teppan-rush',
                    'imgPath' => '/images/food/kingQueenDining/teppanRush.png',
                    'isComingSoon' => false
                ),
                'nikudon-kotobuki' => array(
                    'name' => '肉どん寿',
                    'term' => 'nikudon-kotobuki',
                    'imgPath' => '/images/food/kingQueenDining/kotobuki.png',
                    'isComingSoon' => false
                ),
            );

            foreach ($shopArray as $shop) {
                get_template_part('/components/foodLink', null, $shop);
            };
            ?>
        </div>
    </section>
    <section class="food__area">
        <div class="food__area__title food__area__title--chefscollabo">
            <?php
            $args = array(
                'post_type' => 'foodmenu', // 投稿を指定
                'posts_per_page' => 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'foodmenu-cat',  // タクソノミーを指定
                        'field' => 'slug',             // term_id(デフォルト),name,slug のいずれかを指定
                        'terms' => array('chefscollabo'),    // ターム(文字列かIDを指定)
                    ),
                ),
            );
            $the_query = new WP_Query($args);
            ?>
            <p>老舗・名店のシェフがプロデュース</p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/food/sectionLogo/chefscollabo.png" alt="">
            <h2>シェフズコラボ</h2>
            <?php // 投稿があった時
            if ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>">グランドメニューを見る</a>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>

        <div class="food__area__shops">
            <?php
            $shopArray = array(
                'savoy' => array(
                    'name' => 'SAVOY',
                    'term' => 'SAVOY',
                    'imgPath' => '/images/food/chefsCollabo/savoy.jpg',
                    'isComingSoon' => false
                ),
                'Bondy' => array(
                    'name' => 'Bondy',
                    'term' => 'Bondy',
                    'imgPath' => '/images/food/chefsCollabo/bondy.jpg',
                    'isComingSoon' => false
                ),
                'picar' => array(
                    'name' => 'ピカール',
                    'term' => 'picar',
                    'imgPath' => '/images/food/chefsCollabo/picar.jpg',
                    'isComingSoon' => false
                ),
                'bon' => array(
                    'name' => '串かつ凡',
                    'term' => 'bon',
                    'imgPath' => '/images/food/chefsCollabo/bon.jpg',
                    'isComingSoon' => false
                ),
                'eiki' => array(
                    'name' => '鍈輝',
                    'term' => 'eiki',
                    'imgPath' => '/images/food/chefsCollabo/eiki.jpg',
                    'isComingSoon' => false
                ),
                'takamura' => array(
                    'name' => '日本料理たかむら',
                    'term' => 'takamura',
                    'imgPath' => '/images/food/chefsCollabo/takamura.jpg',
                    'isComingSoon' => false
                ),
                'tomita' => array(
                    'name' => '中華蕎麦とみ田',
                    'term' => 'tomita',
                    'imgPath' => '/images/food/chefsCollabo/tomita.jpg',
                    'isComingSoon' => false
                ),
                'sinshun-ya' => array(
                    'name' => '新旬屋本店',
                    'term' => 'sinshun-ya',
                    'imgPath' => '/images/food/chefsCollabo/sinshun-ya.jpg',
                    'isComingSoon' => false
                ),
                'iidaShoten' => array(
                    'name' => 'king&queen x 飯田商店のコラボラーメン',
                    'term' => 'iidaShoten',
                    'imgPath' => '/images/food/chefsCollabo/iida-shoten.jpg',
                    'isComingSoon' => false
                ),
                'konpirasou' => array(
                    'name' => '琴平荘',
                    'term' => 'konpirasou',
                    'imgPath' => '/images/food/chefsCollabo/konpirasou.jpg',
                    'isComingSoon' => false
                ),
                'nekogoori' => array(
                    'name' => 'nekogoori',
                    'term' => 'nekogoori',
                    'imgPath' => '/images/food/chefsCollabo/nekogoori.jpg',
                    'isComingSoon' => false
                ),
            );
            foreach ($shopArray as $shop) {
                get_template_part('/components/foodLink', null, $shop);
            };
            ?>
        </div>
    </section>

    <section class="food__area">
        <div class="food__area__title food__area__title--sansuisomoku">
            <?php
            $args = array(
                'post_type' => 'foodmenu', // 投稿を指定
                'posts_per_page' => 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'foodmenu-cat',  // タクソノミーを指定
                        'field' => 'slug',             // term_id(デフォルト),name,slug のいずれかを指定
                        'terms' => array('sansuisomoku'),    // ターム(文字列かIDを指定)
                    ),
                ),
            );
            $the_query = new WP_Query($args);
            ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/food/sectionLogo/sansui-somoku.png" alt="">
            <h2>山水草木<span>（さんせんそうもく）</span></h2>
            <?php // 投稿があった時
            if ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>">メニューを見る</a>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>

    <section class="food__area">
        <div class="food__area__title food__area__title--juicycafe">
            <?php
            $args = array(
                'post_type' => 'foodmenu', // 投稿を指定
                'posts_per_page' => 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'foodmenu-cat',  // タクソノミーを指定
                        'field' => 'slug',             // term_id(デフォルト),name,slug のいずれかを指定
                        'terms' => array('juicycafe'),    // ターム(文字列かIDを指定)
                    ),
                ),
            );
            $the_query = new WP_Query($args);
            ?>
            <p>くつろぎのカフェで体をクールダウン</p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/food/sectionLogo/juicycafe.png" alt="">
            <h2>ジューシーカフェ</h2>
            <?php // 投稿があった時
            if ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>">メニューを見る</a>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>
</main>

<?php get_template_part('/sidenav'); ?>
<?php get_footer(); ?>