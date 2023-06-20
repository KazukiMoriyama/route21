<?php get_header(); ?>
<main class="news_single">
    <div class="content">
        <div class="news_single_heading">
            <time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
            <h1 class="mincho"><?php the_title(); ?></h1>
            <?php the_post_thumbnail('thumbnail'); ?>
        </div>
        <div class="news_single_inner">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
        <div class="news_single_select">
            <div class="news_single_btn">
                <?php next_post_link('<div class="before">%link</div>', '新しい実績へ'); ?>
            </div>
            <div class="news_single_btn">
                <a href="<?php echo esc_url(home_url('news')); ?>">一覧へ戻る</a>
            </div>
            <div class="news_single_btn">
                <?php previous_post_link('<div class="after">%link</div>', '前の実績へ'); ?>
            </div>
        </div>


    </div>
</main>
<?php get_footer(); ?>