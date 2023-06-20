<?php get_header(); ?>
<main class="l-main contact2">
    <section class="p-entry l-content">
        <div class="p-entry__form">
            <div class="p-entry-heading c-heading l-content__inner">
                <h2 class="c-heading__primary">お問い合わせ</h2>
            </div>
            <div class="l-content__inner">
                <p class="p-entry__form-text">下記フォームよりお気軽にお問い合わせください。</p>

                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>