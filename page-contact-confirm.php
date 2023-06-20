<?php get_header(); ?>
<main class="l-main contact2">
    <div class="p-entry__form l-content">
        <div class="p-entry-heading c-heading l-content__inner">
            <h2 class="c-heading__primary">応募フォーム</h2>
        </div>
        <div class="l-content__inner">

            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>