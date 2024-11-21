<?php

/*
Template Name: キャナルラウンジ
Template Post Type: page
*/
?>
<?php get_header(); ?>

<main class="canalLounge">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/canalLounge/mv.jpg" alt="ご利用案内メインビジュアル">
        <div class="mvBg"></div>
        <p class="largeHeading eng">Canal Lounge<span>キャナルラウンジ</span></p>
    </div>

    <h1 class="canalLounge__heading">キャナルラウンジ</h1>

    <div class="canalLounge__floor canalLounge__floor--1f">
        <h2 class="canalLounge__floor__title">1Fフロア・屋外休憩所</h2>
        <p class="canalLounge__floor__desc">
            1階にはコミック棚やキッズコーナーがあり、<br />
            岩盤浴エリアには30,000冊を誇るコミック・書籍を設置しています。<br />
            新休憩スポットとして屋外休憩所が新たに誕生しました。
        </p>

        <div class="canalLounge__floor__imageWithText imageWithText flex">
            <div class="imageWithText__imageWrapper flex full">
                <img src="<?php echo get_template_directory_uri() ?>/images/canalLounge/1.jpg" alt="">
                <div>
                    <img class="positionTop" src="<?php echo get_template_directory_uri() ?>/images/canalLounge/2.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>/images/canalLounge/3.jpg" alt="">
                </div>
            </div>
            <div class="imageWithText__textWrapper">
                <p class="imageWithText__title title">
                    コミック書庫<br />
                    キッズコーナーも完備。<br />
                    新休憩スポットとして<br />
                    屋外休憩が新たに<br />
                    オープン
                </p>
                <p class="imageWithText__desc">
                    特大yogibo、リクライニングチェアでゆったりおくつろぎください。
                    キッズコーナーも完備しております。
                </p>
            </div>
        </div>
    </div>

    <div class="canalLounge__floor">
        <h2 class="canalLounge__floor__title">2Fフロア</h2>
        <p class="canalLounge__floor__desc">
            2階はゆったりくつろげる大人の空間。<br />
            広々としたペアシートとくつろぎクッションの贅沢な空間で<br />
            心ゆくまでおくつろぎください。
        </p>

        <div class="canalLounge__floor__imageWithText imageWithText flex flex--end">
            <div class="imageWithText__textWrapper">
                <p class="imageWithText__title title">
                    ゆったりくつろげる<br />
                    大人の空間。<br />
                    ペアシートやYogiboを<br />
                    設置しております。
                </p>
                <p class="imageWithText__desc">広々とした空間には、暖かな光が差し込み、贅沢なソファと柔らかなクッションが配置され、くつろぎながらおしゃべりや思い思いの時間をお楽しみいただけます。</p>
            </div>
            <div class="imageWithText__imageWrapper flex full">
                <div>
                    <img src="<?php echo get_template_directory_uri() ?>/images/canalLounge/4.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>/images/canalLounge/5.jpg" alt="">
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/images/canalLounge/dummy6.png" alt="">
            </div>
        </div>
    </div>

    <div class="canalLounge__floor canalLounge__floor--3f">
        <h2 class="canalLounge__floor__title">3Fフロア</h2>
        <p class="canalLounge__floor__desc">
            3階には個性的なソファーの数々があり、<br />
            特にカバの個性的なシートはSNS映えする写真スポットです。<br />
            贅沢な空間で身も心もリラックスしてお過ごしください。
        </p>

        <div class="canalLounge__floor__imageWithText imageWithText flex">
            <div class="imageWithText__imageWrapper flex full">
                <img src="<?php echo get_template_directory_uri() ?>/images/canalLounge/dummy7.png" alt="" class="imageWithText__image--1">
                <div class="imageWithText__image--2">
                    <img src="<?php echo get_template_directory_uri() ?>/images/canalLounge/8.jpg" alt="" class="imageWithText__image--2--1">
                    <img src="<?php echo get_template_directory_uri() ?>/images/canalLounge/9.jpg" alt="" class="imageWithText__image--2--2">
                </div>
            </div>
            <div class="imageWithText__textWrapper">
                <p class="imageWithText__title title">
                    円形ペアシート、カバのシートなど個性的豊かななソファー群。<br>
                    炎を囲む円形のラウンジが特徴。
                </p>
                <p class="imageWithText__desc">
                    個性的なソファーがありSNS映えする写真スポットでもある。
                    空間を贅沢に使ったなでソファーでリラックスしてお過ごしください。
                </p>
            </div>
        </div>
    </div>
</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>