<?php get_header(); ?>
<main class="l-main entry_page">
    <div class="p-entry__form l-content">
        <div class="p-entry-heading c-heading l-content__inner">
            <h2 class="c-heading__primary">応募フォーム</h2>
        </div>
        <div class="l-content__inner">
            <ul class="p-entry__form-flow">
                <li class="p-entry__form-flow-item">必須項目のご入力</li>
                <li class="p-entry__form-flow-item current">入力内容のご確認</li>
                <li class="p-entry__form-flow-item">申し込み完了</li>
            </ul>

            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
    </div>
</main>
<?php get_footer(); ?>