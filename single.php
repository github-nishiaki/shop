<?php get_header()?>
<main>
    <div id="top" class="wrapper">
        <div>
            <div class="main-visual">
                <img class="main-img-shot" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/main-shot.jpg" alt="">
            </div>
        </div>
        <section id="news" class="">


            <h2 class="section-title">
                <span class="en">NEWS</span>
                <span class="ja">ニュース</span>
            </h2>


<!--            <ul class="list">-->
<!--                --><?php //if (have_posts()): ?>
<!--                    --><?php //while (have_posts()): the_post(); ?>
<!--                        <li>-->
<!--                            <div class="date-area">-->
<!--                                <time>--><?php //echo get_the_date(); ?><!--</time>-->
<!--                                <span>NEWS</span>-->
<!--                            </div>-->
<!--                            <h3>--><?php //echo the_title(); ?><!--</h3>-->
<!--                            <a href="--><?php //the_permalink(); ?><!--">--><?php //echo the_excerpt(); ?><!--</a>-->
<!--                            <a href="--><?php //the_permalink(); ?><!--" class="link-text">続きを読む...</a>-->
<!--                        </li>-->
<!--                    --><?php //endwhile; ?>
<!---->
<!--                --><?php //else: ?>
<!--                    <p>投稿がありません</p>-->
<!--                --><?php //endif; ?>
<!---->
<!---->
<!--            </ul>-->


        </section>



    </div>


</main>

<?php get_footer()?>