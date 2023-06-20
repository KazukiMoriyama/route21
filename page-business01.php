<?php get_header(); ?>
<main class="business_single">
    <div class="business_single_fv">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/business01/fv.webp" alt="" loading="lazy">
        <h1 class="mincho">福祉用具配送部</h1>
    </div>
    <div class="business_single_grid wow fadeInUp" data-wow-duration="2s">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/business01/img_01.webp" alt="" loading="lazy">
            <figcaption>
                <h2>福祉用具運搬に特化した、<br class="pc_only">ロジスティックスを構築</h2>
                <p>福祉用具を必要とするご利用者様に対し、迅速に製品をお届けすることはもとより、すぐにでも使用したいというニーズに応えるべく、あらゆる福祉用具の仕様を知り尽くした専門スタッフが製品情報や取り扱い技術をアップデート。電動介護ベッドや介護機器等の設置から使用説明までをワンストップで担当します。</p>
            </figcaption>
        </figure>
        <div class="business_bg">
            <figure class="reverse">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/business01/img_02.webp" alt="" loading="lazy">
                <figcaption>
                    <h2>福祉用具を安全にお使いいただくまでをサポート。<br>レンタル卸会社、各センター間、介護ショップ等への運搬にも対応しています。</h2>
                    <p>介護ベッド、車椅子など福祉用具全般をエンドユーザーにお届けし、組み立て、設置、取り扱い説明までを行います。また、レンタル卸会社各センター間、介護ショップ等への運搬などにも対応しています。</p>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="business_select wow fadeInUp" data-wow-duration="2s">
        <ul>
            <li>
                <a href="<?php echo esc_url(home_url('business01')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/business_page_img01.webp" alt="" loading="lazy">
                    <p>福祉用具配送部</p>
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('business02')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/business_page_img02.webp" alt="" loading="lazy">
                    <p>洗浄消毒部</p>
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('business03')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/business_page_img03.webp" alt="" loading="lazy">
                    <p>ライフサービス事業部</p>
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('business04')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business/business_page_img04.webp" alt="" loading="lazy">
                    <p>一般貨物事業</p>
                </a>
            </li>
        </ul>
    </div>
</main>
<?php get_footer(); ?>