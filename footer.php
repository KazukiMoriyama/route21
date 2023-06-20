<?php if (!is_front_page()) : ?>
<?php endif; ?>
<ul class="accordion-area sp_only">
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
            <a href="<?php echo esc_url(home_url('company/#company02')); ?>">企業理念</a>
            <a href="<?php echo esc_url(home_url('company/#company03')); ?>">代表挨拶</a>
            <a href="<?php echo esc_url(home_url('company/#company05')); ?>">会社概要</a>
            <a href="<?php echo esc_url(home_url('company/#company06')); ?>">会社沿革</a>
            <a href="<?php echo esc_url(home_url('company/#company07')); ?>">アクセス</a>
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
            <a href="<?php echo esc_url(home_url('careers')); ?>">募集要項</a>
            <a href="<?php echo esc_url(home_url('entry')); ?>">応募エントリー</a>
        </div>
    </li>
</ul>
<footer class="footer" id="footer">
    <div class="footer_logo pc_only">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" alt="" loading="lazy">
    </div>
    <div class="footer_inner">
        <nav class="pc_only">
            <ul>
                <li>
                    <a href="<?php echo esc_url(home_url('strength')); ?>">ルート21の強み</a>
                    <div class="footer_inner_box">
                        <a href="<?php echo esc_url(home_url('business')); ?>">事業紹介</a>
                        <a href="<?php echo esc_url(home_url('business01')); ?>">福祉用具配送部</a>
                        <a href="<?php echo esc_url(home_url('business02')); ?>">洗浄消毒部</a>
                        <a href="<?php echo esc_url(home_url('business03')); ?>">ライフサービス事業部</a>
                        <a href="<?php echo esc_url(home_url('business04')); ?>">一般貨物事業</a>
                    </div>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('recruit')); ?>">採用情報</a>
                    <a href="<?php echo esc_url(home_url('job')); ?>">仕事を知る</a>
                    <a href="<?php echo esc_url(home_url('about')); ?>">会社を知る</a>
                    <a href="<?php echo esc_url(home_url('voices')); ?>">人を知る</a>
                    <a href="<?php echo esc_url(home_url('careers')); ?>">募集要項</a>
                    <a href="<?php echo esc_url(home_url('entry')); ?>">応募エントリー</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('company/#company02')); ?>">企業理念</a>
                    <a href="<?php echo esc_url(home_url('company/#company03')); ?>">代表挨拶</a>
                    <a href="<?php echo esc_url(home_url('company/#company05')); ?>">会社概要</a>
                    <a href="<?php echo esc_url(home_url('company/#company06')); ?>">会社沿革</a>
                    <a href="<?php echo esc_url(home_url('company/#company07')); ?>">アクセス</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a>
                </li>
            </ul>
        </nav>
        <div class="footer_sns">
            <a target="_blank" href="https://twitter.com/ROUTE_21_SHOP">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/twitter.svg" alt="" loading="lazy" />
            </a>
            <a target="_blank" href="https://www.facebook.com/ROUTE21SPEEDandSAFETY/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/facebook.svg" alt="" loading="lazy" />
            </a>
            <a target="_blank" href="https://www.instagram.com/route21_kikaku/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/instagram.png" alt="" loading="lazy" />
            </a>
        </div>
        <div class="footer_logo_sp sp_only">
            <a href="<?php echo esc_url(home_url('')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo_sp.svg" alt="" loading="lazy">
            </a>
        </div>
        <div class="footer_privacy">
            <a href="<?php echo esc_url(home_url('sitemap')); ?>">サイトマップ</a>
            <a href="<?php echo esc_url(home_url('privacy-policy')); ?>">プライバシーポリシー</a>
            <p>Copyright(C) ROUTE21 All Right Reserved.</p>
        </div>
    </div>
</footer>
<div class="sp_fixed_btn sp_only">
    <a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a>
    <a href="<?php echo esc_url(home_url('recruit')); ?>">採用情報</a>
</div>
<div class="page_top">
    <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/top_icon.png" alt="" loading="lazy">
    </a>
</div>
</body>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js?ver=<?php echo filemtime(get_template_directory() . '/assets/js/common.js'); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.min.js?ver=<?php echo filemtime(get_template_directory() . '/assets/js/script.min.js'); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js?ver=<?php echo filemtime(get_template_directory() . '/assets/js/wow.min.js'); ?>"></script>

<script>
    new WOW().init();
</script>

</html>