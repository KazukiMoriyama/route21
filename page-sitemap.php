<?php get_header(); ?>
<main class="sitemap">
    <h1 class="mincho content">サイトマップ</h1>
    <div class="content">
        <ul class="sitemap_list">
            <li class="item">
                <div class="page_title">
                    <a href="<?php echo esc_url(home_url('strength')); ?>">ルート21の強み</a>
                </div>
            </li>
            <li class="item">
                <div class="page_title">
                    <a href="<?php echo esc_url(home_url('business')); ?>">事業紹介</a>
                </div>
                <div class="page_sub_title">
                    <a href="<?php echo esc_url(home_url('business01')); ?>">福祉用具配送部</a><br>
                    <a href="<?php echo esc_url(home_url('business02')); ?>">洗浄消毒部</a><br>
                    <a href="<?php echo esc_url(home_url('business03')); ?>">ライフサービス事業部</a><br>
                    <a href="<?php echo esc_url(home_url('business04')); ?>">一般貨物事業</a>
                </div>
            </li>
            <li class="item">
                <div class="page_title">
                    <a href="<?php echo esc_url(home_url('company')); ?>">企業情報</a>
                </div>
            </li>
            <li class="item">
                <div class="page_title">
                    <a href="<?php echo esc_url(home_url('recruit')); ?>">採用情報</a>
                </div>
                <div class="page_sub_title">
                    <a href="<?php echo esc_url(home_url('voices')); ?>">先輩たちの声を聞く</a><br>
                    <div class="sub_page">
                        <a href="<?php echo esc_url(home_url('voice01')); ?>">先輩インタビュー①</a><br>
                        <a href="<?php echo esc_url(home_url('voice02')); ?>">先輩インタビュー②</a><br>
                        <a href="<?php echo esc_url(home_url('voice03')); ?>">先輩インタビュー③</a><br>
                        <a href="<?php echo esc_url(home_url('voice04')); ?>">先輩インタビュー④</a><br>
                        <a href="<?php echo esc_url(home_url('voice05')); ?>">先輩インタビュー⑤</a><br>
                    </div>
                    <a href="<?php echo esc_url(home_url('careers')); ?>">募集要項一覧</a>
                    <div class="sub_page">
                        <a href="<?php echo esc_url(home_url('kantou')); ?>">募集要項 関東</a><br>
                        <a href="<?php echo esc_url(home_url('chubu')); ?>">募集要項 中部</a><br>
                        <a href="<?php echo esc_url(home_url('kansai')); ?>">募集要項 関西</a>
                    </div>
                    <a href="<?php echo esc_url(home_url('about')); ?>">数値で見るルート21</a><br>
                    <a href="<?php echo esc_url(home_url('job')); ?>">私たちの仕事を知る</a><br>
                    <div class="sub_page">
                        <a href="<?php echo esc_url(home_url('job-style01')); ?>">福祉用具配送部</a><br>
                        <a href="<?php echo esc_url(home_url('job-style02')); ?>">洗浄消毒部</a><br>
                        <a href="<?php echo esc_url(home_url('job-style03')); ?>">ライフサービス事業部</a><br>
                        <a href="<?php echo esc_url(home_url('job-style04')); ?>">業務部</a><br>
                        <a href="<?php echo esc_url(home_url('job-style05')); ?>">総務・経理部</a><br>
                    </div>
                    <a href="<?php echo esc_url(home_url('environment')); ?>">働く仲間を知る</a>
                </div>
            </li>
            <li class="item">
                <div class="page_title">
                    <a href="<?php echo esc_url(home_url('careers')); ?>">採用応募フォーム</a>
                </div>
            </li>
            <li class="item">
                <div class="page_title">
                    <a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a>
                </div>
            </li>
            <li class="item">
                <div class="page_title">
                    <a href="<?php echo esc_url(home_url('news')); ?>">お知らせ</a>
                </div>
            </li>
            <li class="item">
                <div class="page_title">
                    <a href="<?php echo esc_url(home_url('privacypolicy')); ?>">プライバシーポリシー</a>
                </div>
            </li>
        </ul>
    </div>
</main>
<?php get_footer(); ?>