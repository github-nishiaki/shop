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
                        <a href="item1.html">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/1.jpg" alt="">
                            <p>クリアスカイコレクション</p>
                            <p>&yen;6,900 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="item2.html">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/2.jpg" alt="">
                            <p>アドベンチャーブレイズ</p>
                            <p>&yen;9,000 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="item3.html">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/3.jpg" alt="">
                            <p>ヴィンテージウェーブ</p>
                            <p>&yen;5,900 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="item4.html">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/4.jpg" alt="">
                            <p>フレッシュブリーズティー
                            </p>
                            <p>&yen;9,000 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="item5.html">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/5.jpg" alt="">
                            <p>サマーソニックス
                            </p>
                            <p>&yen;19,999 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="item6.html">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/6.jpg" alt="">
                            <p>ラディアントローズシャツ
                            </p>
                            <p>&yen;7,900 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="item7.html">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/7.jpg" alt="">
                            <p>ワンダフルウェーブウェア
                            </p>
                            <p>&yen;4,800 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="item8.html">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/8.jpg" alt="">
                            <p>エコーインフィニティティー
                            </p>
                            <p>&yen;10,000 +tax</p>
                        </a>
                    </li>
                </ul>
                <a class="link-text" href="products.html">View More</a>
            </div>
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