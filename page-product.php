<?php get_header() ?>
    <main>
        <section id="top" class="wrapper">
            <div>
                <h2 class="section-title">
                    <span class="en">Product List</span>
                    <span class="ja">商品一覧</span>
                </h2>
                <ul class="product-list">
                    <li>
                        <a href="<?php echo esc_url(home_url('/'));?>/item1.html">
                            <img  id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/1.jpg" alt="">
                            <p>クリアスカイコレクション</p>
                            <p>&yen;6,900 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/'));?>/item2.html">
                            <img id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/2.jpg" alt="">
                            <p>アドベンチャーブレイズ</p>
                            <p>&yen;9,000 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/'));?>/item3.html">
                            <img id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/3.jpg" alt="">
                            <p>ヴィンテージウェーブ</p>
                            <p>&yen;5,900 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/'));?>/item4.html">
                            <img id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/4.jpg" alt="">
                            <p>フレッシュブリーズティー
                            </p>
                            <p>&yen;9,000 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/'));?>/item5.html">
                            <img  id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/5.jpg" alt="">
                            <p>サマーソニックス
                            </p>
                            <p>&yen;19,999 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/'));?>/item6.html">
                            <img  id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/6.jpg" alt="">
                            <p>ラディアントローズシャツ
                            </p>
                            <p>&yen;7,900 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/'));?>/item7.html">
                            <img  id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/7.jpg" alt="">
                            <p>ワンダフルウェーブウェア
                            </p>
                            <p>&yen;4,800 +tax</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/'));?>/item8.html">
                            <img id="image_file" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/8.jpg" alt="">
                            <p>エコーインフィニティティー
                            </p>
                            <p>&yen;10,000 +tax</p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </main>

<!--    <main>-->
<!---->
<!--        <div id="top" class="wrapper">-->
<!--                --><?php //while (have_posts()):the_post(); ?>
<!--                    <time>--><?php //echo get_the_date()?><!--</time>-->
<!---->
<!--                    <h1>--><?php //the_title(); ?><!--</h1>-->
<!---->
<!---->
<!--                    <p>--><?php //the_content(); ?><!--</p>-->
<!---->
<!---->
<!--                --><?php //endwhile; ?>
<!---->
<!--        </div>-->
<!--    </main>-->

<?php get_footer() ?>