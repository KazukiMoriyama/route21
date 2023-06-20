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
                    <dd class="p-entry__dd">総合職（配送業務、倉庫業務、事務処理業務他）</dd>
                    <dt class="p-entry__dt">主な仕事内容</dt>
                    <dd class="p-entry__dd">・福祉用具取扱会社への洗浄消毒依頼品のルート配送（集荷・返却）業務<br>・個人宅、福祉施設、介護用品店などへ福祉用具の納品・回収（組立・分解）<br>および商品の取扱説明など<br>・当社洗浄・消毒センターでの商品入出荷業務および商品管理業務</dd>
                    <dt class="p-entry__dt">資格・経験等</dt>
                    <dd class="p-entry__dd">・普通自動車一種免許（ＡＴ限定不可）<br>・高卒以上・人と接するのが好きな方。<br>（明るくハキハキとした受け答えができる方。）<br>・福祉・介護業界に興味のある方。<br>2t～4tトラック運転経験者尚可<br>介護保険サービス事業経験者尚可</dd>
                    <dt class="p-entry__dt">勤務時間</dt>
                    <dd class="p-entry__dd">8：00～17：00 ※残業有り</dd>
                    <dt class="p-entry__dt">休日・休暇</dt>
                    <dd class="p-entry__dd">週休二日 日・祝 夏季・年末年始休暇<br>※土曜は出勤になる場合があります。土曜日は9：00～の勤務</dd>
                    <dt class="p-entry__dt">待遇</dt>
                    <dd class="p-entry__dd">・普通自動車一種免許（ＡＴ限定不可）<br>・高卒以上・人と接するのが好きな方。<br>（明るくハキハキとした受け答えができる方。）<br>・福祉・介護業界に興味のある方。<br>>2t～4tトラック運転経験者尚可<br>介護保険サービス事業経験者尚可</dd>
                    <dt class="p-entry__dt">勤務先所在地</dt>
                    <dd class="p-entry__dd">①関東商品センター 〒340-0835 埼玉県八潮市浮塚926-1 TEL：048-994-2009<br>②中部商品センター 〒452-0932 愛知県清須市朝日愛宕23-1 TEL：052-938-3413<br>③関西商品センター 〒581-0039 大阪府八尾市太田新町7-200 TEL：072-943-1121<br>※採用担当宛まで</dd>
                    <dt class="p-entry__dt">応募方法</dt>
                    <dd class="p-entry__dd">募集地の採用担当へ電話にて応募の旨をご連絡の上、<br>担当センター宛に下記書類を郵送して下さい。<br>※必要書<br>◆履歴書（写真つき）<br>◆職務経歴書書類選考の上、<br>選考を通過された方にはこちらより改めて別途ご連絡させていただきます。</dd>
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