<?php get_header(); ?>

<main class="top">
    <section class="top__mv">


        <video controls autoplay muted loop playsinline width="100%">
            <source src="<?php echo get_template_directory_uri() ?>/images/top/K&Q_offline_type_B241025.mp4" type="video/mp4">
            <source src="<?php echo get_template_directory_uri() ?>/images/top/K&Q_offline_type_B241025.oggtheora.ogv" type="video/ogv">
            <source src="<?php echo get_template_directory_uri() ?>/images/top/K&Q_offline_type_B241025.webmhd.webm" type="video/webm">
        </video>
    </section>

    <section class="top__concept">
        <h1>日常の喧騒から離れ、<br>自分だけの時間を過ごすことができる特別な空間。</h1>
        <p>アクティブに楽しむ、<br class="sp">スパリゾート体験を</p>
        <p>
            埼玉最大級の温泉施設 キングアンドクイーンでは、<br>
            天空温泉、サウナ、岩盤浴、グルメゾーンなどの充実した設備で<br>
            あなたに究極の癒しをお届けします。<br>
            地下1300mより湧き上がる天然温泉は、体と心も悦ぶ究極の楽園です。
        </p>
        <a href="<?php echo home_url(); ?>/concept">キングアンドクイーンのコンセプト</a>
    </section>

    <section class="top__movie">
        <video controls autoplay muted loop playsinline width="100%">
            <source src="<?php echo get_template_directory_uri() ?>/images/top/top-cm.mp4" type="video/mp4">
            <source src="<?php echo get_template_directory_uri() ?>/images/top/top-cm.oggtheora.ogv" type="video/ogv">
            <source src="<?php echo get_template_directory_uri() ?>/images/top/top-cm.webmhd.webm" type="video/webm">
        </video>
    </section>

    <section class="top__news">
        <div class="top__news__carousel swiper topSwiper">

            <h2 class="top__news__heading">
                <img src="<?php echo get_template_directory_uri() ?>/images/top/icon.png" alt="">
                News&Topics
                <p>お知らせ</p>
                <a class="top__news__viewAll" href="<?php echo home_url() ?>/event">一覧を見る</a>
            </h2>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="top__news__carousel__wrapper swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'events', // 投稿タイプを指定
                    'posts_per_page' => 10, // 表示する記事数
                );
                $news_query = new WP_Query($args);
                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) :
                        $news_query->the_post();
                ?>
                        <div class="swiper-slide">
                            <a class="top__news__carousel__item eventItem" href="<?php the_permalink(); ?>">
                                <div class="top__news__carousel__item__img eventItem__img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/noImage.png" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>

                                <div class="top__news__carousel__item__title eventItem__title">
                                    <p class="top__news__carousel__item__title__date eventItem__title__date large"><span><?php echo get_the_date('d'); ?><span><?php echo get_post_time('n月Y'); ?></span></span></p>
                                    <div class="top__news__carousel__item__title__title eventItem__title__title large">
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
        </div>
    </section>

    <section class="top__banners">
        <a href="<?php echo get_home_url() ?>/bath" class="top__banners__item">
            <div>
                <p class="top__banners__item__catch">地下1300mより湧き上がる天然温泉</p>
                <h3 class="top__banners__item__title">お風呂</h3>
                <p class="top__banners__item__desc">
                    1300メートルの地下深くから湧き出る天然温泉。大地の恵みをたっぷり含んだ源泉は、まるで生命の源。日々の疲れを癒し、心身ともにリフレッシュできる至福のひとときをあなたに。
                </p>
                <p class="top__banners__item__button">詳細を見る</p>
            </div>
        </a>
        <a href="<?php echo get_home_url() ?>/stoneSauna" class="top__banners__item">
            <div>
                <p class="top__banners__item__catch">3つのコンセプトでアップデート</p>
                <h3 class="top__banners__item__title">岩盤浴</h3>
                <p class="top__banners__item__desc">
                    温めた天然鉱石が発する様々な波長の遠赤外線効果で、身体の内側から全身を温め、血流や新陳代謝を活性化する温熱浴。</p>
                <p class="top__banners__item__button">詳細を見る</p>
            </div>
        </a>
        <a href="<?php echo get_home_url() ?>/stoneSauna#skyhigh" class="top__banners__item">
            <div>
                <p class="top__banners__item__catch">屋外混浴バルコニー</p>
                <h3 class="top__banners__item__title">New Area Open</h3>
                <div class="top__banners__item__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/balconyIcon.png" alt="">>
                </div>
                <!-- <p class="top__banners__item__desc">
                    屋外混浴バルコニーについての説明入ります。屋外混浴バルコニーについての説明入ります。屋外混浴バルコニーについての説明入ります。屋外混浴バルコニーについての説明入ります。
                </p> -->
                <p class="top__banners__item__button">詳細を見る</p>
            </div>
        </a>
        <a href="<?php echo get_home_url() ?>/food" class="top__banners__item">
            <div>
                <p class="top__banners__item__catch">グルメ・フードコート</p>
                <h3 class="top__banners__item__title">New Area Open</h3>
                <div class="top__banners__item__logos">
                    <div class="top__banners__item__logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/kingqueendining-logo.png" alt="">>
                    </div>
                    <div class="top__banners__item__logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/chefscollabo-logo.png" alt="">>
                    </div>
                </div>
                <!-- <p class="top__banners__item__desc">
                    新施設・南郊運河エリアについての説明入ります。新施設・南郊運河エリアについての説明入ります。新施設・南郊運河エリアについての説明入ります。
                </p> -->
                <p class="top__banners__item__button">詳細を見る</p>
            </div>
        </a>
        <a href="<?php echo get_home_url() ?>/relaxation" class="top__banners__item">
            <div>
                <p class="top__banners__item__catch">日常を忘れて、深いリラックスへ</p>
                <h3 class="top__banners__item__title">リラクゼーション・エステ</h3>
                <p class="top__banners__item__desc">
                    一歩足を踏み入れると、そこはまるで別世界。日常の喧騒から離れ、ゆったりとした時間が流れます。
                </p>
                <p class="top__banners__item__button">詳細を見る</p>
            </div>
        </a>

    </section>

    <section class="top__map">
        <h2 class="top__map__heading">
            <img src="<?php echo get_template_directory_uri() ?>/images/top/icon.png" alt="">
            Area Map
            <p>施設内マップ</p>
        </h2>
        <div class="top__map__content">
            <a href="<?php echo get_template_directory_uri(); ?>/images/top/floormap.pdf" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/floormap1.svg" alt="">
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/images/top/floormap.pdf" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/floormap2.svg" alt="">
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/images/top/floormap.pdf" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/floormap3.svg" alt="">
            </a>
        </div>
    </section>

    <section class="top__info">
        <a href="<?php echo home_url(); ?>/guide" class="top__info__link">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/informationIcon.png" alt="">
            </div>
            <div>
                <p>Informations</p>
                <p>ご利用案内</p>
            </div>
        </a>
        <a href="<?php echo home_url(); ?>/access" class="top__info__link">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/accessIcon.png" alt="">
            </div>
            <div>
                <p>Access</p>
                <p>アクセス・シャトルバス</p>
            </div>
        </a>
    </section>
</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>