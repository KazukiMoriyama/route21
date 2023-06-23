<?php get_header(); ?>
<main class="l-main entry_page">
    <section class="p-entry l-content">
        <div class="p-entry-heading c-heading l-content__inner">
            <h2 class="c-heading__primary">募集要項／エントリー</h2>
        </div>
        <div class="p-entry__bg c-message__bg">
            <div class="l-content__inner">
                <dl class="p-entry__box">
                    <dt class="p-entry__dt">募集職種</dt>
                    <dd class="p-entry__dd"><?php echo nl2br(get_field('entry_1')); ?></dd>
                    <dt class="p-entry__dt">主な仕事内容</dt>
                    <dd class="p-entry__dd"><?php echo nl2br(get_field('entry_2')); ?></dd>
                    <dt class="p-entry__dt">資格・経験等</dt>
                    <dd class="p-entry__dd"><?php echo nl2br(get_field('entry_3')); ?></dd>
                    <dt class="p-entry__dt">勤務時間</dt>
                    <dd class="p-entry__dd"><?php echo nl2br(get_field('entry_4')); ?></dd>
                    <dt class="p-entry__dt">休日・休暇</dt>
                    <dd class="p-entry__dd"><?php echo nl2br(get_field('entry_5')); ?></dd>
                    <dt class="p-entry__dt">待遇</dt>
                    <dd class="p-entry__dd"><?php echo nl2br(get_field('entry_6')); ?></dd>
                    <dt class="p-entry__dt">勤務先所在地</dt>
                    <dd class="p-entry__dd"><?php echo nl2br(get_field('entry_7')); ?></dd>
                    <dt class="p-entry__dt">応募方法</dt>
                    <dd class="p-entry__dd"><?php echo nl2br(get_field('entry_8')); ?></dd>

                </dl>
            </div>
        </div>
    </section>

    <div class="p-entry__form">
        <div class="p-entry-heading c-heading l-content__inner">
            <h2 class="c-heading__primary">応募フォーム</h2>
        </div>
        <div class="l-content__inner">
            <p class="p-entry__form-text">以下の応募フォームを入力ください。<br>入力いただいた内容を元に書類選考をさせていただきます。</p>
            <ul class="p-entry__form-flow">
                <li class="p-entry__form-flow-item current">必須項目のご入力</li>
                <li class="p-entry__form-flow-item">入力内容のご確認</li>
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
    </div>


</main>
<?php get_footer(); ?>