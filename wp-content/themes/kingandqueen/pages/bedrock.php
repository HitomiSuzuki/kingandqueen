<?php
/*
Template Name: 岩盤浴
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="bedrock">
    <div class="page-header">
        <div class="title-box">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <h1 class="page__title">岩盤浴とは</h1>

    <p class="bedrock__desc">
        温めた天然鉱石が発する様々な波長の遠赤外線効果で、身体の内側から全身を温め、血流や新陳代謝を活性化する温熱浴。<br>
        サウナに比べて比較的低温なので、ゆったり時間をかけて、じんわりと発汗することができます。<br>
        身体の中に溜まった毒素と老廃物の排泄を促し、美容やダイエット、冷えやむくみの解消など、<br>
        さまざまな健康・美容効果が期待できると言われています。
    </p>

    <div class="bedrock__mainImg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/bedrockmain-1.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/bedrockmain-2.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/bedrockmain-3.png" alt="">
    </div>

    <div class="bedrock__grid">
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/health-logo.png" alt=""></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/irori-logo.png" alt=""></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/snow-logo.png" alt=""></div>
        <div>
            <p>ブラックゲルマやトルマリンなど様々な天然鉱石を使用した岩盤浴室をご用意。50床以上もあり、効能も様々で体の内側から全身を遠赤外線で温めてくれます。 岩盤浴でかく汗は、こまかくサラサラ。高い発汗作用で老廃物を排出して新陳代謝がアップします。</p>
        </div>
        <div>
            <p>薪ストーブと囲炉裏を配した「炎と熱」の岩盤浴室。サウナストーンに使用するのは特別天然記念物に指定され、奇跡の薬石と称される「北投石」。 アロマウォーターを柄杓ですくってセルフロウリュをお楽しみ頂けます。</p>
        </div>
        <div>
            <p>チラチラと雪が舞い散るクールダウンルームです。</p>
        </div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/health-img.png" alt=""></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/irori-img.png" alt=""></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/snow-img.png" alt=""></div>
    </div>

    <div class="bedrock__balcony">
        <div class="bedrock__balcony__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/balcony-logo.png" alt=""></div>
        <p class="bedrock__balcony__title">有料温浴ゾーン　バルコニー</p>
        <p class="bedrock__balcony__desc">所沢の街並みを一望できるバルコニーはカフェや岩盤浴専用の休憩スペース</p>
    </div>

    <div class="bedrock__balcony__mainImg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/balconymain.png" alt="">
    </div>

    <div class="bedrock__grid">
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/coolgang-logo.png" alt=""></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/barrelsauna-logo.png" alt=""></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/tentsauna-logo.png" alt=""></div>
        <div>
            <p class="bedrock__grid__title">THE COOL GANG<span>（クールギャング）</span></p>
            <p>その名の通り、マイナス20℃の極寒ルーム。テントサウナやバレルサウナで大量に汗をかいた後にクールダウン!</p>
        </div>
        <div>
            <p class="bedrock__grid__title">BARREL SAUNA<span>（バレルサウナ）</span></p>
            <p>国産木材のみで制作した丸い樽型のサウナ。均等に熱気が充満する空間の中でセルフロウリュを楽しめます。</p>
        </div>
        <div>
            <p class="bedrock__grid__title">TENT SAUNA<span>（テントサウナ）</span></p>
            <p>かわいいキューブ型のテントサウナ。サウナ好きだけでなく、アウトドア好きな方もロウリュサウナが楽しめます。</p>
        </div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/coolgang-img.png" alt=""></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/barrelsauna-img.png" alt=""></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/bedrock/tentsauna-img.png" alt=""></div>
    </div>

    <div class="bedrock__price">
        <p class="bedrock__price__title">岩盤浴エリア内　有料エリア料金</p>
        <div class="bedrock__price__grid">
            <div></div>
            <div>
                <p>平日</p>
            </div>
            <div>
                <p>土祝日</p>
            </div>
            <div>
                <p>大人（中学生以上）</p>
            </div>
            <div>
                <p>700円</p>
            </div>
            <div>
                <p>800円</p>
            </div>
        </div>
    </div>

    <div class="bedrock__note">
        <p class="bedrock__note__title">水分補給をこまめに</p>
        <p class="bedrock__note__desc">
            適度な水分補給を心がけてください。<br>
            岩盤浴のご利用中や入浴後は、体内の水分が失われやすくなります。<br>
            脱水症状を防ぐためにも、定期的にお水やスポーツドリンクなどで水分補給を行い、快適にお過ごしください。
        </p>
    </div>

    <div class="bedrock__caution">
        <p class="bedrock__caution__title">ご利用上の注意</p>
        <ul>
            <li>・タオルなどでの場所取りはご遠慮ください</li>
            <li>・岩盤浴内はお静かにお願いします。</li>
            <li>・泥酔もしくは妊娠されている方のご入浴はご遠慮ください。</li>
            <li>・入浴中に気分がすぐれないお客様は、速やかに退出し、スタッフにお声がけください。</li>
        </ul>
    </div>
</main>
<?php get_template_part('/sidenav'); ?>
<?php get_footer(); ?>