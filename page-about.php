<?php get_header(); ?>
<main class="l-main">
    <div class="p-about-top l-content__inner">
        <div class="p-about-heading c-heading">
            <h2 class="c-heading__primary">数字で見るROUTE21</h2>
        </div>
        <div class="p-about__figure">
            <div class="p-about__figure-top">
                <div class="p-about__figure-top-item">
                    <p class="p-about__figure-text p-about__figure-text--mb">平均年<br><span class="p-about__figure-bigtext">32</span>歳</p>
                    <p class="p-about__figure-text">平均残業時間<br><span class="p-about__figure-bigtext">20</span>時間</p>
                </div>
                <div class="p-about__figure-top-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/about-figure.png" alt="スタッフの年代・勤続年数を表した図">
                </div>
                <div class="p-about__figure-top-item">
                    <p class="p-about__figure-text p-about__figure-text--mb">年間休日<br><span class="p-about__figure-bigtext">120</span>日</p>
                    <p class="p-about__figure-text">有給消化率<br><span class="p-about__figure-bigtext">85</span>%</p>
                </div>
            </div>
            <div class="p-about__figure-bottom">
                <p class="p-about__figure-text">設立<br><span class="p-about__figure-bigtext">23</span>年</p>
                <p class="p-about__figure-text">取引業数<br><span class="p-about__figure-bigtext">400</span>社</p>
            </div>
        </div>
    </div>

    <div class="p-about-system p-about__bg c-message__bg">
        <div class="p-about-heading c-heading l-content__inner">
            <h2 class="c-heading__primary">社内で好評の制度</h2>
        </div>
        <div class="l-content__inner">
            <div class="p-about-system__lead">
                <p class="p-about-system__text">ルート21ではスタッフの安定的で豊かな生活と、充実したワークライフバランスを実現するために、長く、生き生きと働くことができる環境整備に努めています。<br>ここでは社内で特に好評の制度の一部をご紹介します。</p>
            </div>
            <div class="p-about-system__content">
                <div class="p-about-system__item">
                    <div class="p-about-system__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/about-system-img01.png" alt=""></div>
                    <p class="p-about-system__item-text">昇給・賞与制度</p>
                </div>
                <div class="p-about-system__item">
                    <div class="p-about-system__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/about-system-img02.png" alt=""></div>
                    <p class="p-about-system__item-text">自己啓発支援</p>
                </div>
                <div class="p-about-system__item">
                    <div class="p-about-system__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/about-system-img03.png" alt=""></div>
                    <p class="p-about-system__item-text">確定拠出年金</p>
                </div>
                <div class="p-about-system__item">
                    <div class="p-about-system__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/about-system-img04.png" alt=""></div>
                    <p class="p-about-system__item-text">メンター制度</p>
                </div>
                <div class="p-about-system__item">
                    <div class="p-about-system__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/about-system-img05.png" alt=""></div>
                    <p class="p-about-system__item-text">マイカー通勤可</p>
                </div>
            </div>
        </div>
    </div>

    <div class="p-about-gallery p-about-gallery__bg c-message__bg">
        <div class="p-about-heading c-heading l-content__inner">
            <h2 class="c-heading__primary">ルート21GALLERY</h2>
        </div>
        <div class="p-about-gallery__content">
            <div class="p-about-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/about-gallery01.jpg" alt=""></div>
            <div class="p-about-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/about-gallery02.jpg" alt=""></div>
            <div class="p-about-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/about-gallery03.jpg" alt=""></div>
            <div class="p-about-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/about-gallery04.jpg" alt=""></div>
            <div class="p-about-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/about-gallery05.jpg" alt=""></div>
            <div class="p-about-gallery__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/about-gallery06.jpg" alt=""></div>
        </div>
    </div>

    <div class="c-more c-more--bg l-content__inner wow fadeInUp" data-wow-duration="2s">
        <div class="c-more__items">
            <div class="c-more__item">
                <a href="<?php echo esc_url(home_url('job')); ?>" class="c-more__link">
                    <div class="c-more__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/more01.jpg" alt=""></div>
                    <div class="c-more__text">
                        <p>仕事を知る</p>
                    </div>
                </a>
            </div>
            <div class="c-more__item">
                <a href="<?php echo esc_url(home_url('about')); ?>" class="c-more__link">
                    <div class="c-more__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/more02.jpg" alt=""></div>
                    <div class="c-more__text">
                        <p>数値で見る<br>ルート21</p>
                    </div>
                </a>
            </div>
            <div class="c-more__item">
                <a href="<?php echo esc_url(home_url('environment')); ?>" class="c-more__link">
                    <div class="c-more__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/more03.jpg" alt=""></div>
                    <div class="c-more__text">
                        <p>働く仲間を知る</p>
                    </div>
                </a>
            </div>
            <div class="c-more__item">
                <a href="<?php echo esc_url(home_url('careers')); ?>" class="c-more__link">
                    <div class="c-more__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/more04.jpg" alt=""></div>
                    <div class="c-more__text">
                        <p>募集要項一覧</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="c-button p-recruit-button wow fadeInUp" data-wow-duration="2s">
            <a href="<?php echo esc_url(home_url('entry')); ?>" class="c-button__entry">
                <p class="c-button__entry-text">エントリーはこちら</p>
                <div class="c-button__entry-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/button-illust.png" alt=""></div>
            </a>
        </div>
    </div>

</main>
<?php get_footer(); ?>