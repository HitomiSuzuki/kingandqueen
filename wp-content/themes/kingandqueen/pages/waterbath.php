<?php
/*
Template Name: 水風呂
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="waterbath">
    <div class="page-header">
        <div class="title-box">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>

    <div class="waterbath__mainlogo"><img src="<?php echo get_template_directory_uri(); ?>/images/waterbath/waterbath-logo.png" alt=""></div>

    <div class="waterbath__item">
        <div class="waterbath__title">
            <p>泳げる！潜れる！飛び込める！</p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/waterbath/waterbath-yu-logo.png" alt="">
        </div>

        <div class="waterbath__img"><img src="<?php echo get_template_directory_uri(); ?>/images/waterbath/waterbath-yu-img.png" alt=""></div>

        <div class="waterbath__icon"><img src="<?php echo get_template_directory_uri(); ?>/images/waterbath/waterbath-icon.png" alt=""></div>
        <p class="waterbath__desc">サウナ大国 北欧フィンランドではサウナで発汗した後に、凍った湖にダイブしダイナミックにクールダウンします。</p>
    </div>

    <div class="waterbath__separator"><img src="<?php echo get_template_directory_uri(); ?>/images/waterbath/wave.png" alt=""></div>

    <div class="waterbath__item">
        <div class="waterbath__title">
            <img src="<?php echo get_template_directory_uri(); ?>/images/waterbath/waterbath-yu-logo.png" alt="">
        </div>

        <div class="waterbath__img"><img src="<?php echo get_Template_directory_uri(); ?>/images/waterbath/waterbath-yu-img.png" alt=""></div>
        <p class="waterbath__desc">-20℃の極寒室内に水温シングルの凍てつくようなプロ用水風呂。<br>灼熱のサウナ室から北極の海でクールダウンするような激しい温度差を体感いただけます。</p>
    </div>

    <div class="waterbath__separator"><img src="<?php echo get_template_directory_uri(); ?>/images/waterbath/wave.png" alt=""></div>

    <div class="waterbath__item">
        <div class="waterbath__title">
            <p>天然冷泉かけ流し</p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/waterbath/waterbath-yu-logo.png" alt="">
        </div>

        <div class="waterbath__img"><img src="<?php echo get_Template_directory_uri(); ?>/images/waterbath/waterbath-yu-img.png" alt=""></div>
        <p class="waterbath__desc">湯温23℃の天然温泉をそのまま贅沢にかけ流し。お体への負担も少なく心地よくほてりをクールダウンします。</p>
    </div>

</main>
<?php get_template_part('/sidenav'); ?>
<?php get_footer(); ?>