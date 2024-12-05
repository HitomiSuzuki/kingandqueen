<?php
/*
Template Name: フード
Template Post Type: page
*/

?>

<?php get_header(); ?>

<main class="food">
    <div class="mv food__mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/food/food-mv.webp" alt="フードメインビジュアル">
        <p class="mv__heading largeHeading eng">お食事ゾーン</p>
    </div>

    <div class="food__floor__imageWithText imageWithText flex flex--end white">
        <div class="imageWithText__imageWrapper flex full">
            <div>
                <img src="<?php echo get_template_directory_uri() ?>/images/food/food-1.webp" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/images/food/food-2.webp" alt="">
            </div>
            <img class="left" src="<?php echo get_template_directory_uri() ?>/images/food/food-3.webp" alt="">
        </div>
    </div>

    <div class="food__floor__imageWithText imageWithText flex white">
        <div class="imageWithText__imageWrapper flex">
            <img src="<?php echo get_template_directory_uri() ?>/images/food/food-4.webp" alt="" class="full">
        </div>
    </div>

    <div class="food__image">
        <img src="<?php echo get_template_directory_uri() ?>/images/food/food-5.webp" alt="">
    </div>

    <!-- KING&QUEEN DINNING -->
    <div class="food__shopList kingQueenDining">
        <div class="food__shopList__areaLogo">
            <a href="<?php echo home_url(); ?>/kingqueen-dining-menu/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/food/kingQueenDining/KingQueenDining.png" alt="KING&QUEEN DINING LOGO" class="food__shopList__areaLogo">
            </a>
            <p>↑ メニューはこちら ↑</p>
        </div>
        <div class="food__shopList__shops">
            <div class="food__shopList__shops__inner">
                <?php
                $shopArray = array(
                    'yucchan' => array(
                        'name' => 'ユッチャン',
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
                        'name' => 'grillers',
                        'term' => 'grillers',
                        'imgPath' => '/images/food/kingQueenDining/grillers.png',
                        'isComingSoon' => false
                    ),
                    'callan-column' => array(
                        'name' => 'callan-column',
                        'term' => 'callan-column',
                        'imgPath' => '/images/food/kingQueenDining/callan-column.png',
                        'isComingSoon' => false
                    ),
                    'ramens-japan' => array(
                        'name' => 'ramens-japan',
                        'term' => 'ramens-japan',
                        'imgPath' => '/images/food/kingQueenDining/ramensJapan.png',
                        'isComingSoon' => false
                    ),
                );

                foreach ($shopArray as $shop) {
                    get_template_part('/pages/foodLink', null, $shop);
                };
                ?>


            </div>
        </div>
    </div>

    <!-- CHEF'S COLLABO -->
    <div class="food__shopList chefsCollabo">
        <div class="food__shopList__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/food/chefsCollabo/chefscollabo-kv.webp" alt="">
        </div>

        <div class="food__shopList__areaLogo">
            <a href="<?php echo home_url(); ?>/chefscollabomenu/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/food/chefsCollabo/ChefsCollabo.png" alt="CHEF'S COLLABO LOGO" class="food__shopList__areaLogo">
            </a>
            <p>↑ メニューはこちら ↑</p>
        </div>
        <div class="food__shopList__shops">
            <div class="food__shopList__shops__inner">
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
                    get_template_part('/pages/foodLink', null, $shop);
                };
                ?>
            </div>
        </div>
    </div>

    <!-- 山水草木 -->
    <div class="food__shopList sansui-somoku">
        <div class="food__shopList__areaLogo">
            <a href="<?php echo home_url(); ?>/sansui-somoku-menu/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/food/sansui-somoku.png" alt="sansui-somoku logo" class="food__shopList__areaLogo">
            </a>
            <p>↑ メニューはこちら ↑</p>
        </div>
    </div>

    <!-- Juicy CAFE -->
    <div class="food__shopList juicyCafe">
        <div class="food__shopList__areaLogo">
            <a href="<?php echo home_url(); ?>/juicy-cafe-menu/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/food/juicyCafeLogo.png" alt="Juicy Cafe logo" class="food__shopList__areaLogo">
            </a>
            <p>↑ メニューはこちら ↑</p>
        </div>
    </div>

    <!-- TODO: 情報もらい次第復活 -->
    <!-- BlueSky CAFE -->
    <!-- <div class="food__shopList blueskyCafe">
        <img src="" alt="BlueSlyCAFE logo" class="food__shopList__areaLogo">

        <p class="food__shopList__commingSoon bold">COMMING SOON</p>
    </div> -->
</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>