<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King&Queen</title>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mystyle.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Zen+Kaku+Gothic+New:wght@500&display=swap" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Google仕事検索 -->
    <?php get_template_part('google-for-jobs'); ?>

    <?php wp_head() ?>
</head>

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">

<body>
    <header class="header" id="header" ontouchscreen="">
        <a href="<?php echo home_url(); ?>" class="header__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="ロゴ"></a>
        <ul class="header__items">
            <li><a href="<?php echo home_url(); ?>/concept" class="header__items__item">コンセプト</a></li>
            <li><a href="<?php echo home_url(); ?>/bath" class="header__items__item">サウナ・お風呂</a></li>
            <li><a href="<?php echo home_url(); ?>/waterbath" class="header__items__item">水風呂</a></li>
            <li><a href="<?php echo home_url(); ?>/stoneSauna" class="header__items__item">岩盤浴</a></li>
            <!-- <li><a href="<?php echo home_url(); ?>/coming-soon" class="header__items__item">屋外温浴バルコニー</a></li> -->
            <li><a href="<?php echo home_url(); ?>/food" class="header__items__item">フードコート</a></li>
            <li><a href="<?php echo home_url(); ?>/relaxation" class="header__items__item">リラクゼーション</a></li>
            <li><a href="<?php echo home_url(); ?>/guide" class="header__items__item">利用案内</a></li>
            <li><a href="<?php echo home_url(); ?>/access" class="header__items__item">アクセス・シャトルバス</a></li>
            <li><a href="<?php echo home_url(); ?>/recruit" class="header__items__item">採用情報</a></li>
            <li><a href="<?php echo home_url(); ?>/company" class="header__items__item">会社概要</a></li>
            <li><a href="<?php echo home_url(); ?>/contact" class="header__items__item contact">お問い合わせ</a></li>

            <!-- <?php echo do_shortcode('[gtranslate]') ?> -->
        </ul>

        <div class="humburger" id="humburger">
            <span class="humburger__item humburger__item--1"></span>
            <span class="humburger__item humburger__item--2"></span>
            <span class="humburger__item humburger__item--3"></span>
        </div>

    </header>