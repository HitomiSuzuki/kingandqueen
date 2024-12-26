<?php
add_filter('show_admin_bar', '__return_false');


//contact form7でメール確認入力欄の、入力情報一致バリデーション
add_filter('wpcf7_validate_email', 'wpcf7_validate_email_filter_confrim', 11, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_validate_email_filter_confrim', 11, 2);
function wpcf7_validate_email_filter_confrim($result, $tag)
{
    $type = $tag['type'];
    $name = $tag['name'];
    if ('email' == $type || 'email*' == $type) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)) { //確認用メルアド入力フォーム名を ○○○_confirm としています。
            $target_name = $matches[1];
            $posted_value = trim((string) $_POST[$name]); //前後空白の削除
            $posted_target_value = trim((string) $_POST[$target_name]); //前後空白の削除
            if ($posted_value != $posted_target_value) {
                $result->invalidate($tag, "確認用のメールアドレスが一致していません");
            }
        }
    }
    return $result;
}

//カスタム投稿タイプを追加
// 　カスタム投稿タイプを追加
add_action('init', 'create_post_type');

function create_post_type()
{

    register_post_type(
        'news', //カスタム投稿タイプ名
        array( //オプション
            'hierarchical',
            'label' => 'お知らせ',
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'show_in_rest' => true,
            'supports' => array(
                // サポートする機能を記述
                'title',
                'editor',
                'excerpt',
                'thumbnail'
            ),
        )
    );

    register_post_type(
        'foodmenu', //カスタム投稿タイプ名
        array( //オプション
            'hierarchical',
            'label' => 'メニュー',
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'show_in_rest' => true,
            'supports' => array(
                // サポートする機能を記述
                'editor',
                'title'
            ),
        )
    );

    register_taxonomy(
        'foodmenu-cat',
        'foodmenu',
        array(
            'label' => 'カテゴリー',
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
        )
    );

    register_taxonomy(
        'news-cat',
        'news',
        array(
            'label' => 'カテゴリー',
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
        )
    );

    flush_rewrite_rules(false);
}

/**
 * アイキャッチを有効にする
 */
add_theme_support('post-thumbnails');

// 投稿とコメントメニュー非表示

function remove_menus()
{
    remove_menu_page('edit-comments.php'); // コメントメニュー
    remove_menu_page('edit.php'); // 投稿
}
add_action('admin_menu', 'remove_menus', 99);

function remove_wp_nodes()
{
    global $wp_admin_bar; // 上部ツールバーのグローバル変数

    $wp_admin_bar->remove_node('comments'); // コメント
}
add_action('admin_bar_menu', 'remove_wp_nodes', 99);

/**
 * ボタンを作るショートコードを作る関数
 * （遷移先リンクの末尾にページタイトルを付与するリンクボタン）
 * （求人情報ページで、遷移先のフォームに求人名を渡すために使用）
 */
// ショートコード[job_btn]を登録
add_shortcode('job_btn', 'my_job_btn');
// [job_btn] を返す関数
function my_job_btn()
{
    // 問い合わせフォーム先のURL
    $url = home_url() . '/apply-recruit/?jobName=' . get_the_title();
    // 問い合わせボタンを返す
    return '<a href="' . esc_url($url) . '" class="recruitSingle__button">この仕事に応募する</a>';
}


/**
 * 上で設定したURL末尾の求人名を、ContactFrom７で自動的に受け取る設定
 */
function my_form_tag_filter($tag)
{
    if (!is_array($tag)) {
        return $tag;
    }

    // jobNameの値を受け取ってContactFormに投げる
    // 複数のパラメーターを受け取る場合は if (){} 部分を複製してパラメーター名を変更すればOK
    if (isset($_GET['jobName'])) {
        $name = $tag['name'];
        if ($name == 'jobName') {
            $tag['values'] = (array) $_GET['jobName'];
        }
    }

    return $tag;
}

/**
 * アイキャッチがない時に記事１枚目の画像を表示する
 */
function catch_that_image()
{
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $match1 = $matches[1];
    if (sizeof($match1) > 0 && isset($matches[1][0])) {
        $first_img = $matches[1][0];
    }

    if (empty($first_img)) {
        // 記事内で画像がなかったときのためのデフォルト画像を指定
        $first_img = "https://canalresort.make-it.website/gb/wp-content/themes/canalResort/images/dummy.png";
    }
    return $first_img;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter', 11);
