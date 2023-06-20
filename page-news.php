<?php get_header(); ?>
<main class="news">
    <div class="content wow fadeInUp" data-wow-duration="2s">
        <h1 class="mincho">お知らせ一覧</h1>
        <ul>
            <?php
            $paged = (int) get_query_var('paged');
            $args = array(
                'posts_per_page' => 6,
                'paged' => $paged,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li>
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
                        <h2><?php the_title(); ?></h2>
                        <p> <?php
                            if (mb_strlen($post->post_content, 'UTF-8') > 200) {
                                $content = mb_substr(strip_tags($post->post_content), 0, 200, 'UTF-8');
                                echo $content . '…';
                            } else {
                                echo strip_tags($post->post_content);
                            }
                            ?></p>
                        <a class="btn" href="<?php the_permalink(); ?>">詳細　＞</a>
                    </li>
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>

        </ul>
    </div>
</main>
<?php get_footer(); ?>