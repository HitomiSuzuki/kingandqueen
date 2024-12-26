<?php get_header(); ?>

<main class="top">
    <section class="top__mv">
        <video controls autoplay muted loop playsinline width="100%">
            <source src="<?php echo get_template_directory_uri() ?>/images/top/movie/K&Q_offline_type_B241025.mp4" type="video/mp4">
            <source src="<?php echo get_template_directory_uri() ?>/images/top/movie/K&Q_offline_type_B241025.oggtheora.ogv" type="video/ogv">
            <source src="<?php echo get_template_directory_uri() ?>/images/top/movie/K&Q_offline_type_B241025.webmhd.webm" type="video/webm">
        </video>
    </section>

    <section class="top__nav">
        <ul class="top__nav__inner">
            <li class="top__nav__item">
                <a href="" class="top__nav__link top__nav__link--fee">
                    <p>ご利用料金</p>
                </a>
            </li>
            <li class="top__nav__item">
                <a href="" class="top__nav__link top__nav__link--openingHour">
                    <p>営業時間</p>
                </a>
            </li>
            <li class="top__nav__item">
                <a href="" class="top__nav__link top__nav__link--access">
                    <p>アクセス</p>
                </a>
            </li>
            <li class="top__nav__item">
                <a href="" class="top__nav__link top__nav__link--bus">
                    <p>無料シャトルバス</p>
                </a>
            </li>
            <li class="top__nav__item">
                <a href="" class="top__nav__link top__nav__link--app">
                    <p>公式アプリ</p>
                </a>
            </li>
        </ul>
    </section>

    <section class="top__concept">
        <div class="top__concept__catch">
            <img class="male-lion" src="<?php echo get_template_directory_uri(); ?>/images/top/animals/maleLion.png" alt="">
            <h1><span>楽しんだ者こそ、王であり、女王。</span><span class="h1-large">本能を解放せよ。</span><span>ここは、関東最大級のスパリゾート</span></h1>
            <img class="female-lion" src="<?php echo get_template_directory_uri(); ?>/images/top/animals/femaleLion.png" alt="">
        </div>

        <div class="top__concept__image">
            <img class="img-layer" src="<?php echo get_template_directory_uri(); ?>/images/top/concept/layer.png" alt="">
            <img class="img-animal1" src="<?php echo get_template_directory_uri(); ?>/images/top/animals/bearandcheater.png" alt="">
            <img class="img-title" src="<?php echo get_template_directory_uri(); ?>/images/top/concept/title.png" alt="">
            <img class="img-splash" src="<?php echo get_template_directory_uri(); ?>/images/top/concept/splash.png" alt="">
            <img class="img-animal2" src="<?php echo get_template_directory_uri(); ?>/images/top/animals/bearandracoon.png" alt="">
        </div>

        <div class="top__concept__movie">
            <video controls autoplay muted loop playsinline width="100%">
                <source src="<?php echo get_template_directory_uri() ?>/images/top/movie/top-cm.mp4" type="video/mp4">
                <source src="<?php echo get_template_directory_uri() ?>/images/top/movie/top-cm.oggtheora.ogv" type="video/ogv">
                <source src="<?php echo get_template_directory_uri() ?>/images/top/movie/top-cm.webmhd.webm" type="video/webm">
            </video>

            <a href="" class="top__concept__link">コンセプトについて詳しく見る</a>
        </div>
    </section>

    <section class="top__facilities">
        <h2 class="top__sectionTitle">FACILITIES<span>施設一覧</span></h2>
        <ul class="top__facilitiesList">
            <li class="top__facilitiesItem top__facilitiesItem--bath">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/animals/zebra.png" alt="">
                    <h3 class="top__facilitiesItem__title">
                        NATURAL HOT SPRINGS & BATH
                        <span>天然温泉と各種お風呂</span>
                    </h3>
                    <a href="<?php echo home_url(); ?>/sauna_bath">詳細を見る</a>
                </div>
            </li>
            <li class="top__facilitiesItem top__facilitiesItem--sauna">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/animals/elephant.png" alt="">
                    <h3 class="top__facilitiesItem__title">
                        SAUNA
                        <span>サウナ</span>
                    </h3>
                    <a href="<?php echo home_url(); ?>/sauna_bath">詳細を見る</a>
                </div>
            </li>
            <li class="top__facilitiesItem top__facilitiesItem--bedrock">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/animals/gollira.png" alt="">
                    <h3 class="top__facilitiesItem__title">
                        BEDOROCK&BALCONY
                        <span>岩盤浴/バルコニー</span>
                    </h3>
                    <a href="<?php echo home_url(); ?>/bedrock">詳細を見る</a>
                </div>
            </li>
            <li class="top__facilitiesItem top__facilitiesItem--food">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/animals/elephanttigersheep.png" alt="">
                    <h3 class="top__facilitiesItem__title">
                        FOOD & RESTAURANT
                        <span>お食事ゾーン</span>
                    </h3>
                    <a href="<?php echo home_url(); ?>/food">詳細を見る</a>
                </div>
            </li>
            <li class="top__facilitiesItem top__facilitiesItem--relaxation">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/animals/bearandracoon2.png" alt="">
                    <h3 class="top__facilitiesItem__title">
                        RELAXATION
                        <span>リラクゼーション</span>
                    </h3>
                    <a href="<?php echo home_url(); ?>/relaxation">詳細を見る</a>
                </div>
            </li>
        </ul>
    </section>

    <section class="top__news">
        <h2 class="top__sectionTitle">NEWS TOPICS<span>お知らせ</span></h2>
        <!-- swiper -->
        <div class="top__news__container swiper">

            <div class="top__news__carousel__wrapper swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'news', // 投稿タイプを指定
                    'posts_per_page' => -1, // 表示する記事数
                );
                $news_query = new WP_Query($args);
                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) :
                        $news_query->the_post();
                        $terms = get_the_terms($post->ID, 'news-cat');
                ?>
                        <div class="swiper-slide">
                            <a class="top__news__carousel__item" href="<?php the_permalink(); ?>">
                                <div class="top__news__carousel__item__img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/noImage.png" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>

                                <div class="top__news__carousel__item__title">
                                    <?php
                                    if ($terms) :
                                        foreach ($terms as $term) :
                                            echo '<p class="top__news__carousel__item__cat">' . $term->name . '</p>'; //ターム名
                                        endforeach;
                                    endif; ?>
                                    <p class="top__news__carousel__item__title__date"><?php echo get_the_date('Y年m月d日'); ?></span></span></p>
                                    <div class="top__news__carousel__item__title__title">
                                        <p><?php the_title(); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;

                else : ?>
                    <p class="top__news__noArticle">お知らせはまだありません。</p>
                <?php
                endif;
                wp_reset_postdata(); ?>
            </div>

            <div class="top__news__carousel__navigations">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <section class="top__map">
        <h2 class="top__sectionTitle">AREA MAP<span>館内マップ</span></h2>
        <div class="top__map__container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/map.png" alt="">
        </div>

        <a href="<?php echo get_template_directory_uri(); ?>/images/floormap.pdf" target="_blannk" class="top__map__link">詳細マップはこちら</a>
    </section>
</main>


<?php get_template_part('/sidenav'); ?>

<?php get_footer(); ?>