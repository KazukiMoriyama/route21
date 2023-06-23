<?php get_header(); ?>
<main class="l-main">
    <section class="p-recruit-top l-content wow fadeInUp l-content" data-wow-duration="2s">
        <div class="p-recruit__content c-message__content p-recruit__bg c-message__bg">
            <div class="c-message__content-heading">
                <p>Message</p>
            </div>
            <div class="c-message__content-wrap">
                <div class="p-recruit-heading c-heading">
                    <h2 class="c-heading__primary">新しい世界を、つくろう。</h2>
                </div>
                <div class="c-message__content-body">
                    <div class="c-message__content-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/message01.jpg?1" alt="">
                    </div>
                    <div class="c-message__content-text">
                        <p class="c-message__content-title">これからの社会に必要とされる<br>「物流」「介護・福祉」の仕事に<br>挑戦してみませんか？</p>
                        <p class="u-font__text-primary">「物流」と「介護・福祉」という、社会から必要とされている業界で、自分の可能性に挑戦してみませんか？ ルート21は、福祉用具の運搬・設置・回収・洗浄・リユースという独自のビジネスモデルで成長を遂げてきた企業です。また現在も、お客様や社会のニーズに応えるため、業務の領域は拡大し続けています。運送業や介護・福祉の仕事が未経験という方でも大丈夫。スタッフそれぞれの能力が最大限に発揮できるよう、スキルアップをていねいにバックアップします。そしてゆくゆくは、会社の経営を支える立場に成長してもらいたいと考えています。お客様、そして福祉用具のご利用者様から「ありがとう」と感謝される仕事で、あなたの熱意と努力を、社会のために役立てください。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="c-more p-recruit-more l-content__inner wow fadeInUp" data-wow-duration="2s">
        <div class="c-more__items p-recruit-more__items">
            <div class="c-more__item p-recruit-more__item">
                <a href="<?php echo esc_url(home_url('voices')); ?>" class="c-more__link">
                    <div class="c-more__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/recruit-link01.jpg" alt=""></div>
                    <div class="c-more__text">
                        <p>先輩たちの声を聞く</p>
                        <div class="c-more__arrow"></div>
                    </div>
                </a>
            </div>
            <div class="c-more__item p-recruit-more__item">
                <a href="<?php echo esc_url(home_url('job')); ?>" class="c-more__link">
                    <div class="c-more__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/recruit-link02.jpg" alt=""></div>
                    <div class="c-more__text">
                        <p>仕事を知る</p>
                        <div class="c-more__arrow"></div>
                    </div>
                </a>
            </div>
            <div class="c-more__item p-recruit-more__item">
                <a href="<?php echo esc_url(home_url('about')); ?>" class="c-more__link">
                    <div class="c-more__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/recruit-link03.jpg" alt=""></div>
                    <div class="c-more__text">
                        <p>数値で見るルート21</p>
                        <div class="c-more__arrow"></div>
                    </div>
                </a>
            </div>
            <div class="c-more__item p-recruit-more__item">
                <a href="<?php echo esc_url(home_url('environment')); ?>" class="c-more__link">
                    <div class="c-more__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/recruit-link04.jpg" alt=""></div>
                    <div class="c-more__text">
                        <p>働く仲間を知る</p>
                        <div class="c-more__arrow"></div>
                    </div>
                </a>
            </div>
            <div class="c-more__item p-recruit-more__item">
                <a href="<?php echo esc_url(home_url('careers')); ?>" class="c-more__link">
                    <div class="c-more__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/recruit-link05.jpg" alt=""></div>
                    <div class="c-more__text">
                        <p>募集要項一覧</p>
                        <div class="c-more__arrow"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="c-button p-recruit-button wow fadeInUp" data-wow-duration="2s">
        <a href="<?php echo esc_url(home_url('careers')); ?>" class="c-button__entry">
            <p class="c-button__entry-text">エントリーはこちら</p>
            <div class="c-button__entry-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/button-illust.png" alt=""></div>
        </a>
    </div>
</main>
<?php get_footer(); ?>