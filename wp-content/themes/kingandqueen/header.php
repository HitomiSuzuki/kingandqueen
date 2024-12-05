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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Noto+Serif+JP&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <?php wp_head() ?>
</head>

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">

<body>
    <header class="header" id="header" ontouchscreen="">
        <div class="header__top">
            <a href="" class="header__logo"><img src="<?php echo get_template_directory_uri() ?>/images/header/headerLogo.png" alt=""></a>
            <div class="header__menues">
                <a href="<?php echo home_url(); ?>/access" class="header__menuItem header__access">アクセス</a>
                <a href="" class="header__menuItem header__button language">LANGUAGE</a>
                <a href="<?php echo home_url(); ?>/contact" class="header__menuItem header__button contact">お問い合わせ</a>
                <a href="<?php echo home_url(); ?>/about" class="header__menuItem header__about">会社概要</a>
            </div>
        </div>
        <ul class="header__nav">
            <li><a href="<?php echo home_url(); ?>/concept" class="header__navMenu header__navMenu--concept">コンセプト</a></li>
            <li><a href="<?php echo home_url(); ?>/bath" class="header__navMenu header__navMenu--bath">サウナ・お風呂</a></li>
            <li><a href="<?php echo home_url(); ?>/waterbath" class="header__navMenu header__navMenu--waterbath">水風呂</a></li>
            <li><a href="<?php echo home_url(); ?>/food" class="header__navMenu header__food">フードコート</a></li>
            <li><a href="<?php echo home_url(); ?>/stoneSauna" class="header__navMenu header__navMenu--stonesauna">岩盤浴</a></li>
            <li><a href="<?php echo home_url(); ?>/relaxation" class="header__navMenu header__navMenu--relaxation">リラクゼーション</a></li>
            <li><a href="<?php echo home_url(); ?>/guide" class="header__navMenu header__navMenu--guide">利用案内</a></li>
        </ul>

        <div class="humburger" id="humburger">
            <span class="humburger__item humburger__item--1"></span>
            <span class="humburger__item humburger__item--2"></span>
            <span class="humburger__item humburger__item--3"></span>
        </div>
    </header>