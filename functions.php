<?php
function my_theme_enqueue_styles()
{
    // CSSファイルのバージョンを取得
    $css_version = filemtime(get_template_directory() . '/assets/css/my_common.css');

    // すべてのページに共通のCSSファイル
    wp_enqueue_style('my_common', get_template_directory_uri() . '/assets/css/my_common.css', array('reset'), $css_version);

    // reset.css を最初に読み込む
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css', array(), $css_version);

    // 現在のページスラッグを取得
    global $post;
    $slug = $post->post_name;

    // それぞれのページ群のスラッグ配列
    $group1_slugs = array('about', 'company', "strength", "business", "business01", "business02", "business03", "business04", "company", "news", "sitemap", "privacy-policy");  // ここにスラッグを追加
    $group2_slugs = array('about', 'careers', "entry", "environment", "recruit", "voices", "voice01", "voice02", "voice03", "voice04", "voice05", "job", "job-style01", "job-style02", "job-style03", "job-style04", "job-style05", "contact", "confirm", "confirm2", "thanks", "thanks2", "kanto", "chubu", "kansai");  // ここにスラッグを追加

    // ページ群1（スラッグ：about, company）
    if (is_front_page() || is_single() || in_array($slug, $group1_slugs)) {
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/styles.css', array('my_common'), $css_version);
        wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array('my_common'), $css_version);
    }

    // ページ群2（スラッグ：voice, entry）
    if (!is_front_page() && in_array($slug, $group2_slugs)) {
        wp_enqueue_style('style-min', get_template_directory_uri() . '/assets/css/style.min.css', array('my_common'), $css_version);
        wp_enqueue_style('style2', get_template_directory_uri() . '/assets/css/style2.css', array('my_common'), $css_version);
        wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array('my_common'), $css_version);
    }
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


// ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
    array(
        'place_global' => ' グローバル',
        'place_footer' => ' フッターナビ',
    )
);

// メイン画像上にテンプレートごとの文字列を表示
function get_main_title()
{
    if (is_singular('post')) :
        $category_obj = get_the_category();
        return $category_obj[0]->name;
    elseif (is_page()) :
        return get_the_title();
    elseif (is_category() || is_tax()) :
        return single_cat_title();
    elseif (is_search()) :
        return ' サイト内検索結果';
    elseif (is_404()) :
        return ' ページが見つかりません';
    elseif (is_singular('daily_contribution')) :
        global $post;
        $term_obj = get_the_terms($post->ID, 'event');
        return $term_obj[0]->name;
    endif;
}

// 子ページを取得する関数
function get_child_pages($number = -1, $specified_id = null)
{
    if (isset($specified_id)) :
        $parent_id = $specified_id;
    else :
        $parent_id = get_the_ID();
    endif;
    $args = array(
        'posts_per_page' => $number,
        'post_type' => 'page',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_parent' => $parent_id,
    );
    $child_pages = new WP_Query($args);
    return $child_pages;
}

// アイキャッチ画像を利用できるようにする
add_theme_support('post-thumbnails');

// 特定の記事を抽出する関数
function get_specific_posts($post_type, $taxonomy = null, $term = null, $number = -1)
{
    $args = array(
        'post_type' => $post_type,
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'slug',
                'terms' => $term,
            ),
        ),
        'posts_per_page' => $number,
    );
    $specific_posts = new WP_Query($args);
    return $specific_posts;
}

function cms_excerpt_more()
{
    return '...';
}
add_filter('excerpt_more', 'cms_excerpt_more');

function cms_excerpt_length()
{
    return 80;
}
add_filter('excerpt_mblength', 'cms_excerpt_length');

// 抜粋機能を固定ページに使えるよう設定
add_post_type_support('page', 'excerpt');

function get_flexible_excerpt($number)
{
    $value = get_the_excerpt();
    $value = wp_trim_words($value, $number, '...');
    return $value;
}

//get_the_excerpt() で取得する文字列に改行タグを挿入
function apply_excerpt_br($value)
{
    return nl2br($value);
}
add_filter('get_the_excerpt', 'apply_excerpt_br');

// ウィジェット機能を有効化
function theme_widgets_init()
{
    register_sidebar(array(
        'name' => ' サイドバーウィジェットエリア',
        'id' => 'primary-widget-area',
        'description' => ' 固定ページのサイドバー',
        'before_widget' => '<aside class="side-inner">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'theme_widgets_init');

add_filter('jpeg_quality', function ($arg) {
    return 100;
});
remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効にする
remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効にする

function create_careers_cpt()
{
    $labels = array(
        'name' => __('募集要項', 'Post Type General Name', 'textdomain'),
        'singular_name' => __('Career', 'Post Type Singular Name', 'textdomain'),
        // 他のラベルもここに配置
    );
    $args = array(
        'label' => __('Career', 'textdomain'),
        'labels' => $labels,
        'supports' => array('title', 'editor'),
        'public' => true,
        'hierarchical' => false,
        'has_archive' => true,
        'rewrite' => array('slug' => 'recruit/careers', 'with_front' => false)
        // 他の引数もここに配置
    );
    register_post_type('careers', $args);
}
add_action('init', 'create_careers_cpt', 0);
