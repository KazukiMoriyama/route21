<?php get_header(); ?>
<main class="l-main">
    <div class="p-entry__form l-content">
        <div class="p-entry-heading c-heading l-content__inner">
            <h2 class="c-heading__primary">ご応募ありがとうございました</h2>
        </div>
        <div class="l-content__inner">
            <ul class="p-entry__form-flow">
                <li class="p-entry__form-flow-item">必須項目のご入力</li>
                <li class="p-entry__form-flow-item">入力内容のご確認</li>
                <li class="p-entry__form-flow-item current">申し込み完了</li>
            </ul>
            <p class="p-entry__form-text">
                この度はお問い合わせメールをお送りいただきありがとうございます。<br>後ほど、担当者よりご連絡をさせていただきます。<br>今しばらくお待ちくださいますよう、よろしくお願い申し上げます。</p>
        </div>
        <div class="c-button p-recruit-button wow fadeInUp" data-wow-duration="2s">
            <a href="<?php echo esc_url(home_url('')); ?>" class="c-button__entry">
                <p class="c-button__entry-text">TOPページに戻る</p>
                <div class="c-button__entry-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/button-illust.png" alt=""></div>
            </a>
        </div>
    </div>
</main>
<?php get_footer(); ?>