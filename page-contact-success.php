<?php get_header(); ?>
<main class="l-main">
    <div class="p-entry__form l-content">
        <div class="p-entry-heading c-heading l-content__inner">
            <h2 class="c-heading__primary">ご応募ありがとうございました</h2>
        </div>
        <div class="l-content__inner">
            <p class="p-entry__form-text">
                この度はお問い合わせメールをお送りいただきありがとうございます。<br>後ほど、担当者よりご連絡をさせていただきます。<br>今しばらくお待ちくださいますよう、よろしくお願い申し上げます。</p>
        </div>
        <div class="c-button p-recruit-button wow fadeInUp" data-wow-duration="2s">
            <a href="<?php echo esc_url(home_url('')); ?>" class="c-button__entry">
                <p class="c-button__entry-text">TOPページに戻る</p>
                <div class="c-button__entry-img"><img src="./img/button-illust.png" alt=""></div>
            </a>
        </div>
    </div>
</main>
<?php get_footer(); ?>