<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King&Queen</title>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Noto+Serif+JP&family=Oswald&family=Roboto+Condensed:ital,wght@0,900;1,900&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php wp_head() ?>
</head>

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">

<body>
    <header class="header" id="header" ontouchscreen="">
        <div class="header__top">
            <a href="<?php echo home_url(); ?>" class="header__logo"><img src="<?php echo get_template_directory_uri() ?>/images/nav/headerLogo.png" alt=""></a>
            <div class="header__menues">
                <a href="<?php echo home_url(); ?>/access" class="header__menuItem header__access">アクセス</a>
                <a href="" class="header__menuItem header__button language">LANGUAGE</a>
                <a href="<?php echo home_url(); ?>/contact" class="header__menuItem header__button contact">お問い合わせ</a>
                <a href="<?php echo home_url(); ?>/company" class="header__menuItem header__about">会社概要</a>
            </div>
        </div>
        <ul class="header__nav">
            <li>
                <a href="<?php echo home_url(); ?>/concept" class="header__navMenu header__navMenu--concept">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nav/concept.svg" alt="">
                    コンセプト
                </a>
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/sauna_bath" class="header__navMenu header__navMenu--bath">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nav/bath.svg" alt="">
                    サウナ・お風呂
                </a>
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/waterbath" class="header__navMenu header__navMenu--waterbath">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nav/waterbath.svg" alt="">
                    水風呂
                </a>
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/food" class="header__navMenu header__navMenu--food">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nav/food.svg" alt="">
                    フードコート
                </a>
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/bedrock" class="header__navMenu header__navMenu--stonesauna">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nav/stonesauna.svg" alt="">
                    岩盤浴
                </a>
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/relaxation" class="header__navMenu header__navMenu--relaxation">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nav/relaxation.svg" alt="">
                    リラクゼーション
                </a>
            </li>
            <li>
                <a href="<?php echo home_url(); ?>/guide" class="header__navMenu header__navMenu--guide">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nav/guide.svg" alt="">
                    利用案内
                </a>
            </li>
        </ul>

        <div class="humburger" id="humburger">
            <span class="humburger__item humburger__item--1"></span>
            <span class="humburger__item humburger__item--2"></span>
            <span class="humburger__item humburger__item--3"></span>
        </div>
    </header>