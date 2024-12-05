<?php
/*
Template Name: 南郊運河
Template Post Type: page
*/

?>
<?php get_header(); ?>

<main class="southCanal main">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/southCanalMv.png" alt="南郊運河メインビジュアル">
        <p class="largeHeading eng">South Canal Area<span>南エリア</span></p>
    </div>

    <!-- キャッチ -->
    <div class="southCanal__catch">
        <h1 class="southCanal__catch__heading">南エリア</h1>
        <h2 class="southCanal__catch__subHeading">「食」と「発汗アクティビティ」の野外エンタメサウナ‼</h2>
    </div>

    <div class="southCanal__catchImg">
        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/catch.jpg" alt="">
    </div>

    <!-- フロアマップ -->
    <div class="southCanal__map">
        <h2 class="southCanal__map__title">フロアマップ</h2>
        <p class="southCanal__map__desc">
            2階はゆったりくつろげる大人の空間。<br />
            広々としたペアシートとくつろぎクッションの贅沢な空間で<br />
            心ゆくまでおくつろぎください。
        </p>
        <div class="map">
            <!-- <div class="top__map__image map__inner">
                <img id="map-default" class="map__each--default map__each" src="<?php echo get_template_directory_uri() ?>/images/map/default.png" alt="エリアマップ">
                <img id="map-stoneSauna" class="map__each--stoneSauna map__each map__each--colored" src="<?php echo get_template_directory_uri() ?>/images/map/stoneSauna.png" alt="エリアマップ">
                <img id="map-bathWomen" class="map__each--bathWomen map__each map__each--colored" src="<?php echo get_template_directory_uri() ?>/images/map/bath-women.png" alt="エリアマップ">
                <img id="map-bathMen" class="map__each--bathMen map__each map__each--colored" map__each--colored src="<?php echo get_template_directory_uri() ?>/images/map/bath-men.png" alt="エリアマップ">
                <img id="map-esthe" class="map__each--esthe map__each map__each--colored" src="<?php echo get_template_directory_uri() ?>/images/map/esthe.png" alt="エリアマップ">
                <img id="map-restaurant" class="map__each--restaurant map__each map__each--colored" src="<?php echo get_template_directory_uri() ?>/images/map/restaurant.png" alt="エリアマップ">
                <img id="map-lounge" class="map__each--lounge map__each map__each--colored" src="<?php echo get_template_directory_uri() ?>/images/map/lounge.png" alt="エリアマップ">
                <img id="map-sauna" class="map__each--sauna map__each map__each--colored" src="<?php echo get_template_directory_uri() ?>/images/map/sauna.png" alt="エリアマップ">
            </div>
            <div class="map__navs">
                <p id="nav-stoneSauna" class="map__nav map__nav--stoneSauna map__nav--link"><a href="<?php echo get_home_url() ?>/stoneSauna">岩盤浴ゾーン</a></p>
                <p id="nav-bathWoman" class="map__nav map__nav--bathWomen map__nav--link"><a href="<?php echo get_home_url() ?>/spa">女湯ゾーン</a></p>
                <p id="nav-bathMan" class="map__nav map__nav--bathMen map__nav--link"><a href="<?php echo get_home_url() ?>/spa">男湯ゾーン</a></p>
                <p id="nav-esthe" class="map__nav map__nav--esthe map__nav--link"><a href="<?php echo get_home_url() ?>/relaxation">リラクゼーションゾーン</a></p>
                <p id="nav-restaurant" class="map__nav map__nav--restaurant map__nav--link"><a href="<?php echo get_home_url() ?>/food">お食事ゾーン</a></p>
                <p id="nav-lounge" class="map__nav map__nav--lounge map__nav--link"><a href="<?php echo get_home_url() ?>/canalLounge">ラウンジゾーン</a></p>
                <p id="nav-sauna" class="map__nav map__nav--sauna map__nav--link"><a href="<?php echo get_home_url() ?>/southCanal">サウナゾーン</a></p>
                <p class="map__nav map__nav--noLink"><img src="<?php echo get_template_directory_uri() ?>/images/map/bathroom-men.png" alt="">男性用トイレ</p>
                <p class="map__nav map__nav--noLink"><img src="<?php echo get_template_directory_uri() ?>/images/map/bathroom-women.png" alt="">女性用トイレ</p>
                <p class="map__nav map__nav--noLink"><img src="<?php echo get_template_directory_uri() ?>/images/map/elevetor.png" alt="">エレベーター</p>
            </div> -->
            <?php get_template_part('/pages/globalMap'); ?>
        </div>
    </div>

    <!-- サウナ -->
    <div class="southCanal__sauna">
        <!-- サウナ　クールギャング -->
        <div class="southCanal__sauna__contents" id="coolGang">
            <!-- サウナテキスト -->
            <h2 class="southCanal__sauna__contents__title">
                <div><img src="<?php echo get_template_directory_uri() ?>/images/southCanal/COOLGANG.png" alt=""></div>
                COOL GANG
            </h2>

            <!-- テキストと画像のやつ -->
            <div class="southCanal__sauna__contents__imageWithText imageWithText flex flex--end black">
                <div class="imageWithText__textWrapper">
                    <p class="imageWithText__desc">
                        -20℃の極寒クールダウンエリア!<br />
                        暴力的な獄寒クールギャングと
                        灼熱のライブサウナで生命のエナジーを解き放て！<br />
                    </p>
                </div>
                <div class="imageWithText__imageWrapper flex full">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/coolGang1.png" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/coolGang2.png" alt="">
                    </div>
                    <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/coolGang3.png" alt="">
                    <div class="absolute"><img src="<?php echo get_template_directory_uri() ?>/images/southCanal/cool.png" alt=""></div>
                    <div class="absolute--2">
                        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/kuma.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- サウナ　ファンキーサウナ -->
        <div class="southCanal__sauna__contents" id="funkySauna">
            <!-- サウナテキスト -->
            <h2 class="southCanal__sauna__contents__title">
                <div><img src="<?php echo get_template_directory_uri() ?>/images/southCanal/FUNKYSAUNA.png" alt=""></div>
                FUNKY SAUNA
            </h2>

            <!-- テキストと画像のやつ -->
            <div class="southCanal__sauna__contents__imageWithText imageWithText flex flex--end black">
                <div class="imageWithText__textWrapper">
                    <p class="imageWithText__desc">
                        愛知県初登場！<br />
                        ライブサウナ！！<br />
                        暴力的な獄寒クールギャングと灼熱のライブサウナで生命のエナジーを解き放て！
                    </p>
                </div>
                <div class="imageWithText__imageWrapper flex full">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/liveSauna1.webp" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/liveSauna2.jpg" alt="">
                    </div>
                    <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/liveSauna3.png" alt="">
                </div>
            </div>
        </div>

        <!-- サウナ　テントサウナ -->
        <div class="southCanal__sauna__contents" id="tentSauna">
            <!-- サウナテキスト -->
            <h2 class="southCanal__sauna__contents__title">
                <div><img src="<?php echo get_template_directory_uri() ?>/images/southCanal/TENTSAUNA.png" alt=""></div>
                TENT SAUNA
            </h2>

            <!-- テキストと画像のやつ -->
            <div class="southCanal__sauna__contents__imageWithText imageWithText flex flex--end black">
                <div class="imageWithText__textWrapper">
                    <p class="imageWithText__desc">
                        カップルや友達と100%開放された屋外テラスで自然を満喫しながら
                        テントサウナでセルフロウリュウがお楽しみいただけます。<br />
                        アロマの蒸気サウナで汗を流し肌コンディションも『ととのい』美肌効果も期待できます。<br />
                        大人気のテントサウナのアロマがオリジナルの漢方アロマとなり、
                        テントサウナでの発汗効果と漢方の燃焼効果をお楽しみいただければと思います。
                    </p>
                </div>
                <div class="imageWithText__imageWrapper flex full">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/tentSauna1.png" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/tentSauna2-edited.png" alt="">
                    </div>
                    <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/tentSauna3-edited.png" alt="">
                </div>
            </div>
        </div>

        <!-- サウナ　バレルサウナ -->
        <div class="southCanal__sauna__contents" id="barrelSauna">
            <!-- サウナテキスト -->
            <h2 class="southCanal__sauna__contents__title">
                <div><img src="<?php echo get_template_directory_uri() ?>/images/southCanal/BARRELSAUNA.png" alt=""></div>
                BARREL SAUNA
            </h2>

            <!-- テキストと画像のやつ -->
            <div class="southCanal__sauna__contents__imageWithText imageWithText flex flex--end black">
                <div class="imageWithText__textWrapper">
                    <p class="imageWithText__desc">
                        岡山県産材ひのき「バレルサウナ」！！<br />
                        心地よいヒノキの香りに包まれてプライベートな空間で、心身ともにリセットされます。<br />
                        バレルサウナは、伝統的なサウナの形状を持つユニークなタイプのサウナです。<br />
                        その名前が示すように、バレルサウナは通常、大きな木製の樽の形状をしています。
                    </p>
                </div>
                <div class="imageWithText__imageWrapper flex full">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/barrelSauna1.jpg" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/barrelSauna2.png" alt="">
                    </div>
                    <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/barrelSauna3.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- サウナ　AIRスカイラウンジ -->
        <div class="southCanal__sauna__contents" id="airSkyLounge">
            <!-- サウナテキスト -->
            <h2 class="southCanal__sauna__contents__title">
                <div><img src="<?php echo get_template_directory_uri() ?>/images/southCanal/AIRSKYLOUNGE.png" alt=""></div>
                AIRスカイラウンジ
            </h2>

            <!-- テキストと画像のやつ -->
            <div class="southCanal__sauna__contents__imageWithText imageWithText flex flex--end black">
                <div class="imageWithText__textWrapper">
                    <p class="imageWithText__desc">
                        都会の喧騒を離れ、満点の空を眺めながらくつろぎのひとときを過ごす特別な空間です。空と大地を繋ぐ場所で、心地よい時間をお楽しみください。
                    </p>
                </div>
                <div class="imageWithText__imageWrapper flex full">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/airSkyLounge1.jpg" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/airSkyLounge2.jpg" alt="">
                    </div>
                    <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/airSkyLounge3.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- サウナ　グランドキャビン -->
        <div class="southCanal__sauna__contents" id="grandCabin">
            <!-- サウナテキスト -->
            <h2 class="southCanal__sauna__contents__title">
                <div><img src="<?php echo get_template_directory_uri() ?>/images/southCanal/GRANDCABIN.png" alt=""></div>
                GRAND CABIN
            </h2>

            <!-- テキストと画像のやつ -->
            <div class="southCanal__sauna__contents__imageWithText imageWithText flex flex--end black">
                <div class="imageWithText__textWrapper">
                    <p class="imageWithText__desc">
                        コミックの世界が広がる楽園です。多彩なジャンルやシリーズのコミックが揃い、漫画ファンの心を満たす特別な場所です。物語の世界に没頭しながら、心地よい時間をお過ごしください。
                    </p>
                </div>
                <div class="imageWithText__imageWrapper flex full">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/grandCabin1.jpg" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/grandCabin2.jpg" alt="">
                    </div>
                    <img src="<?php echo get_template_directory_uri() ?>/images/southCanal/grandCabin3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_template_part('/pages/sidenav'); ?>

<?php get_footer(); ?>