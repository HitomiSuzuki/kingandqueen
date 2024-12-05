<?php get_header(); ?>


<main class="recruitSingle main">
    <div class="mv">
        <img src="<?php echo get_template_directory_uri() ?>/images/recruit/mv.webp" alt="求人情報メインビジュアル">
        <p class="largeHeading eng accentColor">募集要項<span>recruit</span></p>
    </div>

    <!-- loop -->
    <div class="recruitSingle__wrapper">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <dl class="recruitSingle__detailedList">
                    <!-- 職種名 -->
                    <dt class="recruitSingle__itemTitle">
                        職種名
                    </dt>
                    <dd class="recruitSingle__itemDetail"><?php the_field('job_title') ?></dd>
                    <!-- 会社名 -->
                    <dt class="recruitSingle__itemTitle">
                        会社名
                    </dt>
                    <dd class="recruitSingle__itemDetail"><?php the_field('company_name') ?></dd>
                    <!-- 住所 -->
                    <dt class="recruitSingle__itemTitle">
                        住所
                    </dt>
                    <dd class="recruitSingle__itemDetail"><?php the_field('addressRegion') ?><?php the_field('addressLocality') ?><?php the_field('streetAddress') ?></dd>
                    <!-- 給与 -->
                    <dt class="recruitSingle__itemTitle">
                        給与
                    </dt>
                    <dd class="recruitSingle__itemDetail">
                        <?php if (get_field('set_value') === 'basic') : ?>
                            <?php the_field('value'); ?>
                        <?php else : ?>
                            <?php the_field('minValue'); ?>円 ~
                            <?php if (get_field('maxValue')) : ?>
                                <?php the_field('maxValue'); ?>円
                            <?php endif; ?>
                        <?php endif; ?>
                        /
                        <?php
                        $unitText = get_field('unitText');
                        switch (true) {
                            case $unitText === 'MONTH':
                                print("月");
                                break;
                            case $unitText === 'WEEK':
                                print("週");
                                break;
                            case $unitText === 'DAY':
                                print("日");
                                break;
                            case $unitText === 'HOUR':
                                print("時");
                                break;
                            case $unitText === 'YEAR':
                                print("年");
                                break;
                            default:
                                break;
                        } ?>
                    </dd>
                    <!-- 雇用形態 -->
                    <dt class="recruitSingle__itemTitle">
                        雇用形態
                    </dt>
                    <dd class="recruitSingle__itemDetail">
                        <?php
                        $unitText = get_field('employmentType');
                        switch (true) {
                            case $unitText === 'FULL_TIME':
                                print("フルタイム");
                                break;
                            case $unitText === 'PART_TIME':
                                print("パートタイム・アルバイト");
                                break;
                            case $unitText === 'CONTRACTOR':
                                print("個人請負");
                                break;
                            case $unitText === 'TEMPORARY':
                                print("派遣");
                                break;
                            case $unitText === 'INTERN':
                                print("インターン");
                                break;
                            case $unitText === 'VOLUNTEER':
                                print("ボランティア");
                                break;
                            case $unitText === 'PER_DIEM':
                                print("日雇い");
                                break;
                            case $unitText === 'OTHER':
                                print("その他");
                                break;
                            default:
                                break;
                        } ?>
                    </dd>

                    <!-- 詳細説明 -->
                    <dt class="recruitSingle__itemTitle">
                        詳細説明
                    </dt>
                    <dd class="recruitSingle__itemDetail"><?php the_field('description') ?></dd>
                </dl>

        <?php endwhile;
        endif; ?>
    </div>

    <?php echo do_shortcode('[job_btn]'); ?>
</main>

<?php get_template_part('/pages/sidenav'); ?>
<?php get_footer(); ?>