<?php get_header(); ?>
<main class="news_single">
    <div class="content">
        <div class="news_single_heading">
            <time datetime="2023-01-01">2023.00.00</time>
            <h1 class="mincho">ここにタイトルが入ります</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/sample.webp" alt="" loading="lazy">
        </div>
        <div class="news_single_inner">
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
        <div class="news_single_select">
            <a class="before" href="<?php echo esc_url(home_url('')); ?>">新しい実績へ</a>
            <a href="<?php echo esc_url(home_url('')); ?>">一覧へ戻る</a>
            <a class="after" href="<?php echo esc_url(home_url('')); ?>">前の実績へ</a>
        </div>
    </div>
</main>
<?php get_footer(); ?>