<?php get_header()?>
<main>
    <div id="top" class="wrapper">
        <div>
            <div class="main-visual">
                <div class="main-visual-text">
                    <h2>NEW ARRIVAL</h2>
                    <p>新作アイテムが続々登場！</p>
                </div>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/main.jpg" alt="">
            </div>
        </div>
        <section id="news" class="">


            <h2 class="section-title">
                <span class="en">NEWS</span>
                <span class="ja">ニュース</span>
            </h2>


            <ul class="list">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <li>
                            <div class="date-area">
                                <time><?php echo get_the_date(); ?></time>
                                <span>NEWS</span>
                            </div>
                            <h3><?php echo the_title(); ?></h3>
                            <a href="<?php the_permalink(); ?>"><?php echo the_excerpt(); ?></a>
                            <a href="<?php the_permalink(); ?>" class="link-text">続きを読む...</a>
                        </li>
                    <?php endwhile; ?>

                <?php else: ?>
                    <p>投稿がありません</p>
                <?php endif; ?>


            </ul>


        </section>
        <section id="product">
            <div>
                <h2 class="section-title">
                    <span class="en">Product List</span>
                    <span class="ja">商品一覧</span>
                </h2>
                <ul class="product-list">
                    <li>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/1.jpg" alt="">
                            <p>クリアスカイコレクション</p>
                            <p>&yen;6,900 +tax</p>
                    </li>
                    <li>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/2.jpg" alt="">
                            <p>アドベンチャーブレイズ</p>
                            <p>&yen;9,000 +tax</p>

                    </li>
                    <li>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/3.jpg" alt="">
                            <p>ヴィンテージウェーブ</p>
                            <p>&yen;5,900 +tax</p>
                    </li>
                    <li>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/4.jpg" alt="">
                            <p>フレッシュブリーズティー
                            </p>
                            <p>&yen;9,000 +tax</p>
                    </li>
                    <li>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/5.jpg" alt="">
                            <p>サマーソニックス
                            </p>
                            <p>&yen;19,999 +tax</p>
                    </li>
                    <li>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/6.jpg" alt="">
                            <p>ラディアントローズシャツ
                            </p>
                            <p>&yen;7,900 +tax</p>
                    </li>
                    <li>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/7.jpg" alt="">
                            <p>ワンダフルウェーブウェア
                            </p>
                            <p>&yen;4,800 +tax</p>
                    </li>
                    <li>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/8.jpg" alt="">
                            <p>エコーインフィニティティー
                            </p>
                            <p>&yen;10,000 +tax</p>
                    </li>
                </ul>
                <a  href="<?php echo esc_url(home_url('/'));?>product/" class="btn02 rotatefront"><span>もっと見る</span><span>View More</span></a>
            </div>
        </section>
        <section id="q">
            <h2 class="q-title">Q.よくある質問</h2>
            <ul class="accordion-area">
                <li>
                    <section>
                        <h3 class="title">質問: 「この洋服はどのように洗えますか？」</h3>
                        <div class="box">
                            <p>返答: 「製品の洗濯方法については、洗濯表示をご確認ください。一般的には手洗いやドライクリーニングが推奨されますが、洗濯機での洗濯も可能な場合があります。」</p>
                        </div>
                    </section>
                </li>
                <li>
                    <section>
                        <h3 class="title">質問: この洋服はサイズ交換可能ですか？</h3>
                        <div class="box">
                            <p>返答: 「はい、商品の未使用の場合に限り、サイズ交換を承っております。お買い上げから一定期間内であれば、サイズの変更や返品も可能です。」</p>
                        </div>
                    </section>
                </li>
                <li>
                    <section>
                        <h3 class="title">質問: 「このデザインの洋服は他に何色展開がありますか？」</h3>
                        <div class="box">
                            <p>返答: 「このデザインにはさまざまなカラーオプションがございます。在庫状況や季節によって異なりますので、店舗スタッフにお尋ねいただくか、オンラインストアをご確認ください。」</p>
                        </div>
                    </section>
                    <section>
                        <h3 class="title">質問: 「この素材は肌に優しいですか？」</h3>
                        <div class="box">
                            <p>返答: 「当店の洋服は素材にこだわっており、肌に優しい素材を選んでいます。ただし、個々の皮膚によって異なる場合がありますので、ご購入前に素材を確認されることをお勧めします。」</p>
                        </div>
                    </section>
                    <section>
                        <h3 class="title">質問: 「この洋服はどの季節に適していますか？」</h3>
                        <div class="box">
                            <p>返答: 「この洋服は通気性がよく、軽量な素材でできていますので、春から夏にかけての季節に最適です。また、レイヤリングして秋や冬にも着用いただけるデザインです。」</p>
                        </div>
                    </section>

                </li>
            </ul>

        </section>
        <section id="company" class="">
            <div class="text">
                <h2 class="section-title">
                    <span class="en">COMPANY</span>
                    <span class="ja">会社情報</span>
                </h2>

                <dl class="info">
                    <dt>会社名</dt>
                    <dd>株式会社Tシャツ屋さん</dd>
                    <dt>所在地</dt>
                    <dd>鳥取県米子市加茂町１丁目</dd>
                    <dt>代表</dt>
                    <dd>ＸＸＸＸＸＸ</dd>
                    <dt>設立</dt>
                    <dd>2024年1月1日</dd>
                    <dt>資本金</dt>
                    <dd>3,000,000円</dd>
                    <dt>事業内容</dt>
                    <dd>衣服販売</dd>
                    <dd class="add">インターネットメディア事業</dd>
                    <dd class="add">プロモーション企画・制作</dd>
                    <dd class="add">ソーシャル企画・運営</dd>
                </dl>
            </div>

            <div class="map">
                <iframe title="地図"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3559.045972947064!2d133.33103622356663!3d35.42778716907922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1709706165183!5m2!1sja!2sjp"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>
        </section>


    </div>


</main>

<?php get_footer()?>