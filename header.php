<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <title><?php
            global $page, $paged;
            if (is_front_page()) : //トップページ
                echo '';
                bloginfo('name');
            elseif (is_home()) : //ブログページ（ブログサイトの場合はトップページ）
                wp_title('｜', true, 'right');
                bloginfo('name');
            elseif (is_page()) : //固定ページ
                wp_title('｜', true, 'right');
                bloginfo('name');
            elseif (is_single()) : //投稿ページ
                wp_title('｜', true, 'right');
                bloginfo('name');
            elseif (is_category()) : //カテゴリーページ
                single_term_title();
                echo '｜省略タイトル';
            elseif (is_tag()) : //タグページ
                single_term_title();
                echo '｜省略タイトル';
            elseif (is_archive()) : //アーカイブページ
                wp_title('');
                echo '｜省略タイトル';
            elseif (is_search()) : //検索結果ページ
                wp_title('');
                echo '｜省略タイトル';
            elseif (is_404()) : //404ページ
                echo '404｜';
                bloginfo('name');
            endif;
            if ($paged >= 2 || $page >= 2) : //２ページ目以降の場合
                echo '｜' . sprintf(
                    '%sページ',
                    max($paged, $page)
                );
            endif;
            ?></title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header">
        <div class="header-inner">
            <div class="logo-content">
                <div class="logo">
                    <a class="logo-header" href='<?php echo esc_url(home_url()); ?>'>
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg?1" media="(min-width: 920px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo_sp.svg" alt="" loading="lazy" />
                        </picture>
                    </a>
                </div>
                <button class="toggle-menu js-toggoleNav tab">
                    <span class="toggle-line"></span>
                </button>
            </div>
            <div class="header-nav">
                <nav class="global-nav pc_only">
                    <ul class="header_accordion-area">
                        <li>
                            <a href="<?php echo esc_url(home_url('strength')); ?>">ルート21の強み</a>
                        </li>
                        <li>
                            <p class="header_title"><a href="<?php echo esc_url(home_url('business')); ?>">事業紹介</a></p>
                            <div class="header_box">
                                <div class="header_box_inner">
                                    <a href="<?php echo esc_url(home_url('business01')); ?>">福祉用具配送部</a>
                                    <a href="<?php echo esc_url(home_url('business02')); ?>">洗浄消毒部</a>
                                    <a href="<?php echo esc_url(home_url('business03')); ?>">ライフサービス事業部</a>
                                    <a href="<?php echo esc_url(home_url('business04')); ?>">一般貨物事業</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p class="header_title"><a href="<?php echo esc_url(home_url('company')); ?>">企業情報</a></p>
                            <div class="header_box">
                                <div class="header_box_inner">
                                    <a href="<?php echo esc_url(home_url('company/#company02')); ?>">企業理念</a>
                                    <a href="<?php echo esc_url(home_url('company/#company03')); ?>">代表挨拶</a>
                                    <a href="<?php echo esc_url(home_url('company/#company05')); ?>">会社概要</a>
                                    <a href="<?php echo esc_url(home_url('company/#company06')); ?>">会社沿革</a>
                                    <a href="<?php echo esc_url(home_url('company/#company07')); ?>">アクセス</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p class="header_title"><a href="<?php echo esc_url(home_url('recruit')); ?>">採用情報</a></p>
                            <div class="header_box">
                                <div class="header_box_inner">
                                    <a href="<?php echo esc_url(home_url('job')); ?>">仕事を知る</a>
                                    <a href="<?php echo esc_url(home_url('about')); ?>">会社を知る</a>
                                    <a href="<?php echo esc_url(home_url('voices')); ?>">人を知る</a>
                                    <a href="<?php echo esc_url(home_url('environment')); ?>">働く仲間を知る</a>
                                    <a href="<?php echo esc_url(home_url('careers')); ?>">募集要項</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('contact')); ?>">お問合わせ</a>
                        </li>
                    </ul>
                </nav>
                <div class="tab_only">
                    <ul class="accordion-area">
                        <li>
                            <div class="title">
                                <a href="<?php echo esc_url(home_url('strength')); ?>">ルート21の強み</a>
                                <div class="arrow"></div>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <a href="<?php echo esc_url(home_url('business')); ?>">事業紹介</a>
                                <div class="click"></div>
                            </div>
                            <div class="box">
                                <a href="<?php echo esc_url(home_url('business01')); ?>">福祉用具配送部</a>
                                <a href="<?php echo esc_url(home_url('business02')); ?>">洗浄消毒部</a>
                                <a href="<?php echo esc_url(home_url('business03')); ?>">ライフサービス事業部</a>
                                <a href="<?php echo esc_url(home_url('business04')); ?>">一般貨物事業</a>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <a href="<?php echo esc_url(home_url('company')); ?>">企業情報</a>
                                <div class="click"></div>
                            </div>
                            <div class="box">
                                <a class="header_menu_btn" href="<?php echo esc_url(home_url('company/#company02')); ?>">企業理念</a>
                                <a class="header_menu_btn" href="<?php echo esc_url(home_url('company/#company03')); ?>">代表挨拶</a>
                                <a class="header_menu_btn" href="<?php echo esc_url(home_url('company/#company05')); ?>">会社概要</a>
                                <a class="header_menu_btn" href="<?php echo esc_url(home_url('company/#company06')); ?>">会社沿革</a>
                                <a class="header_menu_btn" href="<?php echo esc_url(home_url('company/#company07')); ?>">アクセス</a>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <a href="<?php echo esc_url(home_url('recruit')); ?>">採用情報</a>
                                <div class="click"></div>
                            </div>
                            <div class="box">
                                <a href="<?php echo esc_url(home_url('job')); ?>">仕事を知る</a>
                                <a href="<?php echo esc_url(home_url('about')); ?>">会社を知る</a>
                                <a href="<?php echo esc_url(home_url('voices')); ?>">人を知る</a>
                                <a href="<?php echo esc_url(home_url('environment')); ?>">働く仲間を知る</a>
                                <a href="<?php echo esc_url(home_url('careers')); ?>">募集要項</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header_sns">
                        <a target="_blank" href="https://twitter.com/ROUTE_21_SHOP">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/twitter.svg" alt="twitter" loading="lazy">
                        </a>
                        <a target="_blank" href="https://www.facebook.com/ROUTE21SPEEDandSAFETY/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/facebook.svg" alt="Facebook" loading="lazy">
                        </a>
                    </div>
                    <div class="header_btn">
                        <a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a>
                        <a href="<?php echo esc_url(home_url('recruit')); ?>">採用情報</a>
                    </div>
                </div>
            </div>
        </div>
    </header>