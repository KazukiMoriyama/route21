<?php get_header(); ?>
<div class="header_top_bg">
    <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/fv_bg.webp" media="(min-width: 769px)">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sp/fv_bg_sp.webp" alt="" loading="lazy" />
    </picture>
</div>
<main class="top_page">
    <div class="fv">
        <div class="fv_inner">
            <h1 class="mincho">
                支えるのは、安全。<br>
                お届けするのは、安心です。
            </h1>
        </div>
        <!-- <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/fv.webp" media="(min-width: 769px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sp/fv_sp.webp" alt="" loading="lazy" />
        </picture> -->
        <video src="<?php echo get_template_directory_uri(); ?>/assets/images/top/movie.mp4" type="video/mp4" autoplay loop muted playsinline></video>
    </div>
    <section class="sec1 wow fadeInUp" data-wow-duration="2s">
        <div class="content">
            <figure>
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec1_img01.webp" media="(min-width: 769px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sp/sec1_img01_sp.webp" alt="" loading="lazy" />
                </picture>
                <figcaption>
                    <div class="sec_title">
                        <h2>
                            <span>About</span><br>
                            ROUTE21
                        </h2>
                        <h3>
                            福祉の現場の安全、安心を<br>
                            笑顔のサービスで支えたい。
                        </h3>
                        <p>
                            福祉用具配送から、洗浄・消毒の代行までを手掛ける、<br>
                            ルート21の特長と強みについてご紹介します。
                        </p>
                    </div>
                    <a class="btn" href="<?php echo esc_url(home_url('strength')); ?>">詳しく見る　＞</a>
                </figcaption>
            </figure>
        </div>
    </section>
    <section class="sec2 wow fadeInUp" data-wow-duration="2s">
        <div class="content">
            <div class="sec_title">
                <h2>Our Business</h2>
                <h3>事業紹介</h3>
                <p>福祉用具の配送、洗浄・消毒からライフサービス事業、一般貨物の運送事業まで、ルート21の事業内容をご紹介します。</p>
            </div>
            <ul>
                <li>
                    <a href="<?php echo esc_url(home_url('business01')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec2_img01.webp" alt="" loading="lazy">
                        <p>福祉用具配送部</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('business02')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec2_img02.webp" alt="" loading="lazy">
                        <p>洗浄消毒部</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('business03')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec2_img03.webp" alt="" loading="lazy">
                        <p>ライフサービス事業部</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('business04')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec2_img04.webp" alt="" loading="lazy">
                        <p>一般貨物事業</p>
                    </a>
                </li>
            </ul>
            <a class="btn" href="<?php echo esc_url(home_url('business')); ?>">一覧へ行く　＞</a>
        </div>
    </section>
    <section class="sec3 wow fadeInUp" data-wow-duration="2s">
        <div class="content">
            <div class="sec_title">
                <h2>News & Topics</h2>
                <h3>ニュースとお知らせ</h3>
            </div>
            <ul>
                <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                    'posts_per_page' => 5,
                    'paged' => $paged,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_status' => 'publish'
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
                                <p><?php the_title(); ?></p>
                            </a>
                        </li>
                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
            </ul>
            <a class="btn" href="<?php echo esc_url(home_url('news')); ?>">一覧で見る　＞</a>
        </div>
    </section>
    <section class="sec4 wow fadeInUp" data-wow-duration="2s">
        <div class="content">
            <div class="sec_title">
                <h2>Recruit</h2>
                <h3>採用情報</h3>
                <p>未経験者も歓迎！ルート21の採用情報をご紹介します。</p>
            </div>
            <ul>
                <li>
                    <a href="<?php echo esc_url(home_url('about')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4_img01.webp" alt="" loading="lazy">
                        <p>会社を知る</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('job')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4_img02.webp" alt="" loading="lazy">
                        <p>仕事を知る</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('environment')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4_img03.webp" alt="" loading="lazy">
                        <p>拠点紹介</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('voices')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sec4_img04.webp" alt="" loading="lazy">
                        <p>先輩たちの声を聞く</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</main>
<?php get_footer(); ?>