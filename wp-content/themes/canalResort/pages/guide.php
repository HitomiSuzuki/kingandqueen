<?php
/*
Template Name: 初めての方
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="guide main">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/guide/mv.png" alt="ご利用案内メインビジュアル">
        <p class="largeHeading eng">Beginner Guide<span>初めての方・ご利用案内</span></p>
    </div>
    <h1 class="guide__heading">初めての方へ・ご利用案内</h1>
    <h2 class="guide__catch">初めての方へ</h2>
    <p class="guide__desc">
        初めて「King&Queen」をご利用いただく方へ、<br />
        ご入館からご退館までの流れをご説明させていただきます。また、ご入館時にご不明な点等ございましたら、<br />
        お気軽にお近くのスタッフにご相談ください。
    </p>
    <!-- 営業時間 -->
    <p class="guide__title guide__title--1 title">
        営業時間
        <span>(年中無休)</span>
    </p>
    <dl class="guide__descList">
        <dt>
            <p>月〜木</p>
        </dt>
        <dd>
            <p>朝9時～深夜1時<br>（最終受付:閉店時間の40分前）</p>
        </dd>
        <dt>
            <p>金・祝前日</p>
        </dt>
        <dd>
            <p>朝9時～深夜2時<br>（最終受付:閉店時間の40分前）</p>
        </dd>
        <dt>
            <p>土</p>
        </dt>
        <dd>
            <p>朝6時～深夜2時<br>（最終受付:閉店時間の40分前）<br>朝6時から朝8時までは朝風呂営業<br>岩盤浴は8時からご利用いただけます</p>
        </dd>
        <dt>
            <p>日</p>
        </dt>
        <dd>
            <p>朝6時～深夜1時<br>（最終受付:閉店時間の40分前）<br>朝6時から朝8時までは朝風呂営業<br>岩盤浴は8時からご利用いただけます</p>
        </dd>
    </dl>
    <!-- ご利用案内 -->
    <p class="guide__title guide__title--2 title">ご利用案内</p>
    <p class="guide__tableTitle guide__tableTitle--1 title">King&Queen入泉料</p>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>
                    <p>平日</p>
                </th>
                <th>
                    <p>土日祝</p>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <p>大人（中学生以上）</p>
                </td>
                <td>
                    <p class="bold">950円</p>
                </td>
                <td>
                    <p class="bold">1100円<br>朝風呂1000円</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>小学生</p>
                </td>
                <td colspan="2" class="bold">350円</td>
            </tr>
            <tr>
                <td>
                    <p>幼児（４歳以上小学生未満）</p>
                </td>
                <td colspan="2" class="bold">100円</td>
            </tr>
            <tr>
                <td>３歳以下</td>
                <td colspan="2" class="bold">無料</td>
            </tr>
        </tbody>
    </table>
    <p class="guide__tableNote">
        ※小学生以下のお子様の入館には大人の方の同伴が必要となります。<br />
        ※8歳以上もしくは、120cm以上のお子様の混浴はできません。<br />
    </p>

    <p class="guide__tableTitle guide__tableTitle--2 title">岩盤浴料</p>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>
                    <p>平日</p>
                </th>
                <th>
                    <p>土日祝</p>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <p>大人（中学生以上）</p>
                </td>
                <td>
                    <p class="bold">1000円</p>
                </td>
                <td>
                    <p class="bold">1200円</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>小学生</p>
                </td>
                <td colspan="2" class="bold">350円</td>
            </tr>
        </tbody>
    </table>
    <p class="guide__tableNote">
        ※岩盤浴のみのご利用はできません。入泉料/入館料が必要となります。<br />
        ※小学生のお子様の岩盤浴のご利用は必ず大人の方の同伴が必要です。
    </p>

    <p class="guide__tableTitle guide__tableTitle--2 title">岩盤浴をさらに楽しむ追加のオプション<br>Sky High<br>●テントサウナ ●バレルサウナ ●-20℃クールルーム</p>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>
                    <p>平日</p>
                </th>
                <th>
                    <p>土日祝</p>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <p>大人（中学生以上）</p>
                </td>
                <td>
                    <p class="bold">700円</p>
                </td>
                <td>
                    <p class="bold">800円</p>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- ご利用の注意 -->
    <p class="guide__noteTitle guide__noteTitle--2 title">ご利用の注意</p>
    <ul class="guide__noteList">
        <li>
            <p class="bold">ボディシャンプーとシャンプーは備え付けております</p>
        </li>
        <li>
            <p class="bold">館内への飲食物の持ち込みはご遠慮ください。</p>
        </li>
        <li>
            <p class="bold">
                泥酔者、暴力団関係者、刺青、タトゥー（シール含む）のある方、
                ペット連れの方は入館をご遠慮ください。
            </p>
        </li>
        <li>
            <p class="bold">敷地内での事故、盗難等には一切の責任を負いません。</p>
        </li>
        <li>
            <p class="bold">お客様に迷惑な行為をされた方は退出していただきます。</p>
        </li>
    </ul>

    <div class="guide__image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/goodmanner.webp" alt="">
    </div>

    <div class="guide__image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/app.webp" alt="">
    </div>

    <p class="guide__title guide__title--3 title">館内マップ</p>
    <div class="guide__map">
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

</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>