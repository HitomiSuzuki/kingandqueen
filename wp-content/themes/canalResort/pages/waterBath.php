<?php
/*
Template Name: 水風呂
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="waterbath">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/waterBath/mv.webp" alt="水風呂メインビジュアル">
        <p class="largeHeading eng">Water Bath<span>水風呂</span></p>
    </div>

    <div class="waterbath__content">
        <div class="waterbath__largeImg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/waterBath/bath1.webp" alt="水風呂写真">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bath/three-bath.png" alt="水風呂ロゴ" class="waterbath__logo">
        </div>
        <h3 class="waterbath__heading">
            遊水風呂<br><span>泳げる！潜れる！飛び込める！</span><br>FINLAND STYLE WATER BATH
        </h3>
        <p class="waterbath__desc">
            サウナ大国 北欧フィンランドではサウナで発汗した後に、凍った湖にダイブしダイナミックにクールダウンします。
        </p>

        <div class="waterbath__flexWrapper">
            <div class="waterbath__smallImg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/waterBath/bath2.webp" alt="水風呂写真">
            </div>

            <div class="waterbath__text waterbath__text--right">
                <h3 class="waterbath__heading waterbath__heading--left">

                    凍水風呂<br>-20℃ ICE ROOM <br>& Single Water
                </h3>
                <p class="waterbath__desc waterbath__desc--left">-20℃の極寒室内に水温シングルの凍てつくようなプロ用水風呂。<br>
                    灼熱のサウナ室から北極の海でクールダウンするような激しい温度差を体感いただけます。</p>
            </div>
        </div>

        <div class="waterbath__flexWrapper">
            <div class="waterbath__text waterbath__text--left">
                <h3 class="waterbath__heading waterbath__heading--right">
                    涼水風呂<br><span>天然冷泉かけ流し</span><br>COLD SPRINGWATER BATH
                </h3>
                <p class="waterbath__desc waterbath__desc--right">湯温23℃の天然温泉をそのまま贅沢にかけ流し。お体への負担も少なく心地よくほてりをクールダウンします。</p>
            </div>

            <div class="waterbath__smallImg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/waterBath/bath3.webp" alt="水風呂写真">
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>